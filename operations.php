<?php
include("config.php");

if($_REQUEST['op']=='insert'){
    

    $query = "INSERT INTO public.emp (first_name,middle_name,last_name,email,mobileno,dob,gender,designation,
    address) VALUES ('".$_REQUEST['first_name']."', '".$_REQUEST['middle_name']."', '".$_REQUEST['last_name']."',
    '".$_REQUEST['email']."', '".$_REQUEST['mobileno']."','".$_REQUEST['dob']."','".$_REQUEST['gender']."',
    '".$_REQUEST['designation']."','".$_REQUEST['address']."')";
    //echo $query;
    $result = pg_query($db, $query);
    echo "inserted";
    header("location:index.php");
}

if($_REQUEST['op']=='update'){
    $query = "UPDATE public.emp set first_name='".$_REQUEST['first_name']."',middle_name='".$_REQUEST['middle_name']."',
    last_name='".$_REQUEST['last_name']."',email='".$_REQUEST['email']."',mobileno='".$_REQUEST['mobileno']."',
    dob='".$_REQUEST['dob']."',gender='".$_REQUEST['gender']."',designation='".$_REQUEST['designation']."',
    address='".$_REQUEST['address']."' where ID='".$_REQUEST['id']."'";
    $result = pg_query($db, $query);
    echo "updated";
    header("location:index.php");
}

if($_REQUEST['op']=='delete'){
    $query = "DELETE from public.emp where ID=".$_REQUEST['id'];
    $result = pg_query($db, $query);
    echo "deleted";
    header("location:index.php");
}

// if($_REQUEST['op']='getState'){
//     $host        = "host = localhost";
//     $port        = "port = 5433";
//     $dbname      = "dbname = sport3";
//     $credentials = "user = postgres password=postgres";
 
//     $db1 = pg_connect( "$host $port $dbname $credentials"  );

//     $query = "SELECT region_name FROM master.shala_region";
//     $result = pg_query($db1,$query);
//     $division=array();
//     while($row=pg_fetch_assoc($result)){
//         array_push($division,$row);
//     }
//     echo json_encode($division);
// }
?>
