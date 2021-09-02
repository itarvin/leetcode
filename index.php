<?php
//遍历当前目录下所有文件的和目录，并以树装形式显示
//1.打开目录句柄，获取句柄资源
//2.读取句柄资源，并显示当前和子目录下的（目录和文件名称）
function getDirFile($path){

	if(!($file_handler=opendir($path)))
		return;

	$fileNTimes=array();
	//遍历-当前目录的"文件",排除该php文件
	while(false !== ($file=readdir($file_handler))){
		if($file=='.' || $file=='..' || $file=='index.php')
			continue;
		$fileNTimes[filemtime($path.'/'.$file)]=$file;
	}
	//倒序
	krsort($fileNTimes);

	foreach ($fileNTimes as $mtime=>$file)
	{
		$file_path="$path/$file";							//路径
		$rel_path=str_replace(__DIR__."/", "", $file_path);	//相对路径
		//若为-目录
		if(is_dir($file_path)){
			//根据"目录级别"缩进
			if(substr_count($file_path,"/")>1){
				$count=str_repeat("  ",substr_count($file_path,"/"));
				echo $count.'+'.$file;
			}else{
				echo '+'.$file;
			}
			echo "<br/>";
			getDirFile($file_path);
		}
		//若为-文件
		else{
			if(substr_count($file_path,"/")>1){
				$count=str_repeat("  ",substr_count($file_path,"/"));
				echo $count.getFile_html($rel_path,$file).getTime_html($mtime);

			}else{
				echo getFile_html($file,$file).getTime_html($mtime);
			}
			echo "<br/>";
		}
	}
}

function getTime_html($time){
	return '<a style="font-size:10px;color:grey"> '.date('(Y-m-d H:m:s)',$time).'</a>';
}

function getFile_html($rel_path,$file){
	return '<a href="'.$rel_path.'">'.$file.'</a>';
}


//-----------------------------------------

$path=__DIR__;
getDirFile($path);
