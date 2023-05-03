<?php
include("header.php");
$query="select id,c_name,c_description,status from course";
$result=mysqli_query($con,$query);
?>

<table>
     <tr>
	    <th>Course</th>
		<th>Description</th>
		<th>Status</th>
	</tr>
	<?php while($fetch=mysqli_fetch_object($result)) { ?>
	<tr>
	<td><?php echo $fetch -> c_name?></td>
	<td><?php echo $fetch -> c_description?></td>
	<td><?php echo $fetch -> status?></td>
	</tr>
	<?php }?>
	
<table