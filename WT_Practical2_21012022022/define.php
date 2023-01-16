<!-- 
The define() function defines a constant.

Constants are much like variables, except for the following differences:

-> A constant's value cannot be changed after it is set
-> Constant names do not need a leading dollar sign ($)
-> Constants can be accessed regardless of scope
-> Constant values can only be strings and numbers

name	Required. Specifies the name of the constant
value	Required. Specifies the value of the constant.
case_insensitive	Optional. Specifies whether the constant name should be case-insensitive. Possible values:
TRUE - Case-insensitive (deprecated in PHP 7.3)
FALSE - Case-sensitive (this is default)

Syntax
define(name,value,case_insensitive)
-->
<?php
define("GREETING","Hello you! How are you today?");
echo constant("GREETING");
?>