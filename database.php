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
		$this->mysql_password = '';//你的MySQL密码
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
				$this->insert_data_to_user($name,$password,$email,$phone,$location,$introduction);
				break;
			case 'course':
				$this->insert_data_to_course($name,$time,$directory,$play_count,$image,$content,$approve,$disappove,$type);
				break;
			case 'video':
				$this->insert_data_to_video($name);
				break;
			case 'pdf':
				$this->insert_data_to_pdf($name);
				break;
			case 'course_video':
				$this->insert_data_to_course_video($course_id,$video_id);
				break;
			case 'course_pdf':
				$this->insert_data_to_course_pdf($course_id,$pdf_id);
				break;
			case 'comment':
				$this->insert_data_to_comment($user_id,$course_id,$content,$time,$approve,$disapprove);
				break;
			case 'collection':
				$this->insert_data_to_collection($course_id,$user_id);
				break;
			case 'history':
				$this->insert_data_to_history($course_id,$user_id,$time);
				break;
			case 'schedule':
				$this->insert_data_to_schedule($day1_1_course_id,$day1_2_course_id,$day1_3_course_id,
					$day2_1_course_id,$day2_2_course_id,$day2_3_course_id,
					$day3_1_course_id,$day3_2_course_id,$day3_3_course_id,
					$day4_1_course_id,$day4_2_course_id,$day4_3_course_id,
					$day5_1_course_id,$day5_2_course_id,$day5_3_course_id,
					$day6_1_course_id,$day6_2_course_id,$day6_3_course_id,
					$day7_1_course_id,$day7_2_course_id,$day7_3_course_id);
				break;
			case 'user_schedule':
				$this->insert_data_to_user_schedule($schedule_id,$user_id);
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
	private function insert_data_to_course($name,$time,$directory,$play_count,$image,$content,$approve,$disapprove,$type){
		$this->connect->exec("INSERT INTO course(name,time,directory,play_count,image,content,approve,disapprove,type) VALUES".
			"('$name','$time','$directory','$play_count','$image','$content'.'$approve','$disapprove','$type')");
	}
	private function insert_data_to_video($name){
		$this->connect->exec("INSERT INTO video(name) VALUES".
			"('$name')");
	}
	private function insert_data_to_pdf($name){
		$this->connect->exec("INSERT INTO pdf(name) VALUES".
			"('$name')");
	}
	private function insert_data_to_course_video($course_id,$video_id){
		$this->connect->exec("INSERT INTO course_video(course_id,video_id) VALUES".
			"('$course_id','$video_id')");
	}
	private function insert_data_to_course_pdf($course_id,$pdf_id){
		$this->connect->exec("INSERT INTO course_pdf(course_id,pdf_id) VALUES".
			"('$course_id','$pdf_id')");
	}
	private function insert_data_to_comment($user_id,$course_id,$content,$time,$approve,$disapprove){
		$this->connect->exec("INSERT INTO comment(user_id,course_id,content,time,approve,disapprove) VALUES".
			"('$user_id','$course_id','$content','$time','$approve','$disapprove')");
	}
	private function insert_data_to_collection($course_id,$user_id){
		$this->connect->exec("INSERT INTO collection(course_id,user_id) VALUES".
			"('$course_id','$user_id')");
	}
	private function insert_data_to_history($course_id,$user_id,$time){
		$this->connect->exec("INSERT INTO history(course_id,user_id,time) VALUES".
			"('$course_id','$user_id','$time')");
	}
	private function insert_data_to_schedule($day1_1_course_id,$day1_2_course_id,$day1_3_course_id,
					$day2_1_course_id,$day2_2_course_id,$day2_3_course_id,
					$day3_1_course_id,$day3_2_course_id,$day3_3_course_id,
					$day4_1_course_id,$day4_2_course_id,$day4_3_course_id,
					$day5_1_course_id,$day5_2_course_id,$day5_3_course_id,
					$day6_1_course_id,$day6_2_course_id,$day6_3_course_id,
					$day7_1_course_id,$day7_2_course_id,$day7_3_course_id){
		$this->connect->exec("INSERT INTO schedule(day1_1_course_id,day1_2_course_id,day1_3_course_id,day2_1_course_id,day2_2_course_id,day2_3_course_id,day3_1_course_id,day3_2_course_id,day3_3_course_id,day4_1_course_id,day4_2_course_id,day4_3_course_id,day5_1_course_id,day5_2_course_id,day5_3_course_id,day6_1_course_id,day6_2_course_id,day6_3_course_id,day7_1_course_id,day7_2_course_id,day7_3_course_id) VALUES".
			"($day1_1_course_id','$day1_2_course_id','$day1_3_course_id','$day2_1_course_id','$day2_2_course_id','$day2_3_course_id','$day3_1_course_id','$day3_2_course_id','$day3_3_course_id','$day4_1_course_id','$day4_2_course_id','$day4_3_course_id','$day5_1_course_id','$day5_2_course_id','$day5_3_course_id','$day6_1_course_id','$day6_2_course_id','$day6_3_course_id','$day7_1_course_id','$day7_2_course_id','$day7_3_course_id')");
	}
	private function insert_data_to_user_schedule($schedule_id,$user_id){
		$this->connect->exec("INSERT INTO user_schedule(schedule_id,user_id) VALUES".
			"('$schedule_id','$user_id')");
	}
}

?>
