<?php
interface Year_01{
    public function book_order();
    public function name_list();
    public function marks_list();
}

class Main_school implements Year_01{
 public string $stu_name;
 public string $std_city;
 private int $stu_age;
 public string $stu_studing_year;

 public function __construct(){

 }
public function setAge($age){
    $this->stu_age = $age;
}

public function getAge(){
    return $this->stu_age;
}


 public function book_order(){

 }

 public function name_list(){

 }
 public function marks_list(){


 }

}

$student_vishal = new Main_school();

//comments made
// new line

?>

