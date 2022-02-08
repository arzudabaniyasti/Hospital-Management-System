<?php
include '../connection.php';
if(isset($_POST['updatebutton'])){
    $appointmentDate= $_POST['appointmentDate'];
    $appointmentID=$_POST['appointmentID'];
    $appointmentStatus=$_POST['appointmentStatus'];
    $patient_appt_query=$db->prepare("UPDATE appointment SET appointmentDate=?  where appointmentID=?");
    $patient_appt_query->execute([$appointmentDate,$appointmentID]);
    $patient_appt_query2=$db->prepare("UPDATE appointment SET appointmentStatus='Waiting..' where appointmentID=$appointmentID");
    $patient_appt_query2->execute();
    header ("Location:../patient_appointment.php");
}

/*if($_GET['deleteappt']=="ok"){
    $deletee=$db->prepare("DELETE * from appointment  where appointmentID=:appointmentID");
    $patient_appt_querycancel= $deletee->execute(array('appointmentID'=>$_GET['appointmentID']));
    if($patient_appt_querycancel){
        Header ("Location:../patient_appointment.php?durum=ok");
        exit;
    }else{
        Header ("Location:../patient_appointment.php?durum=no");
        exit;
    }
   
}
*/
if(isset($_POST['deletebutton'])){
    $appointmentID=$_POST['appointmentID'];
    $delete=$db->prepare("DELETE from appointment where appointmentID=$appointmentID");
    $patient_appt_querycancel= $delete->execute();
header ("Location:../patient_appointment.php");
}

?>
