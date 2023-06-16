<?php
include_once 'connect.php';
$result = mysqli_query($host,"SELECT * FROM informasi_sayur");
?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Update/Edit</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container nav-wrapper">
                <a href="index.html" class="logo">Ve<span>Fresh</span></a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li class="menu-item"><a href="home.html" class="menu-link active">Home</a></li>
                        <li class="menu-item"><a href="search.html" class="menu-link">Search</a></li>
                        <li class="menu-item"><a href="login.html" class="menu-link">login</a></li>
                    </ul>
                    <a href="about.html" class="btn-member">about</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>
<body>
<script src="assest/js/main.js"></script>
<div style="padding-bottom:5px;">
<a href="add3.php">lihat layar utama</a>
</div>

<?php

if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>no</td>
		<td>nama_sayur</td>
		<td>manfaat_sayur</td>
        <td>cara_menanam_sayur</td>
	  </tr>
			<?php
			$i=0;   
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["id_info_sayur"]; ?></td>
		<td><?php echo $row["nama_sayur"]; ?></td>
		<td><?php echo $row["manfaat_sayur"]; ?></td>
        <td><?php echo $row["cara_menanam_sayur"]; ?></td>
		<td><a href="updateprocess3.php?id_info_sayur=<?php echo $row["id_info_sayur"]; ?>">Update</a></td>
        <td><a href="deleteprocess3.php?id_info_sayur=<?php echo $row["id_info_sayur"]; ?>">delete</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>
