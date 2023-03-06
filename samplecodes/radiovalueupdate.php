<?php
include('config.php');
if(isset($_REQUEST["eid"]))
{
	  $eid=$_REQUEST["eid"];
	  $query=mysql_query("select * from user where id='$eid'");
	  $row=mysql_fetch_array($query);
	   
	  
}

if(isset($_REQUEST["submit"]))
{
	 $gender=$_REQUEST["gender"];
	 
	 mysql_query("update user set gender='$gender' where id='$eid'");
	 header('location:select.php');
}
?>


<form method="post">
<table border="1" align="center">
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="male"
<?php 
if($row["gender"]=='male')
{
	 echo "checked";
}
?>


>Male

<input type="radio"name="gender" value="female"
<?php 
if($row["gender"]=='female')
{
	 echo "checked";
}
?>

>Female</td>

</tr>
<tr>
<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</form>