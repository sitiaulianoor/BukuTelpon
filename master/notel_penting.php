<?php include 'theme/header.php'; ?>

     
      <!-- Left side column. contains the logo and sidebar -->

      <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
              
            </li>
            <li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=notel_penting">
                <i class="fa fa-phone"></i> <span>No. Telp Penting</span>  
              </a>
            </li>

            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=direksi">
                <i class="fa fa-user"></i> <span>Dewan Komisaris dan Direksi</span>  
              </a>
            </li>


            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=anggota">
                <i class="fa fa-book"></i> <span>Phone Book</span>  
              </a>
            </li> 

            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Petunjuk </span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>

            <ul class="treeview-menu">
             
                <li><a href=<?php $_SERVER[SCRIPT_NAME];?>?page=telepon><i class="fa fa-circle-o"></i>Penggunaan Telepon</a></li>
              </ul>
              <ul class="treeview-menu">
             
                <li><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=feature"><i class="fa fa-circle-o"></i>Feature Pesawat Telepon </a></li>
              </ul>

            

            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=landing">
                <i class="fa fa-clock-o"></i> <span>Logout</span>  
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
            <li><a href=""><i class="fa fa-phone"></i>Nomor Penting</a></li>
            <li class="active">Data</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $nama=$_GET['nama'];
                        $sql="SELECT  * FROM notelp_penting where nama='$nama' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Data Nomor Telpon Penting
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksi.php?penting=edit_notelp" method="POST">
                  <div class="box-body">
                        <div class="row">
                    <div class="col-md-12 form-group">
                         <label>Nama Instansi</label>
                         <input type="text" class="form-control" placeholder="Enter..." name="nama" value="<?php echo $row['nama'];?>"required="" ></input>
                    </div>

                    <div class="col-md-12 form-group">
                         <label>Nama Kategori</label>
                         <input type="text" class="form-control" placeholder="Enter..." name="kategori" value="<?php echo $row['kategori'];?>"required="" ></input>
                    </div>

                    <div class="col-md-12 form-group">
                         <label>No. Telpon Kantor</label>
                         <input type="text" class="form-control" placeholder="Enter..." name="no_kantor" value="<?php echo $row['no_kantor'];?>"</input>
                    </div>

                    <div class="col-md-12 form-group">
                         <label>No. Telpon Rumah</label>
                         <input type="text" class="form-control" placeholder="Enter..." name="no_rumah" value="<?php echo $row['no_rumah'];?>"</input>
                    </div>

                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right" name="simpan"><span class="fa fa-send"></span> Simpan</button>
                 </div>
                </div> 
                </div>
                </form>
                </div>

                   <?php                
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> <a href="#" data-toggle="modal" data-target="#my-modal1" class="btn btn-info"><li class="fa fa-plus"></li> Add</a></h3>
              <div class="box-tools pull-right">
                 </div>
            </div>
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Nomor Kantor</th>
                        <th>Nomor Rumah</th>
                        <th>Action</th>
                        
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM notelp_penting";
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

                            <td><?php echo $row['kategori'];?></td>
                        
                            <td><?php echo $row['no_kantor'];?></td>
                      
                            <td><?php echo $row['no_rumah'];?></td>
                           
                            
                            <td>
                                <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=notel_penting&nama=<?php echo $row['nama'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a></br> 
                                <a href="aksi.php?penting=hapus_notelp&nama=<?php echo $row['nama']; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Delete</a> 
                             </td>
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
<!-- Modal -->
<form action="aksi.php?penting=notel_penting" method="POST" >
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah Nomor Telpon</h4>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required="" placeholder="Enter ...">
    </div>
 
    <div class="form-group">
      <label>Kategori</label>
      <input type="text" name="kategori" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>No. Kantor</label>
      <input type="text" name="no_kantor" class="form-control" placeholder="Enter ..."></input> 
    </div>

     <div class="form-group">
      <label>No. Rumah</label>
      <input type="text" name="no_rumah" class="form-control" placeholder="Enter ..."></input> 
    </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-info"> Simpan</button> 
  
</div>
   
</div>
</div>
</div>
</form>

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