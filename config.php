<?php

$server="127.0.0.1";
$username="root";
$password="";
$database="jobs";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";
session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE 'email'='$email' AND 'password'='$password'";
    $result=mysqli_query($conn,$query);


    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //var_dump($row);
    //die;
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];


    $sql = "INSERT INTO 'jobs'('cname','position','Jdesc','skills','CTC') VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
   // if(mysqli_query($conn,$sql)){
   //     echo "New Jobs Posted";
  //  }
    //else{
      //  echo "Failed to Post the Job $sql. " .mysqli_error($conn);
   // }
    mysqli_query($conn,$jobs);
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];

    $sql = "INSERT INTO 'candidates'('name','apply','qual','year') VALUES ('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sql);
}
//mysqli_close($conn);
?>