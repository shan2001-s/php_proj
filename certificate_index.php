<?php
include_once "controller/crewcontroller.php";
include_once "controller/servicecontroller.php";
include_once "controller/certificatecontroller.php";
$cid=$_GET["cid"];
$crewcontroller=new CrewController();
$c_result=$crewcontroller->showCrewInfo($cid);
$c_results=$crewcontroller->showCrews_one();

$servicecontroller=new ServiceController();
$s_result=$servicecontroller->showServiceInfo($cid);
$s_results=$servicecontroller->showServices();

$certificatecontroller=new CertificateController();
$certificateinfo_result=$certificatecontroller->showCertificateInfo($cid);
$certificate_results=$certificatecontroller->showCertificates();
?>

<?php include_once "master_layouts/header.php";?>


          



  <div class="container-fluid">
  <div class="row">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Search For Crew_Certificate</h1>
                       
                    </div>
    </div>
  <div class="row">
  <div class="card-header py-5 col-md-3">
                  

                        <?php
                   
                   echo "  <select class='form-select  bg-secondary  text-white' method='post' name='forma' ;  onchange='location = this.value;' aria-label='Default select example'>";
                   echo "<option selected>Open this select menu</option>";
                   foreach($c_results as $crew_result)
                   {
                       
                          echo"   <option  value='certificate_index.php?cid=".$crew_result["crewid"]."'>".$crew_result["firstname"]." ".$crew_result["middlename"]." ".$crew_result["lastname"]." [".$crew_result["sbookno"]."]</option>";
                    
                   }

                     echo "<select>";
                   
                
                   ?>
                    </div>

                   

                        <div class="card-header py-3 col-md-3">
                        <label for="inputText" class="form-label">Name :</label>
                            <input  class="m-0 font-weight-bold text-primary form-control" value='<?php echo $c_result["firstname"]." ".$c_result["middlename"]." ".$c_result["lastname"]; ?>'>

                        </div>
                        
                        <div class="card-header py-3 col-md-3">
                        <label for="inputText" class="form-label">S Book No :</label>
                            <input  class="m-0 font-weight-bold text-primary form-control" value='<?php echo $c_result["sbookno"]; ?>'>

                        </div>
                        <div class="card-header py-5 col-md-2">
                      

  
    
        <input type="text" class="form-control  bg-primary text-white" value="Search"  id="search_field" readonly>
  
  

                  </div>
                </div>   
                  </div>                     
                    




<div class="container">

  <br><br><br><br>
  <div class="row">
    <div class="col-md-12">

    <table id="fid_table" class="table table-striped"  width="100%" cellspacing="0"  style="display: none;">
      <thead>
        <tr class="t_head">
        <th>Crew ID</th>
        <th>Certificate Name</th>
        <th>Issue</th>
        <th>Number</th>
        <th>Expired Type</th>
                                            
        <th>Actions</th>
        </tr>
      </thead>
      <?php
                                          foreach($certificate_results as $certificate_result)
                                          {
                                              
                                            echo "<tr >";
                                           
                                            echo "<td id='td1'>" . $certificate_result['crew_id']."</td>";
                                            echo "<td>" . $certificate_result['certificate_id']."</td>";
                                            echo "<td>" . $certificate_result['issue']."</td>";
                                            echo "<td>" . $certificate_result['number']."</td>";
                                            echo "<td>" . $certificate_result['expired']."</td>";
                                          //  echo "<td cid=".$c_result['crewid']."><a href='crew_detail.php?cid=". $c_result['crewid'] ."' class='btn btn-info mx-2s'>Read</a><a href='crew_edit.php?cid=". $c_result['crewid'] ."' class='btn btn-warning mx-2'>Edit</a><a href='service_create.php?cid=". $c_result['crewid'] ."' class='btn btn-info mx-2s'>Service</a> <a class='btn btn-danger delete' ><i class='fa fa-trash'></i></a></td>";
                                           
                                           // echo "<td>". $result['image']."</td>";
                                            

                                          echo "</tr>";
                                          }
                                          
                                          ?>
     

    </table>
</div>
  </div>
</div>
<script>
    document.getElementById("fid_table").style.display = "none";  
   
        $("#search_field").click(function(){
            $("#fid_table").css("display","block")
  var patt = <?php  echo $c_result["crewid"] ?>;

  $('#fid_table').find('tr').each(function() {
    var $table = $(this);
    
    if (!($table.find('#td1').text().search(patt) >= 0)) {
      $table.not('.t_head').hide();
    }
    if (($table.find('#td1').text().search(patt) >= 0)) {
      $(this).show();
    }
    
  });
 
});
</script>                      
                           
                         
                      
                        
                      
      

<?php include "master_layouts/footer.php";?>