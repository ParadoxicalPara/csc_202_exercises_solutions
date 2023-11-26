# A program to print out the grade of a score entered by the user.

def Grade(score):   # Function to grade scores
    if 0<=score and score<45: return "F"
    elif 45<=score and score<50: return "D"
    elif 50<=score and score<60: return "C"
    elif 60<=score and score<70: return "B"
    elif 70<=score and score<100: return "A"
    else:
        return "Invalid score :(\nScore must be 0-100"

def main():
    score = float(input("Enter score to be graded: "))

    print(f"Grade: {Grade(score)}")
main()