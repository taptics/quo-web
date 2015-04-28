<?php
	require("keys.php");
	class Post {
		private static $authToken = AUTH_KEY;
		public static function getAll(){
			$ch = curl_init('http://quoapp.herokuapp.com/api/post/all');
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

		public static function get($id){
			$ch = curl_init('http://quoapp.herokuapp.com/api/post/get/'.$id);
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

		public static function create($title, $text, $user){
			$postData = array("title"=>$title,
				"text"=>$text, "userId"=>$user);
			$ch = curl_init('http://quoapp.herokuapp.com/api/post/create/');
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
    			return curl_error($ch);
			}

			$responseData = json_decode($response, TRUE);

			return $responseData;
		}
	}
?>