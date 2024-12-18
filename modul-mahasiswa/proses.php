<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tmp_lahir'];
$tanggal = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
$dosen = $_POST['dosen'];

$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO mahasiswas (nim,nama,tmp_lahir,tgl_lahir,alamat,email,jk,jurusans_id,dosens_id,foto) 
VALUES ('$nim','$nama','$tempat','$tanggal','$alamat','$email','$jk','$jurusan','$dosen','$name_foto')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#4.1. proses apload file 
$upload_foto = move_uploaded_file($tmp_foto, "foto/$name_foto");

#5. mengalihkan halaman
// header("location:index.php");

?>
<script>
    document.location="index.php";
</script> 