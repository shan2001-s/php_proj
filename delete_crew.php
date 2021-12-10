
<?php

include_once 'model/db.php';
include_once 'controller/crewcontroller.php';
include_once "controller/vesselcontroller.php";

$cid=$_POST['id'];
$vesselcontroller=new VesselController();
$vesel_results=$vesselcontroller->showVessels();
$crewcontroller=new CrewController();
$result=$crewcontroller->deleteCrew($cid);
if($result)
{
    $results=$crewcontroller->showCrews_one();
    $output="";


$pdo=Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//2 sql statement
$sql="delete from crew where crewid=:cid";
//3.prepare sql statement
$statement=$pdo->prepare($sql);
$statement->bindParam(":cid",$cid);
$statement->execute();

 //select exisiting cutomers
 $sql="select * from crew";
 $statement=$pdo->prepare($sql);

$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$output="";
foreach($results as $result)
{
    $output.="<tr>";
   
    $output.= "<td>" . $result['firstname']."</td>";
    $output.= "<td>" . $result['middlename']."</td>";
    $output.= "<td>" . $result['lastname']."</td>";
    $output.= "<td>" . $result['nationality']."</td>";
    $output.= "<td>" . $result['rank']."</td>";
    $v_result=$vesselcontroller->getVessel($result['vessel_type']);
    $output.= "<td>" . $v_result["name"]."</td>";
    $output.= "<td><img src='uploads_reg/".$result['image']."' width='80' height='80'></td>";
    $output.= "<td cid=".$result['crewid']."><a href='crew_detail.php?cid=". $result['crewid'] ."' class='btn btn-primary mx-2s'>Read</a><a href='crew_edit.php?cid=". $result['crewid'] ."' class='btn btn-warning mx-2'>Edit</a><a href='service_create.php?cid=". $result['crewid'] ."' class='btn btn-secondary mx-2s'>Add Service</a> <a href='certificate_create.php?cid=". $result['crewid'] ."' class='btn btn-info mx-2s'>Add certificate</a> <a class='btn btn-danger delete' ><i class='fa fa-trash'></i></a></td>";
    $output.="</tr>";
}  
echo $output; 
}

?>
<?php
/*include_once 'model/db.php';
include_once 'controller/crewcontroller.php';
$cid=$_POST['id'];
$crewcontroller=new CrewController();
$result=$crewcontroller->deleteCrew($cid);

if($result)
{
    $results=$crewcontroller->showCrews();
    $output="";
foreach($results as $result)
{
    // Variable Type
    $output.="<tr>";
    $output.="<td>" . $result['firstname']."</td>";
   
    $output.= "<td>". $result['lastname']."</td>";
    $output.= "<td>". $result['rank']."</td>";
    $output.= "<td>". $result['vesseltype']."</td>";
    $output.= "<td>". $result['nationality']."</td>";
    $output.="<td cid=". $result['id'] ."><a href='crew_detail.php?cid=". $result['id'] ."' class='btn btn-success'><i class='fa fa-eye'></i></a><a href='crew_edit.php?cid=". $result['id'] ."'  class='btn btn-warning'><i class='fa fa-edit'></i></a> <a class='btn btn-danger delete'><i class='fa fa-trash'></i></a></td>";
    $output.="</tr>";
    //Array Type (Json Type)
   // $output[]=$result;

}

echo $output;

}*/


?>





