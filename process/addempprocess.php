<?php

require_once ('dbh.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
//$nid = $_POST['nid'];
$dept = $_POST['dept'];
//$degree = $_POST['degree'];
//$salary = $_POST['salary'];
$birthday =$_POST['birthday'];
//echo "$birthday";
//$files = $_FILES['file'];
//$filename = $files['name'];
//$filrerror = $files['error'];
//$filetemp = $files['tmp_name'];
//$fileext = explode('.', $filename);
//$filecheck = strtolower(end($fileext));
//$fileextstored = array('png' , 'jpg' , 'jpeg');


$duplicate = "SELECT * FROM employee WHERE firstName='$firstname' AND lastName='$lastName' AND email='$email' AND password='1234' AND birthday='$birthday' AND gender='$gender' AND contact='$contact' AND address='$address' AND dept='$dept'";
$result1 = mysqli_query($conn, $duplicate);
$result2 = mysqli_num_rows($result1);
if(($result2) == 0)
{
    $sql = "INSERT INTO `employee`(`firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `address`, `dept`) VALUES ('$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$address','$dept')";

    $result = mysqli_query($conn, $sql);

    $last_id = $conn->insert_id;

    //$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
    //$salaryQ = mysqli_query($conn, $sqlS);
    $rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

    if(($result) == 1){
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Registered')
        window.location.href='../viewemp.php';
        </SCRIPT>");
        //header("Location: ..//aloginwel.php");
    }

    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Registere')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }

    $result = mysqli_query($conn, $sql);

    $last_id = $conn->insert_id;

    //$sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
    //$salaryQ = mysqli_query($conn, $sqlS);
    $rank = mysqli_query($conn, "INSERT INTO `rank`(`eid`) VALUES ('$last_id')");

    if(($result) == 1){
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Registered')
        window.location.href='..//viewemp.php';
        </SCRIPT>");
        //header("Location: ..//aloginwel.php");
    }
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Employee Already Added')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");



}



?>