<?php
include_once 'connect.php';

if(count($_POST)>0) {
mysqli_query($host,"UPDATE informasi_sayur set id_info_sayur='" . $_POST['id_info_sayur'] . "', nama_sayur='" . $_POST['nama_sayur'] . "', manfaat_sayur='" . $_POST['manfaat_sayur'] . "', cara_menanam_sayur='" . $_POST['cara_menanam_sayur'] .   "' WHERE id_sayur='" . $_POST['id_sayur'] . "'");
$message = "Record Modified Successfully";
header("location:Update3.php");
}
$result = mysqli_query($host,"SELECT * FROM informasi_sayur WHERE id_info_sayur='" . $_GET['id_info_sayur'] . "'");
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
                        <li class="menu-item"><a href="login.php" class="menu-link">login</a></li>
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
<a href="add3.php">lihat layar utama</a>
</div>
id sayur: <br>
<input type="hidden" name="id_info_sayur" class="txtField" value="<?php echo $row['id_info_sayur']; ?>">
<input type="text" name="id_info_sayur"  value="<?php echo $row['id_info_sayur']; ?>">
<br>
nama sayur: <br>
<input type="text" name="nama_sayur" class="txtField" value="<?php echo $row['nama_sayur']; ?>">
<br>
manfaat sayur: <br>
<input type="text" name="manfaat_sayur" class="txtField" value="<?php echo $row['manfaat_sayur']; ?>">
<br>
cara menanam sayur: <br>
<input type="text" name="cara_menanam_sayur" class="txtField" value="<?php echo $row['cara_menanam_sayur']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>
