<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view users</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color:#FF0}

th {
    background-color:#F00;
    color: white;
}
</style>
<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css"> <!--css file link in bootstrap folder-->
</head>

<body>
<table border="1">
<tr>
<th>firstname</th>
<th>last name</th>
<th>email</th>
<th>mobile</th>
<th>password</th>
<th>delete user</th>
</tr>

<?php

$conn=mysqli_connect('localhost','root','','food');
$tab="select * from register";
$result=mysqli_query($conn,$tab);


while($row=mysqli_fetch_assoc($result))
{
	?>
	<tr>
<!--here showing results in the table -->
            <td><?php echo $row['fname'];  ?></td>
            <td><?php echo $row['lname'];  ?></td>
            <td><?php echo $row['email'];  ?></td>
            <td><?php echo $row['number'];  ?></td>
            <td><?php echo $row['password'];  ?></td>
            <td><a href="delete.php?del=<?php echo $row['email'] ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>


 <?php } ?>

    </table>


</body>
</html>