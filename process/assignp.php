<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid = $_POST['eid'];
$subdate = $_POST['duedate'];

/*$check = "SELECT * FROM project WHERE status='Due' AND eid='$eid'";
$result = mysqli_query($conn, $check);
$result2 = mysqli_num_rows($result);
if(($result2) == 0)
{*/
	$sql = "INSERT INTO `project`(`eid`, `pname`, `duedate` , `status`) VALUES ('$eid' , '$pname' , '$subdate' , 'Due')";

	$result3 = mysqli_query($conn, $sql);
	/*echo $result3;*/
	if(($result3) == 1){
	    
	    
	    header("Location: ../assignproject.php");
	}

	else{
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
	    window.alert('Failed to Assign')
	    window.location.href='javascript:history.go(-1)';
	    </SCRIPT>");
	}
/*}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
*/



?>