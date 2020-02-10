<?php
class Karyawan{
	public $name;
	public $title;
	public $salary;

	function set_name($name){
		$this->name = $name;
	}
	function get_name() {
    return $this->name;
  	}

  	function set_title($title){
		$this->title = $title;
	}
	function get_title() {
    return $this->title;
  	}
  	function set_salary($salary){
		$this->salary = $salary;
	}
	function get_salary() {
    return $this->salary;
  	}
}

$dewi = new Karyawan();
$dewi->set_name('Dewi');
$dewi->set_title('Marketing');
$dewi->set_salary('500.000');

echo $dewi->get_name();
echo "<br>";
echo $dewi->get_title();
echo "<br>";
echo $dewi->get_salary();
?>