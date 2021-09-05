<?php
include("logging.php");
class ReadFile{
	public function __tostring(){
		return file_get_contents($this->filename);
	}
}	

class User
{
	public $username;
	public $isAdmin;
	
	public function PrintData(){
		if ($this->isAdmin){
			echo $this->username . " is an admin<br/>";
		} else {
			echo $this->username . " is NOT an admin<br/>";
		}
	}
}
//$obj = new User();
//$obj->username = "quantt";
//$obj->isAdmin = False;
//die($_GET['ippsec']);
$obj=unserialize($_GET["ippsec"]);
//$obj->PrintData();
var_dump($obj);
?>
