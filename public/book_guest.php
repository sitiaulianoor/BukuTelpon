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
            
			    <li class="active" >
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
           <li><a href="#"><i class="fa fa-book"></i>Phone Book</a></li>
            <li class="active">Data</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM bukutelpon where id='$id' ";
                        
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
                         <label>Telpon Rumah</label>
                         <textarea class="form-control" placeholder="Enter..." name="telp_rumah" type="text"><?php echo $row['telp'];?></textarea>
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
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>#</th>
                        <th>Name</th>
                        <th>Name of Org. Unit</th>
                        <th>Department Name</th>
                        <th>No. Ext Telpon</th>
                        <th>Telpon Rumah</th>

                     
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM bukutelpon";
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
                            <td><?php echo $row['telp_rumah'];?></td>
                            
                            
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
      
      
      
     
     
<?php include 'theme/footer.php'; ?>