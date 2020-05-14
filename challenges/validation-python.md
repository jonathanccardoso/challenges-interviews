## Problems ##

- Explicar seu desing e instruções para executar seu aplicativo
- Usar POO, para ter o codigo de qualidade de produção (para executar, manter e evoluir)
- Seus dados de entrada tem que ser por meio de um arquivo de texto

* 3 dias para realização
* Resolução é um projeto web
* Tem que hospedar em um servidor (heroku, hosstinger, githubpages) e fornecer link
* Usar POO (se possível)

## Links ##
https://imasters.com.br/artigo/10824/desenvolvimento/aplicacoes-rapidas-para-web-com-django/?trace=1519021197&source=single
https://django-portuguese.readthedocs.io/en/1.0/intro/tutorial01.html#criando-um-projeto
https://pt.slideshare.net/nossal/django-4405387

Introduction to the Problems
•   The resolution must be a web application.
•   There must be a way to supply the application with the input data via text file that will be uploaded
•   The application must run
•   The code needs to be hosted in your GitHub account
•   You need to host the application in a server of your choice and give us a link to access and use the application
•   You should provide sufficient evidence that your solution is complete by, as a minimum, indicating that it works correctly against the supplied test data


## Problem One: Validate Credit Card ##

You and Fredrick are good friends. Yesterday, Fredrick received credit cards from ABCD Bank. He wants to verify whether his credit card numbers are valid or not. You happen to be great at regex so he is asking for your help!

A valid credit card from ABCD Bank has the following characteristics: 

► It must start with a 4, 5 or 6. 
► It must contain exactly 16 digits. 
► It must only consist of digits (0-9). 
► It may have digits in groups of 4, separated by one hyphen "-". 
► It must NOT use any other separator like ' ' , '_', etc. 
► It must NOT have 4 or more consecutive repeated digits.

Examples:

    Valid Credit Card Numbers

    4253625879615786
    4424424424442444
    5122-2368-7954-3214

    Invalid Credit Card Numbers

    42536258796157867       #17 digits in card number → Invalid 
    4424444424442444        #Consecutive digits are repeating 4 or more times → Invalid
    5122-2368-7954 - 3214   #Separators other than '-' are used → Invalid
    44244x4424442444        #Contains non digit characters → Invalid
    0525362587961578        #Doesn't start with 4, 5 or 6 → Invalid
    
Input Format

    The first line of input contains an integer N. 
    The next N lines contain credit card numbers.


Constraints

    0 < N < 100

Output Format

    Print 'Valid' if the credit card number is valid. Otherwise, print 'Invalid'. Do not print the quotes.


Sample Input

    6
    4123456789123456
    5123-4567-8912-3456
    61234-567-8912-3456
    4123356789123456
    5133-3367-8912-3456
    5123 - 3567 - 8912 - 3456

Sample Output

    Valid
    Valid
    Invalid
    Valid
    Invalid
    Invalid

## Problem Two: Gas Station ##

    Using the Python language, have the function GasStation(strArr) take strArr which will be an an array consisting of the following elements: N which will be the number of gas stations in a circular route and each subsequent element will be the string g:c where g is the amount of gas in gallons at that gas station and c will be the amount of gallons of gas needed to get to the following gas station. For example strArr may be: ["4","3:1","2:2","1:2","0:1"]. Your goal is to return the index of the starting gas station that will allow you to travel around the whole route once, otherwise return the string impossible. For the example above, there are 4 gas stations, and your program should return the string 1 because starting at station 1 you receive 3 gallons of gas and spend 1 getting to the next station. Then you have 2 gallons + 2 more at the next station and you spend 2 so you have 2 gallons when you get to the 3rd station. You then have 3 but you spend 2 getting to the final station, and at the final station you receive 0 gallons and you spend your final gallon getting to your starting point. Starting at any other gas station would make getting around the route impossible, so the answer is 1. If there are multiple gas stations that are possible to start at, return the smallest index (of the gas station). N will be >= 2.


Sample Input:
    "4","1:1","2:2","1:2","0:1"
    "4","0:1","2:2","1:2","3:1"

Sample Output:
    "impossible"
    "4"
