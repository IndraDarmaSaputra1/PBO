<?php 
include "koneksi.php";

$id = $_GET['id'];

    $queryshow = "SELECT * FROM final WHERE id ='".$id."'";
    $sqlshow = mysqli_query($con,$queryshow);
    $result1 = mysqli_fetch_assoc($sqlshow);

    unlink("img/".$result1['foto']);


$sql = "DELETE FROM final WHERE id = $id";
$result = mysqli_query($con,$sql);
if($result){
    header("Location: tampiltable.php?Record deleted succes");
}else{
    echo "Failed: ". mysqli_error($con);
}
?>