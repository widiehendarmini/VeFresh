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
                        <li class="menu-item"><a href="add2.php" class="menu-link">login</a></li>
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
<a href="update2.php">lihat isian</a>
</div>
        <center><h3>login dulu yuu?!!</h3></center>
	    <form action="add2.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr> 
                    <td>password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                 <tr>
                    
                    <td>Submit</td>
                    <td><input type="submit" name="Submit" value="login"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $username= $_POST['username'];
        $password = $_POST['password'];
    include_once("connect.php");
    $sql="INSERT INTO pengguna(username,password) VALUES('$username','$password')";
    $result = mysqli_query($host,$sql,);


        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:home.html");

    }
    ?>
            </table>
        </form>
    </body>
    <style>   
Body {  
  font-family: Arial, Helvetica, sans-serif;  
  background-color: #E5C67C;  
}  
button {   
       background-color: #BB8D8D;   
       width: 100%;  
        color: #f1f1f1;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
  
input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid #996767;   
        box-sizing: border-box;   
    }  
input[type=text], input[type=username] {   
        width: 100%;   
        margin: 20px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid #996767;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
     
 .container {   
        padding: 25px;    
    }   
</style>
</html>
