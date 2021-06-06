<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill the form </h1>
    <form action="" method="post">
        Full Name:<input type="text" name="Name" placeholder="Enter your full name"><br>
        Password:<input type="password" name="Password" placeholder="Enter your password"><br>
        Email:<input type="email" name="email" placeholder="Enter your Email"><br>
        Select the Semester:<select name="sem">
        <option>Semester</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        </select><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["Name"])&&isset($_POST["Password"])&&isset($_POST["email"])&&isset($_POST["sem"]))
{
    echo "Hii ",$_POST["Name"]."<br>";
    echo "Your Password is ".$_POST["Password"]."<br>";
    echo "Your Emailid is ".$_POST["email"]."<br>";
    echo "Your Semester is ".$_POST["sem"]."<br>";

}?>