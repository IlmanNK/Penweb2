<?php
require_once 'dbkoneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

mysqli_query($dbkoneksi,'DELETE * FROM pelanggan WHERE id=$_GET[id]');
}
?>