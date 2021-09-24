

A = [[2,7,3],
    [4 ,5,6],
    [7,8,9]]

B = [[5,8,1,7],
    [6,7,4,3],
    [4,5,6,9]]

res = [[0,0,0,0],
       [0,0,0,0],
       [0,0,0,0]]


for i in range(len(A)):
  
   for j in range(len(B[0])):
      
       for k in range(len(B)):
           res[i][j] += A[i][k] * B[k][j]

for r in res:
   print(r)
