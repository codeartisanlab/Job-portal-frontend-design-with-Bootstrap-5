<?php
	$conn=mysqli_connect('localhost','root','','job_portal_db');

	// echo "Database Running!!";

	if (!$conn) {
		mysqli_connect_error();
	}


	// Register Company

	function company_register($conn,$data,$image){
			$company_name=$data['company_name'];
			$email=$data['email'];
			$contact=$data['contact'];
			$password=$data['password'];

			$query="INSERT INTO ss_companies (company_logo,company_name,email,contact,password) VALUES(?,?,?,?,?)";

			$stmt=mysqli_prepare($conn,$query);

			mysqli_stmt_bind_param($stmt, "sssii", $image,$company_name,$email,$contact,$password );


			mysqli_stmt_execute($stmt);

			if (mysqli_affected_rows($conn)>0) {
				$msg="Data has been inserted!";
			}else{
				$msg=mysqli_error($conn);
			}return $msg;


			mysqli_stmt_close($stmt);
	}

?>
