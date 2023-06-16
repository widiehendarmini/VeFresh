
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
<a href="update2.php">lihat isian</a>
<script src="assest/js/main.js"></script>
    <?php
    
include_once 'connect.php';

$sql = "DELETE FROM pengguna WHERE id_pengguna='" . $_GET["id_pengguna"] . "'";
if (mysqli_query($host, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($host);
}
mysqli_close($host);
?>
