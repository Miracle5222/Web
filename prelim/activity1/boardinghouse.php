<?php

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
      echo ' <table class="table table-striped table-dark my-5">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      
    </tr>
  </thead>';
        foreach($this->boarders as $boarder) {
            echo "<tbody><tr><td>". $boarder->get_name()  . "</td></tr></tbody>"; 
        }
        echo "</table>";
    }

}
