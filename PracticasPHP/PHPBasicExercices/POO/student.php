<?php
class Student{
    private $name;
    private $age;
    private $grade;
    
    public function __construct($name, $age, $grade)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> grade = $grade;
    }


}

class Classroom{
    private $students;

    public function __construct()
    {
    }
}
?>s