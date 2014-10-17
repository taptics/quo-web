<?php
	require("keys.php");
	class User {
		private static $authToken = AUTH_KEY;
		public static function get($id){
			$ch = curl_init('http://quoapp.herokuapp.com/api/user/get/'.$id);
			curl_setopt_array($ch, array(
    			CURLOPT_POST => FALSE,
    			CURLOPT_RETURNTRANSFER => TRUE,
    			CURLOPT_HTTPHEADER => array(
        		'Authorization-Token: '.self::$authToken,
        		'Content-Type: application/json'
    			)
			));
			$response = curl_exec($ch);

			if($response === FALSE){
    			die(curl_error($ch));
			}

			$responseData = json_decode($response, TRUE);

			return $responseData;
		}

		public static function authenticate($username, $password){
			$postData = array("username"=>$username,
				"password"=>$password);
			$ch = curl_init('http://quoapp.herokuapp.com/api/user/authenticate/');
			curl_setopt_array($ch, array(
    			CURLOPT_POST => TRUE,
    			CURLOPT_RETURNTRANSFER => TRUE,
    			CURLOPT_HTTPHEADER => array(
        		'Authorization-Token: '.self::$authToken,
        		'Content-Type: application/json'
    			),
    			CURLOPT_POSTFIELDS => json_encode($postData)
			));
			$response = curl_exec($ch);

			if($response === FALSE){
    			die(curl_error($ch));
			}

			$responseData = json_decode($response, TRUE);

			return $responseData;
		}
		public static function register($username, $password, $location, $name){
			$postData = array("username"=>$username,
				"password"=>$password, "location"=>$location, "name"=>$name);
			$ch = curl_init('http://quoapp.herokuapp.com/api/user/create/');
			curl_setopt_array($ch, array(
    			CURLOPT_POST => TRUE,
    			CURLOPT_RETURNTRANSFER => TRUE,
    			CURLOPT_HTTPHEADER => array(
        		'Authorization-Token: '.self::$authToken,
        		'Content-Type: application/json'
    			),
    			CURLOPT_POSTFIELDS => json_encode($postData)
			));
			$response = curl_exec($ch);

			if($response === FALSE){
    			die(curl_error($ch));
			}

			$responseData = json_decode($response, TRUE);

			return $responseData;
		}
	}
?>