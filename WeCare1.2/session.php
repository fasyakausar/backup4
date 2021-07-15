<?php
    //PENGATUR SESI HABIS
		//Session Berakhir Dalam 3 jam
		$minutesBeforeSessionExpire=30;
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*60))) {
   			session_unset();     // unset $_SESSION   
    		session_destroy();   // destroy session data  
			echo "<script>alert('Login Session Expired');document.location='menulogin.php' </script>";
			}
			
		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity
?>