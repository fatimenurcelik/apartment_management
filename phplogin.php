<?php 
session_start();
include "config.php" ;
if (isset($_POST['giris-formu'])) {

    $submit = htmlspecialchars($_POST['giris-formu'], ENT_QUOTES, 'UTF-8');

    if(empty($_POST['ad']) || empty($_POST['password'])) {
        die("Boş Alan Bırakmayınız.");
    }else{
    $ad = $_POST['ad'];
    $password = $_POST['password'];

   //$password_crypt = md5($password);


    $db=mysqli_select_db($conn,"myDB");
    $query =mysqli_query($conn, "SELECT * FROM users WHERE username='$ad' AND password='$password'");

    $sıra = mysqli_num_rows($query);
    if($sıra ->num_rows>0) {
		$_SESSION["isAdmin"] = $row["isAdmin"];
		
		if ($row["isAdmin"] == 1) 
			header('location: afteradmin.php');

		header('location: afterlogin.php');
	
		
    }else {
        die("kullanıcı adı veya şifre hatalı");
	}
	
	}

}
?>

/*session_start(); 
include "config.php";

if (isset($_POST['ad']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['ad']);
	$password = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE userName='$uname' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['userName'] === $uname && $row['password'] === $password) {
            	$_SESSION['userName'] = $row['userName'];
            	$_SESSION['firstname'] = $row['firstname'];
                $_SESSION['userId'] = $row['userId'];
                  
                    header("Location: afterlogin.php");
                    //exit();
                   // if ($_SESSION['userName'] == 0) {
                        //header("Location: afteradmin.php");
                      //  exit();
					//}
					if ($uname == 0) {
						header("Location: afteradmin.php");
                        exit();
					}
					
            }else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>*/