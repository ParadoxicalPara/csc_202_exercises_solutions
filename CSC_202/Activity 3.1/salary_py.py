# A program to output a salary based on the grade of the salary.

def compute_grade_salary(grade):
    grade = grade.upper()
    if grade=="A": return "#15,000"
    elif grade=="B": return "#12,000"
    elif grade=="C": return "#10,000"
    elif grade=="D": return "#9,0000"
    else:
        return "Invalid grade!\nGrade must be: A,B,C or D"

def main():
    grade = input("Enter salary grade: ")

    print(f"Salary: {compute_grade_salary(grade)}")

main()