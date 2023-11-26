# This is a program for finding the solution to Quadratic Equations.

# This function computes the two roots of a quadratic equation.
def compute_quadratic_roots_of(a,b,c):
    discriminant = b*b - 4*a*c

    root1 = (-b + discriminant**(1/2))/(2*a)
    root2 = (-b - discriminant**(1/2))/(2*a)

    return root1, root2

def main():
    print("Solve Quadratic Equation of the form: ax^2 + bx + c = 0.\n")

    a = float(input("Enter a: "))
    b = float(input("Enter b: "))
    c = float(input("Enter c: "))

    root1, root2 = compute_quadratic_roots_of(a,b,c)

    print(f"\nSolution Set:\nRoot 1: {root1}\tRoot 2: {root2}")

main()
