<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .bckgrnd
{
    background-color: rgb(255, 230, 205);
}
.bckgrnd-tsk
{
    background-color: rgb(218, 240, 243);
}
.align-center
{
    text-align: center;
}
.bold-txt
{
    font-weight: bolder;
}
h1
{
    font-size: 25px;
    text-align: left;
    background-color: purple;
    color: gold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>
    <title>Exercise3</title>
</head>
<body>

<header>
<h1 class="align-center">Exercise 3</h1>
</header>
    
<main>
<div>
<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h1>";
$d = date("M")."\n";
if ($d == "August"){
    echo "It's August, so it's still holiday.";
}
else {
    echo "Not August, This is Month-name so i don't have any holidays";
}
?>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>2. Assign color red to a variable name $color and check to print one the following responses using if else statement </h1>";
$color = red;
if ($color == red){
    echo "The color is red.";
}
else {
    echo "The color is not red.";
}
?>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50 </h1>";
$grade = 90;

switch($grade) {
case $grade >= 80:
echo 'Excellent';
break;
case $grade >= 70 and $grade < 80:
    echo 'Great';
    break;
case $grade >= 60 and $grade < 70:
    echo 'Good';
    break;
case $grade >= 50 and $grade < 60:
    echo 'Pass';
    break;
case $grade < 50:
    echo 'Fail';
    break;
}
?>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.) </h1>";
// define variables and set to empty values
$nameErr = $ageErr = "";
$name = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
  }
}
if (empty($_POST["age"])) {
    $ageErr = "Age is required";
  } else {
    $age = test_input($_POST["age"]);
    // check if age above 18
    if ($age < 18) {
      $ageErr = "You are not eligible to Vote.";
    }
    else {
        echo "You are eligible to Vote. You can proceed to Vote.";
    }
  }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2>Voting Information</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Age: <input type="text" name="age" value="<?php echo $age;?>">
  <span class="error">* <?php echo $ageErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>5. Use a looping statement to construct the following pattern: </h1>";
for($a = 1; $a <= 8; $a++)
{
    echo "$a";
}

?>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>6. Use While loop to print the following pattern: </h1>";
$rows = 8; 
for($a = $rows; $a >= 1; $a--)
{
    for ($j=1; $j <= $a; $j++)
{
    echo "$j+";
}
}
?>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>7. Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of yours to the repo. You should include in your PHP code the link to the repo and your web page. </h1>";
echo "https://github.com/olufunmilo20100/web21/blob/main/Exercise3.php";
echo "<br>";
?>
</div>

<div class="bckgrnd-tsk">
<div>
<?php echo "<h1>8. Give  1 or 0 point for the clarity of the task (User interface). </h1>";
echo "";
?>
</div>

</html>