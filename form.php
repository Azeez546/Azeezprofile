<!DOCTYPE html>
<html>
<body>

<?php
$nameErr=$emailErr=$passwordErr=$username="";
$name=$email=$password=$uername="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["Name"]))
    {
        $nameErr ="name is required";
    echo $nameErr;}
 else{
    $name=test_input($_POST["name"]);
    }
    
    }

if (isset($_POST['submit'])){
$age=$_POST["age"];
if(! empty($age)){
    echo "Your age is ".''.$age."<br/>";
}


$number=$_POST["Number"];
if(! empty($number)){
    echo "Your number is ".''.$number."<br/>";
}




$name=$_POST["Name"];
if(! empty($name)){
    echo "Your name is ".''.$name."<br/>";
}


$last=$_POST["lastname"];
if(! empty($last)){
echo "Your lastname is".''.$last."<br/>";
}
if (empty($age) and (empty ($number)) and (empty($name)) and (empty($last))){
    echo "All values are required";
}
}
?>

<form method= "post">


  <input type="text" placeholder="your age" name="age">
  <br/><br />
<input type="text" placeholder="Phone Number" name="Number">
<br /><br />
<input type="text" placeholder="name" name="Name">
<br /><br />
<input type="text" placeholder="lastname" name="lastname">
<br /><br />
 <input type="submit" value="Submit" name="submit">
  
</form>










</body>
</html>