<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styl.css">

</head>
<body>
    <div class="container">
        <h1 class="mt-5">Daftar Buku</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Genre</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>ISBN</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM buku";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["judul"]. "</td>
                            <td>" . $row["pengarang"]. "</td>
                            <td>" . $row["genre"]. "</td>
                            <td>" . $row["tahun_terbit"]. "</td>
                            <td>" . $row["penerbit"]. "</td>
                            <td>" . $row["isbn"]. "</td>
                            <td>" . $row["harga"]. "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
