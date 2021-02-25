<?php


$con= mysqli_connect('localhost','root','12345','admin');
$res=mysqli_query($con,"select * from user");
$count=mysqli_num_rows($res);
    if($count>0){
      
    }

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="admin.css">
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Country</th>
  </tr>
<?php while($rows=mysqli_fetch_assoc($res)){?>
  <tr>
    <td><?php echo $rows['name'];?> </td>
    <td><?php echo $rows['lname'];?></td>
    <td><?php echo $rows['country'];?></td>
  </tr>
 
 <?php }?>

</table>

</body>
</html>

