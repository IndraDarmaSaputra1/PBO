<?php

    require("connect.php");
    $id = $_GET['GetID'];
    $query = "SELECT * FROM project6 WHERE id = '" .$id. "'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $nama = $row['Nama'];
        $jeniskelamin = $row['jeniskelamin'];
        $kelas = $row['kelas'];
        $hobi = $row['hobi'];
        $dokumen = $row['dokumen'];
        $gambar = $row['gambar'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update.php?ID=<?php echo $id ?>" enctype = "multipart/form-data" method = POST>
        <table>
            <th colspan = "2">UPDATE</th>
            <input type="hidden" name = "gambarlama" value = "<?php $gambar ?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name = "nama" value = <?php echo $nama ?>></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <?php
                    if($jeniskelamin == "Laki - Laki"){
                        echo '
                            <td><input type="radio" name = "kelamin" value = "Laki - Laki" checked>Laki - Laki <br> <input type="radio" name = "kelamin" value = "Perempuan">Perempuan</td>
                        ';
                    }else {
                        echo '
                            <td><input type="radio" name = "kelamin" value = "Laki - Laki">Laki - Laki <br> <input type="radio" name = "kelamin" value = "Perempuan" checked>Perempuan</td>
                        ';
                    }
                ?>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><select name="kelas" id="">
                    <?php
                        if($kelas == "X"){
                            echo '
                                <option value="X" selected>X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            ';
                        }elseif($kelas == "XI"){
                            echo '
                                <option value="XI" selected>XI</option>
                                <option value="X">X</option>
                                <option value="XII">XII</option>
                            ';
                        }else {
                            echo '
                                <option value="XII" selected>XII</option>
                                <option value="XI">XI</option>
                                <option value="X">X</option>
                            ';
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="checkbox" name = "hobi[]" value = "Tidur" 
                    <?php
                        $arr = explode(",", $hobi);
                        if(in_array("Tidur", $arr)){
                            echo "checked";
                        }
                     ?>
                     >Tidur <br>
                     <input type="checkbox" name = "hobi[]" value = "Game"
                     <?php
                        $arr = explode(",", $hobi);
                        if(in_array("Game", $arr)){
                            echo "checked";
                        }
                     ?>
                     >Game <br>
                     <input type="checkbox" name = "hobi[]" value = "Makan"
                     <?php
                        $arr = explode(",", $hobi);
                        if(in_array("Makan", $arr)){
                            echo "checked";
                        }
                     ?>
                     >Makan <br>
                </td>
            </tr>
            <tr>
                <tr>
                    <td>Dokumen</td>
                    <td><?php echo $dokumen ?></td>
                </tr>
                <tr>
                    <td>Edit Dokumen</td>
                    <input type="hidden" name = "dokumenlama" value = "<?php $dokumen ?>">
                    <td><input type="file" name = "dokumen"></td>
                </tr>
                <td>Foto Profile</td>
                <td><img src="image/<?= $gambar ?>" width = "100px"></td>
            </tr>
            <tr>
                <td>Input File</td>
                <input type="hidden" name = "gambarlama" value = "<?php $gambar ?>">
                <td><input type="file" name = "gambar"></td>
            </tr>
            <tr>
                <th colspan = "2"><input type="submit" name = "update"></th>
            </tr>
        </table>
    </form>
</body>
</html>