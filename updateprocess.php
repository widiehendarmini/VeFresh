<?php
include_once 'connect.php';

if(count($_POST)>0) {
mysqli_query($host,"UPDATE informasi_buah set id_info_buah='" . $_POST['id_info_buah'] . "', nama_buah='" . $_POST['nama_buah'] . "', manfaat_buah='" . $_POST['manfaat_buah'] . "', cara_menanam_buah='" . $_POST['cara_menanam_buah'] .   "' WHERE id_buah='" . $_POST['id_buah'] . "'");
$message = "Record Modified Successfully";
header("location:Update.php");
}
$result = mysqli_query($host,"SELECT * FROM informasi_buah WHERE id_info_buah='" . $_GET['id_info_buah'] . "'");
$row= mysqli_fetch_array($result);
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
<body>
<form name="frmPnr" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="add.php">lihat layar utama</a>
</div>
id buah: <br>
<input type="hidden" name="id_info_buah" class="txtField" value="<?php echo $row['id_info_buah']; ?>">
<input type="text" name="id_info_buah"  value="<?php echo $row['id_info_buah']; ?>">
<br>
nama buah: <br>
<input type="text" name="nama_buah" class="txtField" value="<?php echo $row['nama_buah']; ?>">
<br>
manfaat buah: <br>
<input type="text" name="manfaat_buah" class="txtField" value="<?php echo $row['manfaat_buah']; ?>">
<br>
cara menanam buah: <br>
<input type="text" name="cara_menanam_buah" class="txtField" value="<?php echo $row['cara_menanam_buah']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>
