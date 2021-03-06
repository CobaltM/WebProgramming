import numpy as np

cur_x = np.array([0,0,0,0,0],dtype=float)#starting point x=(0,0,0,0,0)
rate = 0.001 # step size
precision = 0.00000001 #convergence indicator
previous_step_size=1; #convergence test
mi = 1000 # maximum number of iterations
i = 0 #iteration counter

A=np.array([[1,1,1,1,1],
[1,2,4,8,16],
[1,3,9,27,81],
[1,4,16,64,256],
[1,5,25,125,625]]
)#given
b=np.array([5,31,121,341,781]) #given

def derivative(narray): #derivative of any row of ||Ax-b||^2
    return (2*narray)


def rootfunc(i,x,a,b): # calculates 1 row of Ax-b
    return (a[i]*x-b[i])
j=0;
for j in range(0,4): #5 dim
    i=0
    previous_step_size=1;
    while i<mi and previous_step_size>precision: #keeps iterating until set number of iterations or convergence
        prev_x = cur_x[j]
        cur_x[j] = prev_x-rate*(np.sum(derivative(rootfunc(j,cur_x[j],A,b)))) # calculate gradient descent key step
        previous_step_size = abs(cur_x[j] - prev_x)  # Change in x
        i=i+1

print("The local minimum occurs at", cur_x)

#The local min occurs at [5 5 5 5 0]

#My choice of N is 0.001