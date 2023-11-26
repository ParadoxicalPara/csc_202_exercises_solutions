# A program to find nth fibonacci number.

def fibonacci(n):
    if n==1 or n==2: return 1
    elif n<1: return "Invalid! n must be > 0."
    return fibonacci(n-1) + fibonacci(n-2)

def main():
    n = int(input("Enter the nth Fibonacci number you want to find: "))

    print(f"Result: {fibonacci(n)}")
    
main()