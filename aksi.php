<?php
include 'koneksi.php';

//Start Aksi Anggota
$g=$_GET['sender'];
if($g=='anggota')
{
    $sql="INSERT INTO anggota (personnel_no, name, org_unit, org_name, cost_ctr, dept_name, telp)
        VALUES ('$_POST[personnel_no]','$_POST[name]','$_POST[org_unit]','$_POST[org_name]','$_POST[cost_ctr]','$_POST[dept_name]','$_POST[telp]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Anggota baru dengan nama :('.$_POST[name].') Tersimpan")
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
        mysqli_query($config,"UPDATE anggota SET id='$_POST[id]',
            name='$_POST[name]',
                org_unit='$_POST[org_unit]', org_name='$_POST[org_name]', cost_ctr='$_POST[cost_ctr]', dept_name='$_POST[dept_name]', telp='$_POST[telp]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan nama :('.$_POST[name].') Di Update")
            window.location.href="index.php?page=anggota";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM anggota where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="index.php?page=anggota";
            </script>';
    }
//End Aksi Anggota
?>
