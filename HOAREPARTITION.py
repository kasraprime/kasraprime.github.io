def HOAREPARTITION(A,p,r):
    x=A[p]
    i=p-1
    j=r+1
    while True:
        while True:
            j=j-1
            if (A[j] <= x): break

        while True:
            i=i+1
            if (A[i] >= x):break

        if i<j:
            A[i],A[j]=A[j],A[i]
        else:
            return j
        print("A=",A)
        print("x=",x)
        print("i=",i)
        print("j=",j)
        print("*******")

A=[13,19,9,5,12,8,7,4,11,2,6,21]
temp=HOAREPARTITION(A,0,11)
print(temp)
