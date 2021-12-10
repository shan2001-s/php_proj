<?php
include_once "model/crew.php";

class CrewController extends Crew{

    public function addCrew($firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$birthdate,$rank,$vessel_type,$final_school,$martial_status,$waistline,$uniform_size,$blood_type,$safeshoe,$health_status,$bank_info,$tele1,$tele2,$address,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire,$image)
    {
         $this->insertCrew($firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$birthdate,$rank,$vessel_type,$final_school,$martial_status,$waistline,$uniform_size,$blood_type,$safeshoe,$health_status,$bank_info,$tele1,$tele2,$address,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire,$image);
    }

    public function showCrews_one(){
        return $this->getCrews();
    }
    public function showCrewInfo($cid)
    {
        return $this->getCrewInfo($cid);
    }

    public function editCrew($cid,$firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$rank,$birthdate,$final_school,$martial_status,$tele1 ,$tele2,$address,$waistline,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire ,$uniform_size ,$blood_type ,$safeshoe ,$health_status ,$bank_info,$vessel_type)
    {
        return $this->updateCrew($cid,$firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$rank,$birthdate,$final_school,$martial_status,$tele1 ,$tele2,$address,$waistline,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire ,$uniform_size ,$blood_type ,$safeshoe ,$health_status ,$bank_info,$vessel_type);
    }

    public function deleteCrew($cid)
    {
        return $this->deleteCrewInfo($cid);
    }
   

    //vessel-------------------------------------------------------
//class CrewController extends Crew{    
    public function addVessel($name)
    {
         $this->insertVessel($name);
    }

    public function showVessels_list(){
        return $this->getVessels();
    }

    public function showVesselInfo($cid)
    {
        return $this->getVesselInfo($cid);
    }

    public function editVessel($cid,$name){
        return $this->updateVessel($cid,$name);
    }

}



?>

