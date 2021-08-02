<?php

require_once('boardinghouse.php');
require_once('../../header.php');

class boarders {

    var $age;
    var $name;
    var $gender;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_age($age) {
        $this->age = $age;
    }

    function get_age() {
        return $this->age;
    }
    function set_gender($gender) {
        $this->gender = $gender;
    }

    function get_gender() {
        return $this->gender;
    }
    


}
  
?>
<title>Activity 1</title>

<div class="container my-5">

<div class="row">
      
</nav>
    </div>

<?php
    
   
$boardinghouse = new Boardinghouse();


$boarders = new Boarders();
$boarders->set_name('Roneil');
$boarders->set_age(20);
$boarders->set_gender('Male');
$boardinghouse->add_boarders($boarders);

$boarders1 = new Boarders();
$boarders1->set_name('Ivan');
$boarders1->set_age(20);
$boarders1->set_gender('Undecided');
$boardinghouse->add_boarders($boarders1);

$boarders2 = new Boarders();
$boarders2->set_name('Jumao As');
$boarders2->set_age(24);
$boarders2->set_gender('Gay');
$boardinghouse->add_boarders($boarders2);

$boarders3 = new Boarders();
$boarders3->set_name('Claire');
$boarders3->set_age(24);
$boarders3->set_gender('Lesbian');
$boardinghouse->add_boarders($boarders3);

$boarders4 = new Boarders();
$boarders4->set_name('Leo');
$boarders4->set_age(22);
$boarders4->set_gender('Bisexual');
$boardinghouse->add_boarders($boarders4);
?>
    <div class="row">
        <div class="col-md-6 mt-5">
            <?php
                echo "<h5 class='text-danger'>" . "Number of boarders in boarding house:" . " " . $boardinghouse->number_of_boarders() . "</h5>";

                $boardinghouse->show_boarders();
            ?>
        </div>
    </div>
    <pre>
    
 boardinghouse.php
 
 ------------------------------------------------------------------------
 require_once('boarders.php');

class Boardinghouse {

    
    var $boarders = array();

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
      
    th scope="col">Name</th>
      
    /tr>
  /thead>';
        foreach($this->boarders as $boarder) {
            echo "tbody>tr>td>". $boarder->get_name()  . "</td></tr></tbody>"; 
        }
        echo "/table>";
    }

}

       
 
boarders.php
 
 ------------------------------------------------------------------------
      
require_once('boardinghouse.php');
require_once('../header.php');

class boarders {

    var $age;
    var $name;
    var $gender;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_age($age) {
        $this->age = $age;
    }

    function get_age() {
        return $this->age;
    }
    function set_gender($gender) {
        $this->gender = $gender;
    }

    function get_gender() {
        return $this->gender;
    }
    


}

   
$boardinghouse = new Boardinghouse();


$boarders = new Boarders();
$boarders->set_name('Roneil');
$boarders->set_age(20);
$boarders->set_gender('Male');
$boardinghouse->add_boarders($boarders);

$boarders1 = new Boarders();
$boarders1->set_name('Ivan');
$boarders1->set_age(20);
$boarders1->set_gender('Undecided');
$boardinghouse->add_boarders($boarders1);

$boarders2 = new Boarders();
$boarders2->set_name('Jumao As');
$boarders2->set_age(24);
$boarders2->set_gender('Gay');
$boardinghouse->add_boarders($boarders2);

$boarders3 = new Boarders();
$boarders3->set_name('Claire');
$boarders3->set_age(24);
$boarders3->set_gender('Lesbian');
$boardinghouse->add_boarders($boarders3);

$boarders4 = new Boarders();
$boarders4->set_name('Leo');
$boarders4->set_age(22);
$boarders4->set_gender('Bisexual');
$boardinghouse->add_boarders($boarders4); 
    </pre>
<?php

require_once('../footer.php');
?>

   
 
 
       
 