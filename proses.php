<?php 
include 'koneksi.php';
 if (isset($_POST['submit'])){
    $nama       = $_POST ['nama'];
    $jk         = $_POST ['jk'];
    $lamamendaki = $_POST['lamamendaki'];
    $alamat     = $_POST ['alamat'];
    $status     = $_POST ['status'];

    $foto = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];

    if($foto !=""){
        $rand = rand();
        $extensi = array('png','jpg','jpeg','gif');
        $x = explode('.', $foto);
        $ext = strtolower(end($x));
        $file_tamp = $_FILES['foto']['tmp_name'];
        $namabaru = $rand.'_'.$foto;

        if(in_array($ext,$extensi)=== true) {
            move_uploaded_file($_FILES['foto']['tmp_name'],'img/'.$namabaru);

            $query = "INSERT INTO final (nama,jeniskelamin,lamamendaki,alamat,foto,status) VALUES ('$nama','$jk',
            '$lamamendaki','$alamat','$namabaru','$status')"; 

            $result = mysqli_query($con,$query);
        }
    }
}
?>