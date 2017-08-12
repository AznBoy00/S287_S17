<?php
$visitCount = 0
if(isset($_COOKIE['visitCount'])){
$visitCount = $_COOKIE['visitCount'];
++$visitCount;
}
if(isset($_COOKIE['lastVisit'])){
$lastVisit = $_COOKIE['lastVisit'];
}
setcookie('visitCount', $visitCount,  time()+4000);
setcookie('lastVisit', date("d/m/Y H:i:s"),  time()+4000);
if($visitCount== 0){
echo "Welcome, this is your first here!";
} else {
echo "This is visit number: ".$visitCount;
echo '<br>';
echo "Last time, you were here ".$lastVisit;
}
?>