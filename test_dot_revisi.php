<?php
class Company{
    public $name_comp;

    function setcompname($name_comp){
        $this->name1 = $name_comp;
    }
    function getcompname() {
    return $this->name1;
    }
}

class Department extends Company{
    public $name_dept;

    function setdeptname($name_dept){
        $this->name2 = $name_dept;
    }
    function getdeptname() {
    return $this->name2;
    }
}
class Employee extends Company{
    public $name_emp;
    public $title;
    public $salary;

    function set_name($name_emp){
        $this->name3 = $name_emp;
    }
    function get_name() {
    return $this->name3;
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
$dewi = new Employee();
$dewi->setcompname('Shopee');
// $dewi->setdeptname('penjualan');
$dewi->set_name('Firda');
$dewi->set_title('Perempuan');
$dewi->set_salary('5000000');

echo $dewi->getcompname();
echo "<br>";
// echo $dewi->getdeptname();
echo "<br>";
echo $dewi->get_name();
echo "<br>";
echo $dewi->get_title();
echo "<br>";
echo $dewi->get_salary();

?>