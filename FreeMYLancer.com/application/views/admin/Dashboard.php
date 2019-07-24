<?php include_once('Admin_Header.php');?>

<div class="container">
  <?= anchor('Admin/Add_dashboard', 'Insert', ['class'=>'btn btn-lg btn-success pull-right']);?>
<div class="row">&nbsp;</div> 
 

<div class="row">&nbsp;</div> 
  <div class="cal-md-12">  


    <?php echo validation_errors(); ?>
      <?php 
          if(!empty($sess=$this->session->flashdata('feedback')))
          {
              ?>
                  <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $sess;?>
                  </div>
              <?php  
          }
      ?> 


      <?php 
          if(!empty($sess=$this->session->flashdata('feedback2')))
          {
            ?>
              <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $sess;?>
              </div>
            <?php  
          }
      ?>




  <div class="container">

    <table class="table table-bordered">

      <div class="col-lg-6 col-lg-offset-6">       
      
        <thead>
         <tr class="table-primary">
            <th class="active">Serial No</th>
            <th class="active">Invoice No</th>
            <th class="active">Patent Name</th>
            <th class="active">Address</th>
            <th class="active">Contact No</th>
            <th class="active">Total Amount</th>
            <th class="active">Delivery By</th>
            <th class="active">Action Mode</th>
            <th class="active">Action Mode</th>
         </tr>          
        </thead>

        <tbody>
        <?php
          if(is_array($art))

          {  
            $count = $this->uri->segment(3 , 0); // create serial number
            foreach ( $art as $row )
            {    
              ?>
                  <tr class="table-primary">

                          <!-- fetch serial number-->

                        <td class="active"><?php echo ++$count; ?></td> 
                        
                          <!-- End fetch serial number-->

                        <td class="active"><?php echo $row->inv_no; ?></td>        
                     
                        <td class="active"><?php echo $row->name; ?></td>
                      
                        <td class="active"><?php echo $row->address; ?></td>

                        <td class="active"><?php echo $row->P_con; ?></td>
                      
                        <td class="active"><?php echo $row->amt; ?></td>

                        <td class="active"><?php echo $row->deliverd; ?></td>                        

                          <div>                             

                                <td>
                                  <?= 
                                    anchor("Admin/Edit_dashboard/{$row->U_id}", 'Edit', ['class'=>'btn  btn-primary']);
                                  ?>



                                </td>
                                
                                <td>
                                  <?=

                                    form_open('Admin/Delete_dashboard'),
                                    form_hidden('article_id', $row->U_id),
                                    form_submit(['name'=>'submit', 'value'=>'Delete', 'class'=>'btn btn-danger']),
                                    form_close();

                                  ?>
                                </td>                         

                          </div>                        
                        
                  </tr>

              <?php
            }
          }
        ?>  

        </tbody>
      </div>
    </table>

<!-- fetch number of page  in codeigniter -->

    <?= $this->pagination->create_links(); ?>

<!-- fetch number of page in codeigniter -->


      <?php include_once('Admin_Footer.php');?>
  </div>
</div>

</body>
</html>