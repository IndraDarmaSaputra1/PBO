<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL TABLE |</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="./config/css/layout.css">
  <link rel="stylesheet" href="./config/css/bootstrap.min.css">
  <script src="./config/js/bootstrap.bundle.js"></script>
  <!-- icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<table class="table table-bordered">
    <thead class="table-dark">
        <td>No</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Lama Mendaki</td>
        <td>Alamat</td>
        <td>Status</td>
        <td>Foto</td>
        <td>Aksi</td>
    </thead>
    <?php 
        $no = 1;
        $sql = mysqli_query($con,"SELECT * FROM final");
        foreach ($sql as $row){
            ?>
    <tbody>
    <tbody>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['jeniskelamin'];?></td>
                <td><?php echo $row['lamamendaki'];?></td>
                <td><?php echo $row['alamat'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><img src="img/<?php echo $row["foto"];?>" width="150px" height="200px"></td>
        <td>
        <a href="edit.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-primary"><i class="ri-pencil-line"></i></button></a>
        <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Anda Yakin Hapus Data Ini')"><button type="button" class="btn btn-primary"><i class="ri-delete-bin-line"></i></button></a>
        </td>
    </tr>
    </tbody>
    <?php } ?>
</table>
<center>
<a href="index.php"><button type="button" class="btn btn-warning">Back</button></a>
</center>
</body>
</html>