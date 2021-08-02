<?php require_once('../../header.php');?>


<div class="container">
<div class="row">
        <div class="col-md-12">
        
        <h1 class=" text-center text-info mt-5">Poloymorphism & Inheritance</h1>
        
        </div>
    </div>
    <div class="row">
        <div class="col-md6">
            <h1 class="bt-5 text-center m-5">Output</h1>
            
        <?php
interface Vehicle{

    public function showdetails();
    public function gofast();
    public function goslow();
    public function __construct($model,$name);
    
}
    
class Car implements Vehicle{
    public $model;
    public $name;
    
    public function __construct($model, $name){
        echo "super class called" . "<br>";
        $this->model = $model;
        $this->name = $name;
        
    }
    
    public function gofast(){
        echo "faster" . "<br>";
    }
    
    public function goslow(){
        echo "slower" . "<br>";
    }
    public function showdetails(){
        echo $this->model . "<br>";
        echo $this->name . "<br>";
    }
}
    
class Bike implements Vehicle{
    
    public $model;
    public $name;
    
    public function __construct($model, $name){
        echo "super class called" . "<br>";
        $this->model = $model;
        $this->name = $name;
    }
    public function gofast(){
        echo "fast" . "<br>";
    }
    
    public function goslow(){
        echo "slow" . "<br>";
    }
    
    public function showdetails(){
        echo $this->model . "<br>";
        echo $this->name . "<br>";
    }
}
    
class SuperCar extends Car{
    
    public function gofast(){
        echo "fastest -method gofast() overridden" . "<br>";
    }
    
    public function goslow(){
        echo "slowest -method goslow() overridden" . "<br>";
    }
    
    public function showdetails(){
        echo $this->model . "<br>";
        echo $this->name . "<br>";
        
    }
}
    
class ParentClass{
    
    public function main(){
    
        $b = new Bike("M-0421","Honda");
    
        $b->gofast();
        $b->goslow();
        $b->showdetails();
        echo "<br>";

        $b1 = new Bike("Z-D424","Yamaha");
        $b1->gofast();
        $b1->goslow();
        $b1->showdetails();
        echo "<br>";
        
    
        $c = new Car("M-5245v", "Bugatti Veron");
        
        $c->gofast();
        $c->goslow();
        $c->showdetails();

        echo "<br>";
        $c1 = new Car("M-ZEUS", "Ford");
        $c1->gofast();
        $c1->goslow();
        $c1->showdetails();
        echo "<br>";
    
        $s = new SuperCar("M-V042", "Lamborghini-Venom", "Green");
        $s->gofast();
        $s->goslow();
        $s->showdetails();
    }
}
  ?>  
  <div class="bg-light p-5 text-left">
    <?php
        $parentclass = new ParentClass();
        $parentclass->main()
        ?>
  </div>

    <?php
?>
        </div>
        <div class="col-md6">
            <div style="position:relative;" class="text-center">
                <h1 class="bt-5 text-center m-5">Code</h1>   
                <button class="btn btn-outline-primary m-2 "  onclick="show()">Show Code</button>
                <button class="btn btn-outline-primary m-2 "  onclick="hide()">Hide Code</button>
        <pre class="bg-dark text-warning " style="visibility:hidden;opacity:0;" id="pre">
                
interface Vehicle{
                
    public function showdetails();
        public function gofast();
        public function goslow();
        public function __construct($model,$name);
                    
    }
                    
class Car implements Vehicle{
    public $model;
    public $name;
    
    public function __construct($model, $name){
        echo "super class called" . "<br>";
        $this->model = $model;
        $this->name = $name;
        
    }
    
    public function gofast(){
        echo "faster" . "<br>";
    }
    
    public function goslow(){
        echo "slower" . "<br>";
    }
    public function showdetails(){
        echo $this->model . "<br>";
        echo $this->name . "<br>";
    }
}
    
class Bike implements Vehicle{
    
    public $model;
    public $name;
    
    public function __construct($model, $name){
        echo "super class called" . "<br>";
        $this->model = $model;
        $this->name = $name;
    }
    public function gofast(){
        echo "fast" . "<br>";
    }
    
    public function goslow(){
        echo "slow" . "<br>";
    }
    
    public function showdetails(){
        echo $this->model . "<br>";
        echo $this->name . "<br>";
    }
}
    
class SuperCar extends Car{
    
    public function gofast(){
        echo "fastest -method gofast() overridden" . "<br>";
    }
    
    public function goslow(){
        echo "slowest -method goslow() overridden" . "<br>";
    }
    
    public function showdetails(){
        echo $this->model . "<br>";
        echo $this->name . "<br>";
        
    }
}
    
class ParentClass{
    
    public function main(){
    
        $b = new Bike("M-0421","Honda");
    
        $b->gofast();
        $b->goslow();
        $b->showdetails();
        echo "<br>";

        $b1 = new Bike("Z-D424","Yamaha");
        $b1->gofast();
        $b1->goslow();
        $b1->showdetails();
        echo "<br>";
        
    
        $c = new Car("M-5245v", "Bugatti Veron");
        
        $c->gofast();
        $c->goslow();
        $c->showdetails();

        echo "<br>";
        $c1 = new Car("M-ZEUS", "Ford");
        $c1->gofast();
        $c1->goslow();
        $c1->showdetails();
        echo "<br>";
    
        $s = new SuperCar("M-V042", "Lamborghini-Venom", "Green");
        $s->gofast();
        $s->goslow();
        $s->showdetails();
    }
}
    
    $parentclass = new ParentClass();
    $parentclass->main()

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