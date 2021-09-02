from typing import List
class Solution:
    def lexicalOrder(self, n: int) -> List[int]:
        res = []
        for i in range(1, n+1):
            res.append(str(i))
        res.sort()
        res = [int(x) for x in res]
        return res

if __name__ == '__main__':
    solution = Solution()
    result = solution.lexicalOrder(13)
    print(result)
