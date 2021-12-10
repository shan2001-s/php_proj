<?php
include_once "controller/crewcontroller.php";
include_once "controller/vesselcontroller.php";

$vesselcontroller=new VesselController();
$vessel_results=$vesselcontroller->showVessels();
$crewController=new CrewController();
$cid=$_GET["cid"];
$crew_results=$crewController->showCrews_one();
$crew_info=$crewController->showCrewInfo($cid);

?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew Service</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    
                    <div class="container">
                    <span id="success_result"></span>
                    <form method="post" id="repeater_form">
                        
                        <div class="form-group">
                            <label>Crew Name</label>
                            <select data-skip-name="true" name="crew" class="form-control">
                            <?php
                              
                                    echo "<option value='".$crew_info['crewid']."'>".$crew_info['crewid']."/...".$crew_info["firstname"]."[".$crew_info['sbookno']."]</option>";
                                   
                                
                            ?>   
                            
                                                    
                                                    
                            </select>
                        </div>
                       
                        <div id="repeater">
                            <div class="repeater-heading" align="right">
                                <button type="button" class="btn btn-primary repeater-add-btn">Add More Service</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="items" data-group="programming_languages">
                                <div class="item-content">
                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-2">
                                                <label class="form-label">Company Name</label>
                                                <input type="text" data-skip-name="true" data-name='company[]' class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">Ship Name</label>
                                                <input type="text" data-skip-name="true" data-name='ship[]' class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">Rank</label>
                                                <input type="text" data-skip-name="true" data-name='rank[]' class="form-control">
                                            </div>
                                           
                                            
                                <?php
                                 echo "<div class='col-md-4'>";
                                 echo " <label class='form-label'>Vessel Type</label>";
                                  echo " <select data-skip-name='true' data-name='vtype[]'' class='form-control'>";
                               foreach($vessel_results as $vresult)
                               {   
                                   
                                    echo "<option  value=".$vresult["name"].">".$vresult["name"]."</option>";
                                    
                                
                                }
                                echo " </select>";
                                echo "   </div>";
                                ?>
                                            <div class="col-md-2" style="margin-top:24px;" align="center">
                                                <button id="remove-btn" onclick="$(this).parents('.items').remove()" class="btn btn-danger">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group" align="center">
                            <br /><br />
                        
                            <input type="submit"  name="insert" value="Save" class="button_active btn btn-success" onclick="location.href='crew_table.php';" />
                        </div>
                    </form>
                </div>
                    </form>
                    

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
 <?php 
session_destroy();
?>
<?php include "master_layouts/footer.php";?>