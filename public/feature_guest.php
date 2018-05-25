<?php include 'theme/header.php'; ?>

     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
          <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=notel_penting_guest">
                <i class="fa fa-phone"></i> <span>No. Telp Penting</span>  
              </a>
          </li>

          <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=direksi_guest">
                <i class="fa fa-user"></i> <span>Dewan Komisaris dan Direksi</span>  
              </a>
          </li>

          <li> 
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=guest_phone">
                <i class="fa fa-book"></i> <span>Phone Book</span>  
              </a>
          </li> 

          <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Petunjuk </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
        
              <ul class="treeview-menu">
                <li><a href=<?php $_SERVER[SCRIPT_NAME];?>?page=telepon_guest><i class="fa fa-circle-o"></i>Penggunaan Telepon</a></li>
              </ul>
             
              <ul class="treeview-menu">
                <li class="active"><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=feature_guest"><i class="fa fa-circle-o"></i>Feature Pesawat Telepon </a></li>
              </ul>
          </li>

          <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=notel_penting_guest">
                <i class="fa fa-phone"></i> <span>No. Telp Penting</span>  
              </a>
          </li>

          <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=direksi_guest">
                <i class="fa fa-user"></i> <span>Dewan Komisaris dan Direksi</span>  
              </a>
          </li>
          
          <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=landing">
                <i class="fa fa-clock-o"></i> <span>Exit</span>  
              </a>
          </li>
            
           
           </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             CARA MENGGUNAKAN FEATURES PESAWAT TELEPON  
          </h1>
          <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-book"></i>Petunjuk</a></li>
            <li class="active">Feature Pesawat Telepon</li>
            
          </ol>
            </section>
              <div class="box">
        
                <div class="box-body">
                  
                  <p><strong>Berikut adalah tata cara untuk menggunakan feature pesawat telepon :</strong></p>
                  <table border="2" width="1000px">
                    <tr class="fontatas">
                        <td align="center" width="30px"></h4><strong>No.</strong></td>
                        <td align="center" width="40px"><strong>Keterangan</strong></td>
                        <td align="center" width="30px"><strong>Feature Code</strong></td>
                    </tr>
     
                    <tr>
                        <td align="center">1.</td>
                        <td ><strong>Out going melalui operator</strong></br>(Meminta sambungan keluar)</td>
                        <td align="center">9</td>
                    </tr>

                    <tr>
                        <td align="center">2.</td>
                        <td><strong>Automatic call back</strong></br>(Memanggil kembali setelah saluran bebas yaitu bili kita memanggil tetapi sedang dipakai akan terdengar suara tuntunan tekan '5' dan akan memanggil kembali setelah saluran bebas)</td>
                        <td align="center">5</td>
                    </tr>

                    <tr>
                        <td align="center">3.</td>
                        <td><strong>Follow Me</strong></br>(Membelokan panggilan ke extention tertentu yaitu bila kita hendak meng=inggalkan tempat, panggilan bisa dibelokan pada pesawat yang kita inginkan dengan menekan '70' kemuadian nomor yang dituju, untuk membatalkan/ menghapusnya, tekan '75')</td>
                        <td align="center">70</td>
                    </tr>

                    <tr>
                        <td align="center">4.</td>
                        <td><strong>Call Pick Up</strong></br>(Mengambil panggilan dari extention lain yang sedang berdering yaitu bila kita mendengar salah satu pesawat telepon berbunyi, bisa daiambil dari extention kita dengan cara menekan '76' kemudian tekan nomor pesawat yang berbunyi)</td>
                        <td align="center">76</td>
                    </tr>

                    <tr>
                        <td align="center" rowspan="3">5.</td>
                        <td><strong>Transfer untuk pesawat 'siemens'</strong></br>(Pemindahan sambungan dari pesawat telepon kita kepesawat telepon lain yaitu dengan cara mengetuk switch gagang telepon 1 kali maka akan terdengan suara penuntun, lalu tekan nomor yang dituju. Apabila nomor yang dituju sedang dipakai, maka ketuk sekali lagi switch gagang telepon)</td>
                        <td align="center">Ketuk Switch</td></tr>
                        <tr>
                  
                        <td><strong>Trasfer untuk pesawat 'Alcatel'</strong></br>(Pemindahan sambungan dari pesawat telepon kita ke pesawat telepon lain, yaitu dengan cara menekan recall, akan terdengar suara penuntun lalu tekan nomor yang akan dituju. Apabila nomor yang dituju sedang dipakai tekan 'recall' kembali)</td>
                        <td align="center">Recall</td></tr>
                   
                        <td><strong>Trasfer untuk pesawat telepon yang mempunyai fasilitas 'Tone dan Pulsa' </strong></br>(Pemindahan sambungan dari pesawat telepon kita ke pesawat telepon lain, yaitu dengan cara memindahkan 'Switch' ke posisi 'Pulsa', bila melakukan transfer tekan angka '2', lalu tekan nomor yang dituju. Apabila nomor yang dituju sedang dipakai tekan angka kembali '2')</td>
                        <td align="center">2</td>
                    </tr>

                    <tr >
                        <td align="center" rowspan="3">6.</td>
                        <td><strong>Three Party Conference untuk pesawat 'Siemens'</strong></br>(Apabila mendapatkan panggilan dan akan berbicara 3 orang sekaligus, ketuk switch gagang telepon ada suara penuntun, lalu putar/ tekan nomor yang akan dituju, setelah mendapatkan jawaban dari nomor yang dituju, ketuk kembali switch gagang telepon dan akan terjadi pembicaraan 3 orang sekaligus)</td>
                        <td align="center"></td>
                    </tr>

                    <tr>
                        
                        <td><strong>Three Party Conference untuk pesawat yang mempunyai fasilitas 'Tone dan Pulsa'</strong></br>(Apabila terdapat panggilan dan akan berbicara 3 orang sekaligus, tekan angka '2', ada suara penuntun, lalu putar nomor yang dituju, setelah mendapat jawaban dari nomor yang dituju, tekan kembali angka '2' dan akan terjadi pembicaraan 3 orang sekaligus)</td>
                        <td></td>
                    </tr>

                    <tr>
              
                        <td><strong>Three Party Conference untuk pesawat 'Alcatel'</strong></br>(Apabila terdapat panggilan dan akan berbicara 3 orang sekaligus, tekan tombol 'recall', ada suara penuntun, lalu putar nomor yang dituju, setelah mendapat jawaban dari nomor yang dituju, tekan kembali tombol 'recall' dan akan terjadi pembicaraan 3 orang sekaligus)</td>
                        <td align="center"></td>
                    </tr>

                    <tr>
                        <td align="center">7.</td>
                        <td><strong>Multi Party Conference</strong></br>(Pembicaraan telepon sebanyak 4 extention, bila akan melakukan conference, kita harus membuat perjanjian terlebih dahulu, jam berapa akan dilakukan conference dan dengan pass code berapa (pass code yang dipakai 0 s/d 9) 1 digit. </br> Sebagai contoh, Pembicaraan akan dilakkan pukul 09.00 dengan pass code 3, tekan angka '78' disertai pass code 3, akan terdengar lagu pengiring kalau extention belum menekan pass code '78' dan pass code-nya. Bila 4 extention yang dimaksud telah melakukannya, maka akan terjadi pembicaraan 4 orang sekaligus.</br> Catatan : dalam waktu bersamaan, bisa dilakukan pembicaraan sebanyak 3 grup (1 grup = 4 ext.))</td>
                        <td align="center">78</td>
                    </tr>

                    <tr>
                        <td align="center">8.</td>
                        <td><strong>Wake Up Reminder</strong></br>(Untuk program waktu yang diinginkan)</br>(Untuk membatalkannya tekan '5') </td>
                        <td align="center">*7 atau 77</td>
                    </tr>

                    <tr>
                        <td align="center">9.</td>
                        <td><strong>Pass Code (Empat Digit)</strong></br>(Untuk mengunci pass code atau melepas code) </td>
                        <td align="center">*1</td>
                    </tr>

                    <tr>
                        <td align="center">10.</td>
                        <td><strong>Merubah Pass Code</strong></br>(Ada suara penuntun, putar/ tekan pass code lama, lalu pass code baru) </td>
                        <td align="center">#7</td>
                    </tr>
                </table>
        </div>  
  </div>
</div>
<?php include 'theme/footer.php'; ?>