<?php

$con= mysqli_connect('localhost','',','');
if(isset($_POST['submit'])){

    $name=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $country=$_POST['country'];
 
    mysqli_query($con,"insert into user(name,lname,country) values('$name','$lname','$country')" );

}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form  method="post" >
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>
