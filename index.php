<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
include 'koneksi.php';
$get=$_GET['page'];

if (empty($get))
{
   include ('master/landing.php');
}
elseif ($get=='anggota')
{
  include ('master/anggota.php');
}
elseif ($get=='landing')
{
	include('master/landing.php');
}
elseif ($get=='formlogin')
{
	include('formlogin.php');
}
elseif ($get=='guest')
{
	include('public/dashboard_guest.php');
}
elseif ($get=='guest_phone')
{
  include ('public/book_guest.php');
}

elseif ($get=='proses_login')
{
  include ('master/notel_penting.php');
}
elseif ($get=='petunjuk')
{
  include ('master/petunjuk.php');
}
elseif ($get=='telepon')
{
  include ('master/telepon.php');
}
elseif ($get=='feature')
{
  include ('master/feature.php');
}
elseif ($get=='notel_penting')
{
  include ('master/notel_penting.php');
}
elseif ($get=='direksi')
{
  include ('master/direksi.php');
}
elseif ($get=='direksi_guest')
{
  include ('public/direksi_guest.php');
}
elseif ($get=='telepon_guest')
{
  include ('public/telepon_guest.php');
}
elseif ($get=='feature_guest')
{
  include ('public/feature_guest.php');
}
elseif ($get=='notel_penting_guest')
{
  include ('public/notel_penting_guest.php');
}

?>
