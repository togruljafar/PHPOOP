<?php

//ad soyad yas giris-bali uni fakulte ixtisas class
class Student
{
	private $name;
	private $surname;
	private $old;
	private $point;
	private $university;
	private $faculty;
	private $specialty;

    public function getData()
    {
        return $this->name = $name;
        return $this->surname = $surname;
        return $this->old = $old;
        return $this->point = $point;
        return $this->university = $university;
        return $this->faculty = $faculty;
        return $this->specialty = $specialty;
    }
    public function setData($name, $surname, $old, $point, $university, $faculty, $specialty)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->old = $old;
        $this->point = $point;
        $this->university = $university;
        $this->faculty = $faculty;
        $this->specialty = $specialty;
    }
    public function printData()
    {
    	echo 'Student: '.$this->name.' '.$this->surname.'<br/>';
    	echo 'Old: '.$this->old.'<br/>';
    	echo 'Points: '.$this->point.'<br/>';
    	echo 'University: '.$this->university.'<br/>';
    	echo 'Faculty: '.$this->faculty.'<br/>';
    	echo 'Specialty: '.$this->specialty;
    }

}

$student_data = new Student();
$student_data->setData('Togrul', 'Ceferli', 21, 497, 'Baki Dovlet Universiteti', 'Tarix', 'Amerkansunasliq');
$student_data->printData();
?>