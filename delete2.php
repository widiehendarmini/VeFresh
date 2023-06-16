<?php
include_once 'connect.php';
$result = mysqli_query($host,"SELECT * FROM pengguna");
?>

<!DOCTYPE html>
<html>
<head>
<title>Hapus Data pengguna</title>
</head>
<body>
<table>
	<tr>
	<td>id_pengguna</td>
	<td>username</td>
	<td>password</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_pengguna"]; ?></td>
	<td><?php echo $row["username"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	<td><a href="DeleteProcess2.php?id_pengguna=<?php echo $row["id_pengguna"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?> 
</table>
</body>
</html>
