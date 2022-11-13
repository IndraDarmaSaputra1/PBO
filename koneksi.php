<?php 
    $con = mysqli_connect("localhost","root","","db_final");

    if(!$con) {
        echo "berhasil";
    }

    function edit ($data){
        global $con;
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $jk = $_POST['jeniskelamin'];
    
        $sql = "UPDATE cb2 SET 
                    nama = '$nama',
                    jeniskelamin = '$jk'
                    WHERE id = '$id'";
    
            $query = mysqli_query($con,$sql);
            return mysqli_affected_rows($con);
    
    }
?>