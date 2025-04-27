<?php
class Teacher{
    public function questionPapers(){
        echo "Question Papers for Students";
    }
    private function questionPapers1(){
        //echo "Question Papers for class 10th students";
        return true;
    }
    function exam(){
       // $this->questionPapers1();
       if($this->questionPapers1()==true){
        echo "Question Papers for class 10th students";
       }else {
        echo "Question Papers for class 12th students";
       }
    }

    protected function studentMarks(){
        echo " All Students Marks";
    }


}

class Management extends Teacher{
    function reviewExam(){
        $this->studentMarks();
    }
    
}

$teacher1 = new Teacher();
$teacher1->questionPapers();
echo "<br>";
$teacher1->exam();
echo "<br>";

echo "<br>";
$management1 = new Management();
$management1->reviewExam();

?>