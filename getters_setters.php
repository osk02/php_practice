<!-- Getters -> used to access the value of private and protected property in a class -->
<!-- Setters -> used to modify the value of private and protected property in a class -->

<?php
    class Person {
        public $name;
        private $age;

        public function __construct($name) {
            $this->name = $name;
        }
        public function countDays() {
            return $this->age * 365;
        }
        public function getAge() {
            return $this->age;
        }
        public function setAge($age) {
            if($age < 18) {
                throw new Exception("Age should be greater than 18.");
            }
            $this->age = $age;
        }
    }
    $obj = new Person('John Doe');
?>
<html>
    <head>
        <title>Getters and Setters + Encapsulation</title>
    </head>
    <body>
        <h3>Name: <?php echo $obj->name; ?></h3>
        <?php $obj->setAge(21); ?>
        <h3>Age: <?php echo $obj->getAge(); ?></h3>
        <h3>You are <?php echo $obj->countDays(); ?> days old</h3>

        <!-- Cannot access the age variable anymore since it is private, it can be accessed or modified using getters and setters only -->
        <!-- $obj->age this is not valid -->
    </body>
</html>