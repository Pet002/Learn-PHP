<?php
abstract class Employee {
    private $name;
    private $department;
    private $salary;

    protected $company = "ไม่จำกัด";

    abstract public function description();


    // นิยาม Constructor
    function __construct($name, $department, $salary){
        // echo "สร้าง Object"."<br>";
        $this -> name = $name;
        $this -> department = $department;
        $this -> salary = $salary;
    }

    // นิยาม Destrcutor ทำงานลำดับสุดท้ายเมื่อถูกเรียกใช้
    function __destruct(){
        echo "DeStructor"."<br>";
    }

    public function setSalary($salary) {
        $this -> salary = $salary;
    }

    public function getSalary() {
        return $this -> salary;
    }

    public function setName($name) {
        $this -> name = $name;
    }

    public function getName(){
        return $this -> name;
    }

    public function setDepartment($department){
        $this -> department = $department;
    }

    public function getDepartment(){
        return $this -> department;
    }

    public function showData(){
        echo "พนักงาน = ". $this -> name . "<br>";
        echo "แผนก = ". $this -> department . "<br>";
        echo "เงินเดือน = ". $this -> salary . "<br>";
        echo "<hr>";
    }



}// จบการทำงาน CLass

?>