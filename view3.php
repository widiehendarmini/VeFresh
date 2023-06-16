<html>
    <head>
    <h1>Menampilkan Tabel informasi_sayur</h1>
    </head>

    <body>
        <h3>tabel sayur</h3>
        <a href="view table informasi sayur.php">informasi_sayur</a><br/>
        <table border="1" class="table">
            <tr>
                <th>id_info_sayur</th>
                <th>nama_sayur</th>
                <th>manfaat_sayur</th>
                <th>cara_menanam_sayur</th>
            </tr>
        <?php
            include "connect.php";
            $query_mysql = mysqli_query($host,"SELECT * FROM informasi_sayur");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_info_sayur']; ?></td>
                <td><?php echo $data['nama_sayur']; ?></td>
                <td><?php echo $data['manfaat_sayur']; ?></td>
                <td><?php echo $data['cara_menanam_sayur']; ?></td>
            </tr>
            <?php } ?>

        <table>
    <body>
<html>
