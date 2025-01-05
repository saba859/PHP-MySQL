<html>
<body>
<?php
//This is a single line comment
//echo "Hello World";

echo "Hello World";
echo "This is a comment example";

//Scalar Types
$name = "Saba";    //String
$age = 18;         //Integer
$time = 14.46;     //Float
$class = true;     //Boolean

//Compound Types
$student_arr = array("Saniya", "Rishika", "Saba"); //Arrays


class Student{           //Class
    public $marks;
}
$stud = new Student();    //Object
$stud->marks = 90;

//Special Types
$null_var = null;

echo "<br> String : " , $name;
echo "<br> Integer : " , $age;
echo "<br> Float : " , $time;
echo "<br> Boolean : " , $class;
echo "<br> Array : " , $student_arr[0];

//echo "Object : ", $stud;
echo "Null : " , $null_var;

/* This is a multiline comments
Developed for php session */

?>
</body>
</html>