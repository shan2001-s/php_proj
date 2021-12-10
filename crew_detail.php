<?php
include_once "controller/crewcontroller.php";
$cid=$_GET["cid"];
$crewcontroller=new CrewController();
$result=$crewcontroller->showCrewInfo($cid);


?>
<?php include "master_layouts/header.php" ?>



<body>
    <style>
        input[type=button1]{
        background-color: #4CAF50;
       
        color: white;
      
      
       
     
}
    </style>
  


<form class="repeater">


  
    
    <div class=" col g-3 ">

   

    <!--<?php
    //<a class=" btn btn-success mb-3"  href="personal_details.php?cid=".$result['id']>Create <i class="fas fa-plus"></i></a>
    ?>
    <a class=" btn btn-primary mb-3" href="employee.php">Detail <i class="fas fa-info-circle"></i></a>
    <a class=" btn btn-secondary mb-3" href="employee.php">Update <i class="far fa-edit"></i></a>
    <a class=" btn btn-danger mb-3" href="employee.php">Delete <i class="fas fa-trash"></i></a>
    

    
     


  </div>$firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$birthdate,$rank,$vessel_type,$final_school,$martial_status,$waistline,$uniform_size,$blood_type,$safeshoe,$health_status,$bank_info,$tele1,$tele2,$address,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire,$id,$image -->
     <?php echo "<img src='uploads_reg/".$result['image']."'style='width:150px;height:150px;'' >"; ?>
     <div class="container overflow-hidden">
  <div class="row  ">

       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["crewid"];?>">
                </div>
       </div>
      <div class="col-md-6 p-3">
                  <div>
                      <label class="form-label">First Name</label>
                      <input type="text" class="form-control" disabled="" value="<?php echo $result["firstname"];?>">
                  </div>
      </div>
      <div class="col-md-6 p-3">
                <div >
                    <label class="form-label">Middle Name</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["middlename"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                  <div>
                      <label class="form-label">last Name</label>
                      <input type="text" class="form-control" disabled="" value="<?php echo $result["lastname"];?>">
                  </div>
      </div>
      <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">father_name</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["father_name"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">Mother_name</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["mother_name"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">nationality</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["nationality"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">birthdate</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["birthdate"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">rank</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["rank"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">vessel_type</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["vessel_type"];?>">
                </div>
       </div>
      
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">final_school</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["final_school"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">martial_status</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["martial_status"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">waistline</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["waistline"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">uniform_size</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["uniform_size"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">blood_type</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["blood_type"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">safeshoe</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["safeshoe"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">health_status</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["health_status"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">bank_info</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["bank_info"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">tele1</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["tele1"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">tele2</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["tele2"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">address</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["address"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">bank_info</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["bank_info"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">city</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["city"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">application_date</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["application_date"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">passportno</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["passportno"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">passport date</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["passportdate"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">passport expire date</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["passportexpiredate"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">sbookno</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["sbookno"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">sbook date</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["sbookdate"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">sbookexpire</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["sbookexpire"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">lincece</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["lincece"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">lincece date</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["lincecedate"];?>">
                </div>
       </div>
       <div class="col-md-6 p-3">
                <div class="mb-3">
                    <label class="form-label">lincece expire</label>
                    <input type="text" class="form-control" disabled="" value="<?php echo $result["linceceexpire"];?>">
                </div>
       </div>
      





    

    
    

</div>


   
</form>


                               
                                 
                             


      
</body>    
<style>
table, th, td {
  border:1px solid black;
}
</style>
                   
            <!-- End of Main Content -->
<?php include "master_layouts/footer.php" ?>

