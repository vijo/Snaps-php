<?php
	/*
	* Snaps-php
	* PHP server size script for self-hosting Gyazo applications.
	*
	* @version 1.0
	* @link https://github.com/1Conan/Snaps-php
	* @author 1Conan
	* @license http://opensource.org/licenses/MIT
	* @copyright 1Conan
	*/
	
	/* Configuration */
	define('F_PATH', 'i/'); // Set path for saving images (Include the trailing slash "/")
	define('D_NAME', 'http://localhost'); // Set domain name (Do not incldude the trailing slash "/")
	
	//Image Display
	if(!isset($_GET['md'])) {
		if(!isset($_GET['i']))
		$id = "unknown";
		else {
			$id = $_GET['i'];
			//For Security Purposes
			$id = str_replace('../','',$id);
			$id = str_replace('..\\','',$id);
			if(!file_exists(F_PATH.$id.'.png'))
			$id = "unknown";
		}
		
		header('Content-Type: image/png');
		$img = imagecreatefrompng(F_PATH.$id.".png");
		imagepng($img);
		imagedestroy($img);
		exit();
	} 
	
	//Image Upload
	else {
		if(isset($_FILES['imagedata']['tmp_name']) || isset($_POST['image_url'])) {
			$filename = substr(md5(rand().time()), 0 ,32);
			$name = F_PATH.$filename.'.png';
			$fname["get_image_url"] = D_NAME.'/i.php?i='.$filename;
			
			if(isset($_FILES['imagedata']['tmp_name'])) {
				fclose(fopen($name, 'w'));
				move_uploaded_file($_FILES['imagedata']['tmp_name'], $name);
				echo $fname["get_image_url"];
			} 
			
			else if(isset($_POST['image_url'])) {
				$imgData = str_replace(' ','+',$_POST['image_url']);
				$uf = fopen($name, 'w');
				fwrite($uf, base64_decode(substr($imgData,strpos($imgData,",")+1)));
				fclose($uf);
				
				header("Content-Type: application/json");
				echo str_replace("\\","", json_encode($fname));
			}
		}
	}	
	
	
?>				