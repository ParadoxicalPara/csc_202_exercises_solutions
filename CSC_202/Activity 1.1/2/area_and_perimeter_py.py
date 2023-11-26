# A program to read radius of a circle from the user and find the area and the perimeter of the circle
PI = 3.1415
def main():
    radius = float(input("Enter radius: "))

    area = PI*(radius**2)
    perimeter = 2*PI*radius

    print(f"Area: {area}\nPerimeter: {perimeter}")
main()