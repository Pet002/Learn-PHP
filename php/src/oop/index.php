<?php
    require_once("./accounting.php");
    require_once("./programmer.php");
    require_once("./sale.php");

    // create Object from class Employee
    $emp1 = new Accounting("A", 20000);
    // $emp1 -> setName("A");
    // $emp1 -> setDepartment("Account");
    // $emp1 -> setSalary(88000);
    $emp1 -> showData();


    $emp2 = new Programmer("B", 15000);
    // $emp2 -> setName("B");
    // $emp2 -> setDepartment("Programmer");
    // $emp2 -> setSalary(15000);
    $emp2 -> description();
    $emp2 -> showData();

    $emp3 = new Sale("C", 100000);
    // $emp2 -> setName("B");
    // $emp2 -> setDepartment("Programmer");
    // $emp2 -> setSalary(15000);
    $emp3 -> showData();

?>