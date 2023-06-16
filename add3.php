<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>fruit and vegetable</title>
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
        </nav></header>
        <script src="assest/js/main.js"></script>
        <body>
    <div style="padding-bottom:5px;">
<a href="update.php">lihat isian</a>
</div>
        <h3>info sayur</h3>
	    <form action="add3.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>nama sayur</td>
                    <td><input type="text" name="nama_sayur"></td>
                </tr>
                <tr> 
                    <td>manfaat sayur</td>
                    <td><input type="text" name="manfaat_sayur"></td>
                </tr>
                <tr> 
                    <td>cara menanam sayur</td>
                    <td><input type="text" name="cara_menanam_sayur"></td>
                </tr>
                <tr>
                    
                    <td>Submit</td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_sayur= $_POST['nama_sayur'];
        $manfaat_sayur = $_POST['manfaat_sayur'];
        $cara_menanam_sayur = $_POST['cara_menanam_sayur'];
    include_once("connect.php");
    $sql="INSERT INTO informasi_sayur(nama_sayur,manfaat_sayur,cara_menanam_sayur) VALUES('$nama_sayur','$manfaat_sayur','$cara_menanam_sayur')";
    $result = mysqli_query($host,$sql,);


        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:Update3.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>
