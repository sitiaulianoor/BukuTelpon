<?php
include ('koneksi.php');

if ($_POST['login']) {
  // code...
$username = $_POST['user'];
$pass     = $_POST['pass'];

$login = mysqli_query($config, "SELECT * FROM user WHERE username='$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
session_start();
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $pass;
//  $_SESSION['id'] = $row[0]['id'];
if ($row['username'] == $username AND $row['password'] == $pass){

  header("location:index.php?page=proses_login");
}

else
{
   session_destroy();
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='formlogin.php'></a></center>";
  echo '
    <script language="javascript">
    alert("Failed to login!");
    </script>
    ';
}
}

?>
