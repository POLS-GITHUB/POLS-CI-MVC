<?php include_once('Public_Header.php');?>

<div class="container">
  
<div class="row">&nbsp;</div> 
 

<div class="row">&nbsp;</div> 
  <div class="cal-md-12">  


    




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
            
         </tr>          
        </thead>

        <tbody>
        <?php
          if(is_array($art2))

          {  
            $count = $this->uri->segment(3 , 0); // create serial number
            foreach ( $art2 as $row )
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


      <?php include_once('public_Footer.php');?>
  </div>
</div>

</body>
</html>