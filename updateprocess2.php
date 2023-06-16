<?php
include_once 'connect.php';
if(count($_POST)>0) {
mysqli_query($host,"UPDATE pengguna set id_pengguna='" . $_POST['id_pengguna'] . "', username='" . $_POST['username'] . "', password='" . $_POST['password'] .  "' WHERE id_pengguna='" . $_POST['id_pengguna'] . "'");
$message = "Record Modified Successfully";
header("location:update2.php");
}
$result = mysqli_query($host,"SELECT * FROM pengguna WHERE id_pengguna='" . $_GET['id_pengguna'] . "'");
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
    <title>update pengguna data</title>
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
                        <li class="menu-item"><a href="add2.php" class="menu-link">login</a></li>
                    </ul>
                    <a href="about.html" class="btn-member">about</a>
                </div>
                <div class="menu-toggle bx bxs-grid-alt">
                </div>
            </div>
        </nav>
<body>
<form name="frmPnr" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="add2.php">List pengguna</a>
</div>
id pengguna: <br>
<input type="hidden" name="id_pengguna" class="txtField" value="<?php echo $row['id_pengguna']; ?>">
<input type="text" name="id_pengguna"  value="<?php echo $row['id_pengguna']; ?>">
<br>
username: <br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
password: <br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>
