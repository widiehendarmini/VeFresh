<?php
include_once 'connect.php';
$result = mysqli_query($host,"SELECT * FROM informasi_sayur");
?>

<!DOCTYPE html>
<html>
<head>
<title>Hapus Data informasi sayur</title>
</head>
<body>
<table>
	<tr>
	<td>id_info_sayur</td>
	<td>nama_sayur</td>
	<td>manfaat_sayur</td>
    <td>cara_menanam_sayur</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_info_sayur"]; ?></td>
	<td><?php echo $row["nama_sayur"]; ?></td>
	<td><?php echo $row["manfaat_sayur"]; ?></td>
    <td><?php echo $row["cara_menanam_sayur"]; ?></td>
	<td><a href="DeleteProcess3.php?id_info_sayur=<?php echo $row["id_info_sayur"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
