<?php
	require "links.php";
	require "sql.php";

   if((string)$_SERVER["REQUEST_METHOD"] == "POST"){
		
   

	$email = (string) trim(htmlspecialchars($_POST['email']));
	$pass = (string)trim(md5(trim(htmlspecialchars($_POST['pass']))));

	  
   if(empty($email) or empty($pass)){
		echo "<script>
		alert('Usuario ou Senhas Vazios!')
		window.location.href='$login'
		</script>";
   }
   
	$sql = ("select * from users_login_table where login_email = '$email' and login_pass = '$pass';");
	$query = mysqli_query($con, $sql) or die("<script>alert('error'); window.location.replace('$login')</script>");
	
	$res = mysqli_num_rows($query);

	if($res <= 0 ){
		echo "<script>alert('Usuario ou senha incorretos'); window.location.href='$login'</script>";
		exit;
	}
	if($res > 0){
		$rec = mysqli_fetch_array($query);
		session_start();
		$_SESSION['id_user'] = $rec['id_user'];
		$_SESSION['name'] = $rec['login_name'];
		$_SESSION['category'] = $rec['login_category'];
		
		if($_SESSION['category'] == 'Cliente'){
			echo "<script>window.location.href = '$dash_user';</script>";
			exit();

		}if($_SESSION['category'] == 'Fábrica'){
			echo "<script>window.location.href = '$dash_fabric';</script>";
			exit();	
			
		}

		
	}

	}
	else {
		echo "<script>
		alert('Aceito apenas POST!')
		window.location.href='$login'
		</script>";
	   exit;
	}
?>