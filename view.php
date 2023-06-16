<html>
    <head>
    <h1>Menampilkan Tabel informasi_buah</h1>
    </head>

    <body>
        <h3>tabel buah</h3>
        <a href="view table informasi buah.php">informasi_buah</a><br/>
        <table border="1" class="table">
            <tr>
                <th>id_info_buah</th>
                <th>nama_buah</th>
                <th>manfaat_buah</th>
                <th>cara_menanam_buah</th>
            </tr>
        <?php
            include "connect.php";
            $query_mysql = mysqli_query($host,"SELECT * FROM informasi_buah");
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_info_buah']; ?></td>
                <td><?php echo $data['nama_buah']; ?></td>
                <td><?php echo $data['manfaat_buah']; ?></td>
                <td><?php echo $data['cara_menanam_buah']; ?></td>
            </tr>
            <?php } ?>

        <table>
    <body>
<html>
