<?php
    require_once("./employee.php");
    class Accounting extends Employee{
        function __construct($name, $salary){
            parent::__construct($name, "Account", $salary);
        }
        function description(){
            echo "data"."<br>";
        }
    }
?>