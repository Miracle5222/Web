
<?php require_once('../../header.php');?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <h1 class=" text-center text-info mt-5">Inheritance</h1>
        
        </div>
    </div>
    <div class="row">
        
        <div class="col-md6">
            <h2 class="bt-5 text-center m-5">Output</h2>
            <?php

class Person{

    public $name;
    public $annual_salary;
    public $employee_id;

    public function __construct($name,$annual_salary,$employee_id){
        $this->name = $name;
        $this->annual_salary = $annual_salary;
        $this->employee_id = $employee_id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->$name;
    }

    public function setAnnual_salary($annual_salary){
        $this->annual_salary = $annual_salary;
    }

    public function getAnnual_salary(){
        return $this->$annual_salary;
    }

    public function setEmployee_id($employee_id){
        $this->employee_id = $employee_id;
    }

    public function getEmployee_id(){
        return $this->$employee_id;
    }

    public function person_info(){
        echo $this->employee_id . "<br>" . $this->name . "<br>" . $this->annual_salary . "<br>";
    }
}

class Employee extends Person{
    
    public $department;
    public $position;

    public function setDepartment($department){
        $this->department = $department;
    }

    public function getDepartment(){
        return $this->$department;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    public function getPosition(){
        return $this->$position;
    }

    public function person_info(){
        
        parent::person_info();
        echo $this->position . " , " . $this->department;
    }
}


?>

            

  <div class="bg-light p-5 text-left">
    <?php
        
        $employee = new Employee("Roneil Bansas","2000000000","2018-1361");
        $employee->setDepartment("GameDevelopmentTeam");
        $employee->setPosition("Programmer");
        echo $employee->person_info();
    ?>
  </div>

    <?php
?>
        </div>
        <div class="col-md6">
            <div style="position:relative;" class="text-center">
                <h2 class="bt-5 text-center m-5">Code</h2>   
                <button class="btn btn-outline-primary m-2 "  onclick="show()">Show Code</button>
                <button class="btn btn-outline-primary m-2 "  onclick="hide()">Hide Code</button>
        <pre class="bg-dark text-warning " style="visibility:hidden;opacity:0;" id="pre">
                


class Person{

    public $name;
    public $annual_salary;
    public $employee_id;

    public function __construct($name,$annual_salary,$employee_id){
        $this->name = $name;
        $this->annual_salary = $annual_salary;
        $this->employee_id = $employee_id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->$name;
    }

    public function setAnnual_salary($annual_salary){
        $this->annual_salary = $annual_salary;
    }

    public function getAnnual_salary(){
        return $this->$annual_salary;
    }

    public function setEmployee_id($employee_id){
        $this->employee_id = $employee_id;
    }

    public function getEmployee_id(){
        return $this->$employee_id;
    }

    public function person_info(){
        echo $this->employee_id . "<br>" . $this->name . "<br>" . $this->annual_salary . "<br>";
    }
}

class Employee extends Person{
    
    public $department;
    public $position;

    public function setDepartment($department){
        $this->department = $department;
    }

    public function getDepartment(){
        return $this->$department;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    public function getPosition(){
        return $this->$position;
    }

    public function person_info(){
        
        parent::person_info();
        echo $this->position . " , " . $this->department;
    }
}



              
                
        </pre>  
        </div>
        <script>
            function show(){
                document.getElementById("pre").style.visibility = "visible";
                document.getElementById("pre").style.opacity = 1;
                document.getElementById("pre").style.transition = "all .6s";
            }
            function hide(){
                document.getElementById("pre").style.visibility = "hidden";
                document.getElementById("pre").style.opacity = 0;
                document.getElementById("pre").style.transition = "all .6s";
            }
        </script>
    </div>

</div>


<?php require_once('../../footer.php');?>