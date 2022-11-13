<?php

    require("koenksi.php");
    if(isset($_POST['update'])){
        $id = $_GET['ID'];
        $nama = $_POST['nama'];
        $jeniskelamin = $_POST['kelamin'];
        $kelas = $_POST['kelas'];
        $hobi = $_POST['hobi'];
        $value = implode(",", $hobi);
        $dokumen = $_FILES['dokumen'];
        $gambar = $_FILES['gambar'];

        $dokumenlama = $_POST['dokumenlama'];
        $gambarlama = $_POST['gambarlama'];
        
        if($_FILES['dokumen']['error'] === 4){
            $dokumen = $dokumenlama;
        }else {
            $dokumen = upload();
        }

        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarlama;
        }else {
            $gambar = upload1();
        }

        $query = "UPDATE project6 SET Nama= '" .$nama. "', jeniskelamin = '" .$jeniskelamin. "', kelas = '" .$kelas. "', hobi = '" .$value. "', dokumen = '" .$dokumen. "', gambar = '" .$gambar. "' WHERE id = '" .$id. "'";

        $result = mysqli_query($conn, $query);

        if($result){
            header("location: content.php");
        }else {
            echo "Check Your Query";
        }
    }else {
        header("location: content.php");
    }

    function upload(){

        $namafile = $_FILES['dokumen']['name'];
        $ukuranfile = $_FILES['dokumen']['size'];
        $error = $_FILES['dokumen']['error'];
        $tmpname = $_FILES['dokumen']['tmp_name'];
    
        if($error === 4){
            echo "<script>
                alert('Pilih Dokumen Terlebih Dahulu');
            </script>";
            return false;
        }
    
        $ekstensifilevalid = ['docx', 'pdf'];
        $ekstensifile = explode(".", $namafile);
        $ekstensifile = strtolower(end($ekstensifile));
    
        if(!in_array($ekstensifile, $ekstensifilevalid)){
            echo "<script>
                alert('Hanya file docx dan pdf yang bisa diinput');
            </script>";
            return false;
        }
    
        if($ukuranfile > 2000000){
            echo "<script>
                alert('Ukuran File Terlalu Besar');
            </script>";
            return false;
        }
    
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensifile;
    
        move_uploaded_file($tmpname, 'dokumen/' . $namafilebaru);
        return $namafilebaru;
    }

    function upload1(){

        $namafile1 = $_FILES['gambar']['name'];
        $ukuranfile1 = $_FILES['gambar']['size'];
        $error1 = $_FILES['gambar']['error'];
        $tmpname1 = $_FILES['gambar']['tmp_name'];
    
        if($error1 === 4){
            echo "<script>
                alert('pilih gambar dahulu');
            </script>";
            return false;
        }
    
        $ekstensifilevalid1 = ['jpg', 'jpeg', 'png'];
        $ekstensifile1 = explode(".", $namafile1);
        $ekstensifile1 = strtolower(end($ekstensifile1));
    
        if(!in_array($ekstensifile1, $ekstensifilevalid1)){
            echo "<script>
                alert('Hanya file jpg, jpeg dan png yang bisa diinput');
            </script>";
            return false;
        }
    
        if($ukuranfile1 > 2000000){
            echo "<script>
                alert('Ukuran File Terlalu Besar');
            </script>";
            return false;
        }
    
        $namafilebaru1 = uniqid();
        $namafilebaru1 .= '.';
        $namafilebaru1 .= $ekstensifile1;
    
        move_uploaded_file($tmpname1, 'image/' . $namafilebaru1);
        return $namafilebaru1;
    }



?>