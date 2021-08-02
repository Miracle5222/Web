
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
</head>
<body>
    <?php require_once('../../header.php');?>
<div class="container-fluid ">

<div class = "container ">
    <div class="jumbotron mt-5 bg-info">
        <div class="row">
            <div class="col-md-4">
                <table>
                    <tr>
                        <td class="text-white"><label for="name">Name</label></td>
                        <td><input type="text" class="form-control text-center"placeholder="Name" name="name" id="name"></td>
                    </tr>
                    <tr>
                        <td class="text-white"><label for="age">Age</label></td>
                        <td><input type="text" class="form-control text-center" name="age" placeholder="Age" id="age"></td>
                    </tr>
                    <tr>
                        <td class="text-white"><label for="gender">Gender</label></td>
                        <td><input type="text"class="form-control text-center" name="gender" placeholder="Gender" id="gender"></td>
                    </tr>
                    <tr>
                    <td></td>
                             
                        <td ><br><input type="button" id="addBtn" class="btn btn-warning" value="Add Boarders"></td>
                    </tr>
                </table>
            </div>
           
        </div>
    </div>
    <div class="jumbotron bg-dark ">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-white">Boarders: </h4>
                <ul class="list-group" id="boarders">
    
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
    <script>

        class Boardinghouse {

            constructor() {
                this.color = "red";
                this.boarders = [];
            }

            set_color(color) {
                this.color = color;
            }

            get_color() {
                return this.color;
            }

            add_boarders(boarders) {
                this.boarders.push(boarders);
            }

            get_boarders() {
                var html = '';
               
                this.boarders.forEach(boarders => {
                    html += '<li class="list-group-item list-group-item-info text-dark">' + boarders.get_name() + ', ' + boarders.get_age() + ', ' + boarders.get_gender() + '</li>';
                });
                return html;
            }

            get_boarder(index) {
                var boarders = this.boarders[index];
                console.log(boarders.get_name() + ', ' + boarders.get_age(), + boarders.get_gender());
            }
        }

        class Boarders {

            constructor(name='', age='', gender='') {
                this.name = name;
                this.age = age;
                this.gender = gender;
            }

            set_age(age) {
                this.age = age;
            }

            set_name(name) {
                this.name = name;
            }
            set_gender(gender) {
                this.gender = gender;
            }

            get_age() {
                return this.age;
            }
            get_gender() {
                return this.gender;
            }
            get_name() {
                return this.name;
            }

        }
//basket-boardinghouse
        var boardinghouse = new Boardinghouse();
        var btnAdd = document.getElementById('addBtn');
        

        btnAdd.addEventListener('click', addTobh);
        function addTobh() {
            var name = document.getElementById('name');
            var age = document.getElementById('age');
            var gender = document.getElementById('gender');
            var boarders = new Boarders(name.value, age.value, gender.value);
            boardinghouse.add_boarders(boarders);
            
            document.getElementById('boarders').innerHTML = boardinghouse.get_boarders();
           
            
        }

    </script>

<?php require_once('../../footer.php');?>
<pre>
 <script>

        class Boardinghouse {

            constructor() {
                this.color = "red";
                this.boarders = [];
            }

            set_color(color) {
                this.color = color;
            }

            get_color() {
                return this.color;
            }

            add_boarders(boarders) {
                this.boarders.push(boarders);
            }

            get_boarders() {
                var html = '';
               
                this.boarders.forEach(boarders => {
                    html += '<li class="list-group-item list-group-item-info text-dark">' + boarders.get_name() + ', ' + boarders.get_age() + ', ' + boarders.get_gender() + '</li>';
                });
                return html;
            }

            get_boarder(index) {
                var boarders = this.boarders[index];
                console.log(boarders.get_name() + ', ' + boarders.get_age(), + boarders.get_gender());
            }
        }

        class Boarders {

            constructor(name='', age='', gender='') {
                this.name = name;
                this.age = age;
                this.gender = gender;
            }

            set_age(age) {
                this.age = age;
            }

            set_name(name) {
                this.name = name;
            }
            set_gender(gender) {
                this.gender = gender;
            }

            get_age() {
                return this.age;
            }
            get_gender() {
                return this.gender;
            }
            get_name() {
                return this.name;
            }

        }
//basket-boardinghouse
        var boardinghouse = new Boardinghouse();
        var btnAdd = document.getElementById('addBtn');
        

        btnAdd.addEventListener('click', addTobh);
        function addTobh() {
            var name = document.getElementById('name');
            var age = document.getElementById('age');
            var gender = document.getElementById('gender');
            var boarders = new Boarders(name.value, age.value, gender.value);
            boardinghouse.add_boarders(boarders);
            
            document.getElementById('boarders').innerHTML = boardinghouse.get_boarders();
           
            
        }

    </script>
</pre>