<?php
// Load the database configuration file
include_once 'connection.php';

if(isset($_POST["Import"])){

    $filename=$_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        $bug = 0;
        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
        {
            $bug++ ;
            if($getData[0] !=''){
                $sql = "INSERT into payroll (id,emp_id,name,days,rate,overtime,gross_salary,deductions,net_salary) 
                        values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."')";
                $result = mysqli_query($con, $sql);
            }
        }fclose($file);
    }
    {
        $qstring = '?status=succ';
        }
}

header("Location: payrolls.php".$qstring);