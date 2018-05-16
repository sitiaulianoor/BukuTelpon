<?php include 'theme/header.php'; ?>

     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="index.php">
                 <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li> 
            <li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=anggota">
                <i class="fa fa-user"></i> <span>Phone Book</span>  
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
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Phone Book</a></li>
            <li class="active">List Anggot</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM anggota where id='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Data Telpon
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksi.php?sender=edit" method="POST">
                  <div class="box-body">
                        <div class="row">
                <div class="col-md-12 form-group">
                    <label>Personnel No.</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="personnel_no" value="<?php echo $row['personnel_no'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  

                    <div class="col-md-12 form-group">
                         <label>Name</label>
                         <textarea class="form-control" placeholder="Enter..." name="name" type="text"><?php echo $row['name'];?></textarea>
                    </div>

                    <div class="col-md-12 form-group">
                         <label>Org. Unit</label>
                         <textarea class="form-control" placeholder="Enter..." name="org_unit" type="text"><?php echo $row['org_unit'];?></textarea>
                    </div>

                    <div class="col-md-12 form-group">
                         <label>Name of Org. Unit</label>
                         <textarea class="form-control" placeholder="Enter..." name="org_name" type="text"><?php echo $row['org_name'];?></textarea>
                    </div>


                    <div class="col-md-12 form-group">
                         <label>Cost Center</label>
                         <textarea class="form-control" placeholder="Enter..." name="cost_ctr" type="text"><?php echo $row['cost_ctr'];?></textarea>
                    </div>


                    <div class="col-md-12 form-group">
                         <label>Department Name</label>
                         <textarea class="form-control" placeholder="Enter..." name="dept_name" type="text"><?php echo $row['dept_name'];?></textarea>
                    </div>


                    <div class="col-md-12 form-group">
                         <label>No. Ext Telpon</label>
                         <textarea class="form-control" placeholder="Enter..." name="telp" type="text"><?php echo $row['telp'];?></textarea>
                    </div>



                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-send"></span> Simpan</button>
                 </div>
                </div> 
                  </div></form>
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
                <h3 class="box-title"> <a href="#" data-toggle="modal" data-target="#my-modal1" class="btn btn-info"><li class="fa fa-plus"></li> Tambah</a></h3>
              <div class="box-tools pull-right">
                 </div>
            </div>
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>#</th>
                        <th>Name</th>
                        <th>Name of Org. Unit</th>
                        <th>Department Name</th>
                        <th>No. Ext Telpon</th>
                        <th>Action</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM anggota";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                      
                            <td><?php echo $row['name'];?></td>
                        
                            <td><?php echo $row['org_name'];?></td>
                      
                            <td><?php echo $row['dept_name'];?></td>
                            <td><?php echo $row['telp'];?></td>
                            
                            <td>
                                <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=anggota&id=<?php echo $row['id'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a> 
                                <a href="aksi.php?sender=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
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
<form action="aksi.php?sender=anggota" method="POST" >
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah Anggota</h4>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 
    <div class="form-group">
      <label>Personnel No.</label>
      <input type="text" name="personnel_no" class="form-control" required="" placeholder="Enter ...">
    </div>
 
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter ..."></input> 
    </div>

     <div class="form-group">
      <label>Org. Unit</label>
      <input type="text" name="org_unit" class="form-control" placeholder="Enter ..."></input> 
    </div>

     <div class="form-group">
      <label>Name of Org. Unit</label>
      <input type="text" name="org_name" class="form-control" placeholder="Enter ..."></input> 
    </div>

     <div class="form-group">
      <label>Cost Center</label>
      <input type="text" name="cost_ctr" class="form-control" placeholder="Enter ..."></input> 
    </div>

     <div class="form-group">
      <label>Department Name</label>
      <input type="text" name="dept_name" class="form-control" placeholder="Enter ..."></input> 
    </div> 

     <div class="form-group">
      <label>No. Ext Telpon </label>
      <input type="text" name="telp" class="form-control" placeholder="Enter ..."></input> 
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
      
     
<?php include 'theme/footer.php'; ?>