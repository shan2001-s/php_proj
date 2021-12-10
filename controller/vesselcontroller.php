
<?php
include_once "model/vessel.php";
class VesselController extends Vessel {

    public function addVessel($name)
    {
        return $this->insertVessel($name);
    }
    public function showVessels()
    {
        return $this->getVessels();
    }
    public function getVessel($vid)
    {
        return $this->getVesselInfo($vid);
    }
    public function editVessel($vid,$name)
    {
        return $this->updateVessel($vid,$name);
    }
    

}