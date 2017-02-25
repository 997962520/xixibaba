<?php
class database{
	private $mysql_db,
			$mysql_host,
			$mysql_password,
			$mysql_user,
			$mysql_port,
			$connect;
	public function __construct(){
		$this->mysql_host = 'localhost';
		$this->mysql_db = 'xixibaba';
		$this->mysql_user = 'root';
		$this->mysql_password = '123456';//你的MySQL密码
		$this->mysql_port = 3306;
		$this -> connect_to_db();
	}
	public function __destruct(){
		$this -> connect = NULL;
	}
	public function connect_to_db(){
		$dns = 'mysql:host='.$this->mysql_host.";port=".$this->mysql_port.";dbname=".$this->mysql_db;
		try{
			$this->connect = new PDO($dns, $this->mysql_user,$this->mysql_password);
		}
		catch (PDOException $e) {
    		print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}
	}

	/**
	 * 插入数据的方法
	 * @param $table_name 表名
	 * @param $values 字段名和值的数组
	 */
	public function insert_to_db($table_name,$values){

		extract($values);

		switch ($table_name){
			case 'user':
				$this->insert_data_to_user($name,$password,$email,$phone,$location);
				break;
			case 'course':
				$this->insert_data_to_course($name,$time,$directory,$play_count,$image,$amount,$content);
				break;
			case 'class':
				$this->insert_data_to_class($name);
				break;
			case 'course_class':
				$this->insert_data_to_course_class($course_id,$class_id);
				break;
			case 'video':
				$this->insert_data_to_video($name);
				break;
			case 'class_video':
				$this->insert_data_to_class_video($class_id,$video_id);
				break;
			case 'comment':
				$this->insert_data_to_comment($user_id,$course_id,$content,$time,$approve,$disapprove);
				break;
			case 'collection':
				$this->insert_data_to_collection($course_id,$user_id);
				break;

		}

	}

	/**
	 * 数据库查询方法
	 * @param $table 表名
	 * @param $field 要查询的字段
	 * @param $keys  查询条件的数组
	 * @return mixed 返回查询结果
	 */
	public function select_data($table,$field,$keys)
	{
		$keys_index = array_keys($keys);
		$str = 'WHERE ';
		foreach ($keys_index as $key){
			$str = $str."$key like '$keys[$key]' AND ";
		}
		
		$str = substr($str,0,-4);
		
		$result = $this->connect->prepare("SELECT $field FROM $table ".$str);
		$result->execute();
		$value = $result->fetchAll(PDO::FETCH_ASSOC);
		return $value;
	}

	public function database_do($command)
	{
		$this->connect->exec($command);
	}
	public function database_get($command)
	{
		$result = $this->connect->prepare($command);
		$result->execute();
		$value = $result->fetchAll(PDO::FETCH_ASSOC);
		return $value;
	}

	private function insert_data_to_user($name,$password,$email,$phone,$location,$introduction){
		$this->connect->exec("INSERT INTO user(name,password,email,phone,location,introduction) VALUES".
			"('$name','$password','$email','$phone','$location','$introduction')");
	}
	private function insert_data_to_course($name,$time,$directory,$play_count,$image,$amount,$content){
		$this->connect->exec("INSERT INTO course(name,time,directory,play_count,image,amount,content) VALUES".
			"('$name','$time','$directory','$play_count','$image','$amount','$content')");
	}
	private function insert_data_to_class($name){
		$this->connect->exec("INSERT INTO class(name) VALUES".
			"('$name')");
	}
	private function insert_data_to_course_class($course_id,$class_id){
		$this->connect->exec("INSERT INTO course_class(course_id,class_id) VALUES".
			"('$course_id','$class_id')");
	}
	private function insert_data_to_video($name){
		$this->connect->exec("INSERT INTO video(name) VALUES".
			"('$name')");
	}
	private function insert_data_to_class_video($class_id,$video_id){
		$this->connect->exec("INSERT INTO class_video(class_id,video_id) VALUES".
			"('$class_id','$video_id')");
	}
	private function insert_data_to_comment($user_id,$course_id,$content,$time,$approve,$disapprove){
		$this->connect->exec("INSERT INTO comment(user_id,course_id,content,time,approve,disapprove) VALUES".
			"('$user_id','$course_id','$content','$time','$approve','$disapprove')");
	}
	private function insert_data_to_collection($course_id,$user_id){
		$this->connect->exec("INSERT INTO collection(course_id,user_id) VALUES".
			"('$course_id','$user_id')");
	}
}

?>
