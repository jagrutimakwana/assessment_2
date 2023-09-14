<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View All Managers</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View All Managers
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Manager id</th>
                                            <th>Manager name</th>
                                            <th>Pharmacy name</th>
                                           
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php
                                           if(!empty($data_pharmacy_manager))
                                           {
                                            foreach($data_pharmacy_manager as $d)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->manager_id;?></td>
                                                    <td><?php echo $d->manager_name;?></td>
                                                    <td><?php echo $d->pharmacy_name;?></td>
													
												
                                                   
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
