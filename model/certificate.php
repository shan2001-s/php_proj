<?php
include_once "db.php";
class Certificate{


private $pdo; /// for database

public function addCertificate($crew_id,$certificate_id,$issue,$number,$expired)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//write sql statement
$sql="insert into crew_certificate(crew_id,certificate_id,issue,number,expired) values (:crew_id,:certificate_id,:issue,:number,:expired)";
// prepare statement
$statement=$this->pdo->prepare($sql);
//
$statement->bindParam("crew_id",$crew_id);
$statement->bindParam("certificate_id",$certificate_id);
$statement->bindParam("issue",$issue);
$statement->bindParam("number",$number);
$statement->bindParam("expired",$expired);

//excute
if($statement->execute())
{
    return true;
}
else{
    return false;
}
}

public function getCertificates(){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
  $sql="select * from crew_certificate as s join crew as c where s.crew_id=c.crewid";
    $statement=$this->pdo->prepare($sql);
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
public function getCertificateInfo($cid){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="select * from crew_certificate where id=:cid";
    $statement=$this->pdo->prepare($sql);
    $statement->bindParam("cid",$cid);
    $statement->execute();

    $result=$statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
}