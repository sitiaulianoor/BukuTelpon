<?php
include 'koneksi.php';

//Start Aksi Anggota
$g=$_GET['sender'];
if($g=='anggota')
{
    $sql="INSERT INTO bukutelpon (personnel_no, name, org_unit, org_name, cost_ctr, dept_name, telp)
        VALUES ('$_POST[personnel_no]','$_POST[name]','$_POST[org_unit]','$_POST[org_name]','$_POST[cost_ctr]','$_POST[dept_name]','$_POST[telp]','$_POST[telp_rumah]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Data baru dengan nama :('.$_POST[name].') Tersimpan")
            window.location.href="index.php?page=anggota";
            </script>'; 
    }
    else{
        echo "Error : ".$sql.". ".mysqli_error($config);
    }
     //header('location:http://localhost/');
}

else 
    if($g=='edit')
    {
        mysqli_query($config,"UPDATE bukutelpon SET id='$_POST[id]', dept_name='$_POST[dept_name]', telp='$_POST[telp]', telp_rumah='$_POST[telp_rumah]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Data berhasil diupdate")
            window.location.href="index.php?page=anggota";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM bukutelpon where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Data berhasil dihapus")
            window.location.href="index.php?page=anggota";
            </script>';
    }
//End Aksi Anggota

//Start Aksi No Telpon Penting

$g=$_GET['penting'];
if($g=='notel_penting')
{
    $sql="INSERT INTO notelp_penting (nama, kategori, no_kantor, no_rumah)
        VALUES ('$_POST[nama]','$_POST[kategori]','$_POST[no_kantor]','$_POST[no_rumah]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Data baru dengan nama  :('.$_POST[nama].') Tersimpan")
            window.location.href="index.php?page=notel_penting";
            </script>'; 
    }
    else{
        echo "Error : ".$sql.". ".mysqli_error($config);
    }
     //header('location:http://localhost/');
}

else 
    if($g=='edit_notelp')
    {
        mysqli_query($config,"UPDATE notelp_penting SET nama='$_POST[nama]', kategori='$_POST[nama]',no_kantor='$_POST[no_kantor]', no_rumah='$_POST[no_rumah]' WHERE nama='$_POST[nama]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Data berhasil diupdate")
            window.location.href="index.php?page=notel_penting";
            </script>';
    } 
else 
    if($g=='hapus_notelp')
    {
        mysqli_query($config,"DELETE FROM notelp_penting where nama='$_GET[nama]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Data berhasil dihapus")
            window.location.href="index.php?page=notel_penting";
            </script>';
    }
//End Aksi No Telpon Penting


//Start Aksi No Telpon Komisaris & Direksi

$g=$_GET['komisaris_direksi'];
if($g=='direksi')
{
    $sql="INSERT INTO komisaris_direksi (nama, jabatan, alamat1, alamat2, telepon)
        VALUES ('$_POST[nama]','$_POST[jabatan]','$_POST[alamat1]','$_POST[alamat2]','$_POST[telepon]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Data baru dengan nama  :('.$_POST[nama].') Tersimpan")
            window.location.href="index.php?page=direksi";
            </script>'; 
    }
    else{
        echo "Error : ".$sql.". ".mysqli_error($config);
    }
     //header('location:http://localhost/');
}

else 
    if($g=='edit_direksi')
    {
        mysqli_query($config,"UPDATE komisaris_direksi SET nama='$_POST[nama]', jabatan='$_POST[jabatan]', alamat1='$_POST[alamat1]',alamat2='$_POST[alamat2]', telepon='$_POST[telepon]' WHERE nama='$_POST[nama]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Data berhasil diupdate")
            window.location.href="index.php?page=direksi";
            </script>';
    } 
else 
    if($g=='hapus_direksi')
    {
        mysqli_query($config,"DELETE FROM komisaris_direksi where nama='$_GET[nama]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Data berhasil dihapus")
            window.location.href="index.php?page=direksi";
            </script>';
    }
//End Aksi No Telpon Komisaris & Direksi
?>
