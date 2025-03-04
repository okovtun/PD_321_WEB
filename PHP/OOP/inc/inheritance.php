<?php

class Human
{
	private $last_name;
	private $first_name;
	private $age;
	function get_last_name()
	{
		return $this->last_name;
	}
	function get_first_name()
	{
		return $this->first_name;
	}
	function get_age()
	{
		return $this->age;
	}
	function set_last_name($last_name)
	{
		$this->last_name = $last_name;
	}
	function set_first_name($first_name)
    { 
		$this->first_name = $first_name; 
	}
	function set_age($age)
	{
		$this->age = $age;
	}

	//				Constructors:
	function __construct($first_name, $last_name, $age)
	{
		$this->set_first_name($first_name);
		$this->set_last_name($last_name);
		$this->set_age($age);
		echo 'HConstructor<br>';
	}
	function __destruct()
	{
		echo 'HDestructor<br>';
	}

	function info(){}

	function __tostring()
	{
		return "{$this->first_name} {$this->last_name} {$this->age}";
	}
}

/////////////////////////////////////////////////////////////////////////

class Student extends Human
{
	private $speciality;
	private $group;
	private $rating;
	private $attendance;

	function get_speciality()
	{
		return $this->speciality;
	}
	function get_group()
    {
		return $this->group; 
	}
	function get_rating()
	{
		return $this->rating;
	}
	function get_attendence()
	{
		return $this->attendance;
	}
	function set_speciality($speciality)
	{
		$this->speciality = $speciality;
	}
	function set_group($group)
	{
		$this->group = $group;
	}
	function set_rating($rating)
	{
		$this->rating = $rating;
	}
	function set_attendance($attendance)
	{
        $this->attendance = $attendance;
	}

	//				Construct:
	function __construct($first_name, $last_name, $age, $speciality, $group, $rating, $attandance)
	{
		parent::__construct($first_name, $last_name, $age);
		$this->set_speciality($speciality);
		$this->set_group($group);
		$this->set_rating($rating);
		$this->set_attendance($attandance);
		echo 'SConstructor<br>';
	}
	function __destruct()
	{
		echo 'SConstructor<br>';
	}

	function info()
	{
		return "Group:{$this->get_group()}, Rating:{$this->get_rating()}, Attendance:{$this->get_attendence()}";
	}

	function __tostring()
	{
		echo '<pre>';
		//print_r(__CLASS__ . '<br>');
		//var_dump($this);
		echo '</pre>';
		return parent::__tostring() . " {$this->get_speciality()} {$this->get_group()} {$this->get_rating()} {$this->get_attendence()}";
	}
}
class Graduate extends Student
{
	private $subject;
	////////////////////////////
	function get_subject()
	{
		return $this->subject;
	}
	function set_subject($subject)
	{
		$this->subject=$subject;
	}
	//				Construct:
	function __construct($first_name, $last_name, $age, $speciality, $group, $rating, $attandance, $subject)
	{
		parent::__construct($first_name, $last_name, $age, $speciality, $group, $rating, $attandance);
		$this->set_subject($subject);
		echo '<pre>GConstructor</pre><br>';
	}
	function __destruct()
	{
		echo '<pre>GDestructor</pre><br>';
	}

	function info()
	{
		return parent::info() . " Subject:{$this->get_subject()}";
	}

	function __tostring()
	{
		return parent::__tostring() . " {$this->get_subject()}";
	}
}

class Teacher extends Human
{
	private $speciality;
	private $experience;
	////////////////////////////
	function get_speciality()
	{
		return $this->speciality;
	}
	function get_experience()
    {
		return $this->experience;
	}
	function set_speciality($speciality)
	{
		$this->speciality=$speciality;
	}
	function set_experience($experience)
	{
		$this->experience=$experience;
	}
	//				Construct:
	function __construct($first_name, $last_name, $age, $speciality, $experience)
	{
		parent::__construct($first_name, $last_name, $age);
		$this->set_speciality($speciality);
		$this->set_experience($experience);
		echo 'TConstructor<br>';
	}
	function __destruct()
	{
		echo 'TDestructor<br>';
	}

	function info()
	{
		return "Experience:{$this->get_experience()}";
	}

	function __tostring()
	{
		return parent::__tostring() . " {$this->speciality} {$this->experience}";
	}
}

?>