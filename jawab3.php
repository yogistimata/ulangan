if (isset($_POST['tambahproduk'])) {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $insert_produk = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, deskripsi, harga, stok) VALUES('$nama_produk', '$deskripsi', '$harga', '$stok')");

    if($insert_produk){
        header ('location:stok.php');
   
}else 
echo' 
<script> alert ("hayoo salah")
window.location.herf= "stok.php"
</script>';
}
