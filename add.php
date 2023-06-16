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
        <h3>info buah</h3>
	    <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>nama buah</td>
                    <td><input type="text" name="nama_buah"></td>
                </tr>
                <tr> 
                    <td>manfaat buah</td>
                    <td><input type="text" name="manfaat_buah"></td>
                </tr>
                <tr> 
                    <td>cara menanam buah</td>
                    <td><input type="text" name="cara_menanam_buah"></td>
                </tr>
                <tr>
                    
                    <td>Submit</td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_buah= $_POST['nama_buah'];
        $manfaat_buah = $_POST['manfaat_buah'];
        $cara_menanam_buah = $_POST['cara_menanam_buah'];
    include_once("connect.php");
    $sql="INSERT INTO informasi_buah(nama_buah,manfaat_buah,cara_menanam_buah) VALUES('$nama_buah','$manfaat_buah','$cara_menanam_buah')";
    $result = mysqli_query($host,$sql,);


        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:Update.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>
