<!-- PHP date function is an in-built function that simplify working with date data types. 
The PHP date function is used to format a date or time into a human readable format. 

Syntax:

date(format,[timestamp]);

“date(…)” is the function that returns the current timestamp in PHP on the server.
“format” is the general format which we want our output.


Format:

d - The day of the month (from 01 to 31)
D - A textual representation of a day (three letters)
j - The day of the month without leading zeros (1 to 31)
l (lowercase 'L') - A full textual representation of a day
N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
z - The day of the year (from 0 through 365)
W - The ISO-8601 week number of year (weeks starting on Monday)
F - A full textual representation of a month (January through December)
m - A numeric representation of a month (from 01 to 12)
M - A short textual representation of a month (three letters)
n - A numeric representation of a month, without leading zeros (1 to 12)
t - The number of days in the given month
L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
o - The ISO-8601 year number
Y - A four digit representation of a year
y - A two digit representation of a year
a - Lowercase am or pm
A - Uppercase AM or PM
B - Swatch Internet time (000 to 999)
g - 12-hour format of an hour (1 to 12)
G - 24-hour format of an hour (0 to 23)
h - 12-hour format of an hour (01 to 12)
H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
u - Microseconds (added in PHP 5.2.2)
e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
O - Difference to Greenwich time (GMT) in hours (Example: +0100)
P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
T - Timezone abbreviations (Examples: EST, MDT)
Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)

Get a Time
Here are some characters that are commonly used for times:

H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)

PHP Time parameters

“r”	Returns the full date and time	

echo date("r");

“a”,”A”	Returns whether the current time is am or pm, AM or PM respectively	

echo date("a");
echo date("A");

“g”,”G”	Returns the hour without leading zeroes [1 to 12], [0 to 23] respectively	

echo date("g"); 
echo date("G");

“h”,”H”	Returns the hour with leading zeros [01 to 12],[00 to 23] respectively	

echo date("h"); 
echo date("H");

“i”,”s”	Returns the minutes/seconds with leading zeroes [00 to 59]	

echo date("i"); 
echo date("s");


Day parameters

“d”	Returns the day of the month with leading zeroes [01 to 31]	

echo date("d");

“j”	Returns the day of the month without leading zeroes [1 to 31]	

echo date("j");

“D”	Returns the first 3 letters of the day name [Sub to Sat]	

echo date("D");

“l”	Returns day name of the week [Sunday to Saturday]	

echo date("l");

“w”	Returns day of the week without leading zeroes [0 to 6] Sunday is represent by zero (0) through to Saturday represented by six (6)	

echo date("w");

“z”	Returns the day of the year without leading spaces [0 through to 365]	

echo date("z");



Month Parameter

“m”	Returns the month number with leading zeroes [01 to 12]	

echo date("m");

“n”	Returns the month number without leading zeroes [01 to 12]	

echo date("n");

“M”	Returns the first 3 letters of the month name [Jan to Dec]	

echo date("M");

“F”	Returns the month name [January to December]	

echo date("F");

“t”	Returns the number of days in a month [28 to 31]	

//echo date("t");


Year parameters

“L”	Returns 1 if it’s a leap year and 0 if it is not a leap year	

//echo date("L");

“Y”	Returns four digit year format	

//echo date("Y");

“y”	Returns two (2) digits year format (00 to 99)	

//echo date("y");

-->

<?php
//Time zones we can set by using date_default_timezone_set() 
date_default_timezone_set("Asia/Kolkata");

echo date("r");

//"timezone_identifiers_list()" this function will return an array with list of time zones available.

// $x = timezone_identifiers_list();
// while (list ($key, $val) = each ($x)) 
// {
//     echo "$key -> $val <br>";
// } 
?>
