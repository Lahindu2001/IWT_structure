<?php 

require 'config.php';

   $adfName = $_GET["firstName"];
   $adlName  = $_GET["lastName"];
   $adNic  = $_GET["nic"];
   $adDob  = $_GET["date"];
   $adGender  = $_GET["gender"];
   $admStatus  = $_GET["mat_status"];
   $adcontact  = $_GET["phone"];
   $adAdress  = $_GET["address"];
   $adEmail  = $_GET["email"];
   $adDomeeting  = $_GET["datem"];
   $adTomeeting  = $_GET["time"];
   $adLocation  = $_GET["location"];
   $adReson  = $_GET["reson"];


if(empty($adfName)||empty($adlName)||empty($adNic)||empty($adDob)||empty($adGender)||empty($admStatus)||empty($adcontact)||empty($adAdress)||empty($adEmail)||empty($adDomeeting)||empty($adTomeeting)||empty($adLocation)||empty($adReson)){
    echo "all requried";
}
else{

$sql = "UPDATE agentreserve set firstName='$adfName' , lastName='$adlName' , NIC = '$adNic' , dob ='$adDob' , gender= '$adGender' , martialStatus = '$admStatus',contactNumber= '$adcontact' , address = '$adAdress'  ,email = '$adEmail' ,doMeeting = '$adDomeeting' ,toMeeting = '$adTomeeting' ,location = '$adLocation' ,reason = '$adReson' WHERE NIC='$adNic'";

if($con->query($sql))
{
      
header("Location: table4.php");
exit();

/*echo "updated"; */
}
else{
    echo "not update";
}


}

?>