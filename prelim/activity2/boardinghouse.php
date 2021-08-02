<?php

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
    function set_bhname($bhname) {
        $this->bhname = $bhname;
    }

    function get_bhname() {
        return $this->bhname;
    }


    function add_boarders(Boarders $boarder) {
        array_push($this->boarders, $boarder);
    }

    function number_of_boarders() {
        return sizeof($this->boarders);
    }

    function show_boarders() {
      echo ' <table class="table table-striped table-dark my-5">
  <thead>
    <tr>
      
      <th scope="col">FirstName</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>';
        foreach($this->boarders as $boarder) {
            echo "<tbody><tr><td>". $boarder->get_name() . "</td>" . "<td> " . $boarder->get_age() .  "</td> " . "<td>" . $boarder->get_gender() . "</td></tr></tbody>"; 
        }
        echo "</table>";
    }

}
