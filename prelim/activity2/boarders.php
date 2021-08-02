<link rel="stylesheet" href="../style.css">
<title>Activity 2</title>
<?php

require_once('boardinghouse.php');
require_once('../../header.php');

class boarders {

    var $name;
    var $age;
    var $gender;


    function __construct($name='', $age='', $gender='') {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    

    function get_name() {
        return $this->name;
    }


    function get_age() {
        return $this->age;
    }
    

    function get_gender() {
        return $this->gender;
    }
    


}
  
?>

<div class="container my-5">
  <div class="row">
       
    </div>
<?php
    
    $boarders1 = new Boarders("Roneil", 29, "Male");
    $boarders2 = new Boarders("Ranin", 19, "Bisexual");
    $boarders3 = new Boarders("JumaoAs", 24, "Tumboy");
    $boarders = array($boarders1, $boarders2, $boarders3);
    
    $boardinghouse = new Boardinghouse('Tigol-Abalos', 35, $boarders);
    $boardinghouse->number_of_boarders();
?>
    <div class="row">
        <div class="col-md-6 mt-5">
            <?php
                echo "<h5 class='text-danger'>" . "Number of boarders in boarding house:" . " " . $boardinghouse->number_of_boarders() . "</h5>";

                $boardinghouse->show_boarders();
            ?>
        </div>
    </div>
<?php

require_once('../../footer.php');
?>
<pre>
    
   
 boardinghouse.php
 
 ------------------------------------------------------------------------
 require_once('boarders.php');

class Boardinghouse {

    
    var $bhname;
    var $boarders = array();
    var $capacity;

    function __construct($bhname='', $capacity='', $boarders=array()) {
        $this->bhname = $bhname;
        $this->capacity = $capacity;
        $this->boarders = $boarders;
    }


    function set_capacity($capacity) {
        $this->capacity = $capacity;
    }

    function get_capacity() {
        return $this->capacity;
    }

    function add_boarders(Boarders $boarder) {
        array_push($this->boarders, $boarder);
    }

    function number_of_boarders() {
        return sizeof($this->boarders);
    }

    function show_boarders() {
      echo ' table class="table table-striped table-dark my-5">
  thead>
    tr>
      
      th scope="col">FirstName</th>
        th scope="col">Age</th>
      th scope="col">Gender</th>
    /tr>
  /thead>';
        foreach($this->boarders as $boarder) {
            echo "tbody>tr>td>". $boarder->get_name() . "/td>" . "td> " . $boarder->get_age() .  "/td> " . "td>" . $boarder->get_gender() . "/td>/tr>/tbody>"; 
        }
        echo "/table>";
    }

}

       
 
boarders.php
 
 ------------------------------------------------------------------------
     
require_once('boardinghouse.php');
require_once('../../header.php');

class boarders {

    var $name;
    var $age;
    var $gender;


    function __construct($name='', $age='', $gender='') {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    

    function get_name() {
        return $this->name;
    }


    function get_age() {
        return $this->age;
    }
    

    function get_gender() {
        return $this->gender;
    }
    
    
div class="container my-5">
nav>
                ul>
                    li>a href="../index.php">Home/a></li>    
                /ul>
            /nav>
 
            $boarders1 = new Boarders("Roneil", 29, "Male");
    $boarders2 = new Boarders("Ranin", 19, "Bisexual");
    $boarders3 = new Boarders("JumaoAs", 24, "Tumboy");
    $boarders = array($boarders1, $boarders2, $boarders3);
    
    $boardinghouse = new Boardinghouse('Tigol-Abalos', 35, $boarders);
    $boardinghouse->number_of_boarders();
    div class="row">
        div class="col-md-6 mt-5">
          
                echo "h5 class='text-danger'>" . "Number of boarders in boarding house:" . " " . $boardinghouse->number_of_boarders() . "/h5>";

                $boardinghouse->show_boarders();
            ?>
        /div>
    /div>


require_once('../../footer.php');
 
   </pre>
 
 
       
 
</div>
