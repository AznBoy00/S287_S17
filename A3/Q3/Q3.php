<?php
	$visitCount = 0;
		if(isset($_COOKIE['visitCount'])){
			
			$visitCount = $_COOKIE['visitCount'];
			++$visitCount;
		}
		if(isset($_COOKIE['lastVisit'])){
			
		$lastVisit = $_COOKIE['lastVisit'];
		}
		setcookie('visitCount', $visitCount, time()+4000);
		setcookie('lastVisit', date("d/m/Y H:i:s"), time()+4000);
		
		if($visitCount==0){
			
			echo "Welcome, you are new here!";
			
		}
		else{
			echo "Hello again, this is visit number: $visitCount";
			echo '<br>';
			echo "Last time you visited was $lastVisit"; 
		}
			


?>