print("========= Chat BOT of UVPCE ==========")
print("***** Types of Question you can Ask *****\n")
print("1. Hi|Hey|Hai")
print("2. How many branch is there|How many branch is there in UVPCE")
print("3. How many year of Engineering in B.Tech")
print("4. How many Semester is there in whole B.Tech")
print("5. What is your marking system")
print("6. In your collage practical lab is there")
print("7. What is the time of collage | time")
print("8. What is location of collage | location | address")
print("9. There is internet connection is there")
print("10. What type of internet connection is there")
print("11. What is the system config of IT department in lab")
print("12. How many student there in a class")
print("13. How many student there in a lab")
print("14. What type of branch is there | types of branch")
print("15. hello | helo")
print("16. How are you | How are you?")
print("17. What is your name? | What is your name")
print("18. Is there a hostel available?")
print("19. Is a bus service available for commuters?")
print("20. Stop|Exit|Quit|Bye|Buye|BY\n\n")
while (True):
    que = input("\nType you question: ").lower().strip()

    if que in ["hi","hey","hai"]:
        print("Hi, how can i help you")
    elif que in ["how many branch is there","how many branch is there in uvpce"]:
        print("In your collage there are 10 no of branches id there")
    elif que in ["how many year of engineering in b.tech"]:
        print("There are 4 year in B.tech after 12th and There are 3 year study in B.tech after Diploma")
    elif que in ["how many semester is there in whole b.tech"]:
        print("There are total 8 senester and each year 2 semester")
    elif que in ["what is your marking system"]:
        print("====== Theory ======\n")
        print("Total: 100")
        print("Internal Exam: 20 Mark")
        print("Quiz: 10 Mark")
        print("Assignment: 5 Mark")
        print("Attendance: 5 Mark")
        print("External Exam: 60 Mark")
        print("\n====== Practical ======\n")
        print("Total: 50")
        print("Lab Attendance: 5 Mark")
        print("Lab Practical Substitution: 10 Mark")
        print("Laboratory Continuum Evacuation : 15 Mark")
        print("Practical Exam: 10 Mark")
        print("VIVA Exam: 10 Mark")
    elif que in ["in your collage practical lab is there"]:
        print("Yes")
    elif que in ["what is the time of collage","time"]:
        print("9 AM to 4 PM")
    elif que in ["what is location of collage","location","address"]:
        print("Ganpat University, mehsana to gojariya highway\nvillage: kherva\ntaluko: mehsana\ndistrict: mehsana\nzipcode: 384012")
    elif que in ["there is internet connection is there"]:
        print("Yes")
    elif que in ["what type of internet connection is there"]:
        print("Optical Fiber, 1gbps speed")
    elif que in ["what is the system config of it department in lab"]:
        print("OS: windows 10")
        print("RAM: 8GB")
        print("CPU: intel core i5")
        print("Internet Connection:  active")
    elif que in ["how are you","how are you?"]:
        print("I am Fine.\nWhat about you?")
    elif que in ["how many student there in a class"]:
        print("It's not fix but on and average 60 to 70 students is there. But in case of elective subject it not fix because no of student in a class change acording to subject selection by student.")
    elif que in ["how many student there in a lab"]:
        print("20 to 30 students is there in a LAB.")
    elif que in ["what type of branch is there in b.tech","types of branch in b.tech"]:
        print("1. Marine Engineering")
        print("2. Computer Engineering")
        print("3. Biomedical Engineering")
        print("4. Mechanical Engineering")
        print("5. Mechatronics Engineering")
        print("6. Electrical Engineering")
        print("7. Civil Engineering")
        print("8. Information Technology")
        print("9. Computer Science and Engineering (Artificial Intelligence)")
        print("10. Automobile Engineering")
        print("11. Computer Science and Business Systems")
        print("12. Petrochemical Engineering")
    elif que in ["hello","helo"]:
        print("Hello")
    elif que in ["what is your name?","what is your name"]:
        print("My name is ChatBOT")
    elif que in ["is there a hostel available?"]:
        print("Yes")
    elif que in ["is a bus service available for commuters?"]:
        print("Yes")
    elif que in ["stop","exit","quit","bye","buye","by"]:
        print("Have a nice day")
        break
    else:
        print("Sorry, I can't understand you question")