<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once '../../core/config.php';

$data = json_decode(file_get_contents("php://input"));

if(isset($data->username) && !empty($data->username) ){
	$user_fname = $mysqli_connect->real_escape_string($data->user_fname);
	$user_mname = $mysqli_connect->real_escape_string($data->user_mname);
	$user_lname = $mysqli_connect->real_escape_string($data->user_lname);
    $user_address = $mysqli_connect->real_escape_string($data->user_address);
	$user_contact_number = $mysqli_connect->real_escape_string($data->user_contact_number);
	
	$username = $mysqli_connect->real_escape_string($data->username);
	$password = $mysqli_connect->real_escape_string($data->password);

	$date = getCurrentDate();

	$fetch_rows = $mysqli_connect->query("SELECT count(user_id) from tbl_users where username='$username' ") or die(mysqli_error());
	$count_rows = $fetch_rows->fetch_array();

	if($count_rows[0] > 0){
		echo -1;
	}else{
		$sql= $mysqli_connect->query("INSERT INTO `tbl_users`(`user_fname`, `user_mname`, `user_lname`, `user_address`, `user_contact_number`,`username`, `password`, `user_category`, `date_updated`) VALUES ('$user_fname','$user_mname','$user_lname','$user_address','$user_contact_number','$username',md5('$password'),'B','$date')");
		
		$response = array();

		if($sql){
			$user_id = $mysqli_connect->insert_id;
			
			$response['user_id'] = $row['user_id'];
			$response['user_fname'] = $row['user_fname'];
			$response['user_mname'] = $row['user_mname'];
			$response['user_lname'] = $row['user_lname'];
			$response['user_category'] = $row['user_category'];
			$response['response'] = 1;
		}else{
				
			$response['user_id'] = 0;
			$response['user_fname'] = "";
			$response['user_mname'] = "";
			$response['user_lname'] = "";
			$response['user_category'] = 0;
			$response['response'] = 0;
		}

		echo json_encode($response);
		
	}
	
}

?>