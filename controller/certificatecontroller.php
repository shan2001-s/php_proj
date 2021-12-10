<?php
include_once "model/certificate.php";
class CertificateController extends Certificate{
    public function insertCertificate($crew_id,$certificate_id,$issue,$number,$expired)

    {
        $this->addCertificate($crew_id,$certificate_id,$issue,$number,$expired);
    }

    public function showCertificates(){
        return $this->getCertificates();
    }
    public function showCertificateInfo($cid)
    {
        return $this->getCertificateInfo($cid);
    }
}
?>