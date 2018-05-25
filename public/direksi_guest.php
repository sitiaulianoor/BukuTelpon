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

              <li class="active">
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
                    <li><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=feature_guest"><i class="fa fa-circle-o"></i>Feature Pesawat Telepon </a></li>
                  </ul>
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
             Phone Book
            
          </h1>
          <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-user"></i>Komisaris dan Direksi</a></li>
            <li class="active">Data</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $nama=$_GET['nama'];
                        $sql="SELECT  * FROM komisaris_direksi where nama='$nama' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
            </div> 
            </div>

                   <?php                
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Alamat Rumah 1</th>
                        <th>Alamat Rumah 2</th>
                        <th>No. Telepon</th>
                        
                        
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM komisaris_direksi";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                      
                            <td><?php echo $row['nama'];?></td>
                            
                            <td><?php echo $row['jabatan'];?></td>

                            <td><?php echo $row['alamat1'];?></td>
                      
                            <td><?php echo $row['alamat2'];?></td>

                            <td><?php echo $row['telepon'];?></td>
                           
                        </tr> 
                            <?php    
                    $no++;                    
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
                    </tbody>
                   
                     
                  </table>
            </div><!-- /.box-body -->
             
          </div><!-- /.box --> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      <!-- Bootstrap Modal - To Add New Record -->


      <!-- Content Wrapper. Contains page content -->
      
     
<script type="text/javascript">
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
}
</script> 
<?php include 'theme/footer.php'; ?>