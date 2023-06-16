<?php
include_once 'connect.php';
$result = mysqli_query($host,"SELECT * FROM informasi_buah");
?>

<!DOCTYPE html>
<html>
<head>
<title>Hapus Data informasi buah</title>
</head>
<body>
<table>
	<tr>
	<td>id_info_buah</td>
	<td>nama_buah</td>
	<td>manfaat_buah</td>
    <td>cara_menanam_buah</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_info_buah"]; ?></td>
	<td><?php echo $row["nama_buah"]; ?></td>
	<td><?php echo $row["manfaat_buah"]; ?></td>
    <td><?php echo $row["cara_menanam_buah"]; ?></td>
	<td><a href="DeleteProcess.php?id_info_buah=<?php echo $row["id_info_buah"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
