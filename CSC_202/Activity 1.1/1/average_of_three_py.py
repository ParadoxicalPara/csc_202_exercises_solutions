# A program to find the average of three numbers

def average(*args):
    sum_of_numbers = sum(args)
    return sum_of_numbers/len(args)

def main():
    num1 = 5
    num2 = 7
    num3 = 3

    print(f"The average of {num1}, {num2} and {num3} is: {average(num1, num2, num3)}")
main()