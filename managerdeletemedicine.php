<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manager Delete Medicine</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manager Delete Medicine
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Medicine id</th>
                                            <th>Medicine name</th>
                                            <th>Qty</th>
											<th>Added date</th>
											<th>Added by</th>
											<th>Price</th>
											<th>Action</th>
                                           
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php
                                           if(!empty($data_medicines))
                                           {
                                            foreach($data_medicines as $d)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->medicine_id;?></td>
                                                    <td><?php echo $d->medicine_name;?></td>
                                                    <td><?php echo $d->qty;?></td>
												    <td><?php echo $d->added_date;?></td>
													<td><?php echo $d->added_by;?></td>
													<td><?php echo $d->price;?></td>
                                                   
												   <td>
												   
												   <a href="delete?delmedicine_id=<?php echo $d->medicine_id;?>" class="btn btn-primary me-1">Delete</a>
												   
												   </td>
                                                
												</tr>
                                                <?php
                                                }
                                           }
                                           else
                                           {
                                            ?>
                                            <tr>
                                                <td> DATA NOT FOUND</td>

                                            </tr>
                                            <?php
                                            } 
                                            ?> 
                                           
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
