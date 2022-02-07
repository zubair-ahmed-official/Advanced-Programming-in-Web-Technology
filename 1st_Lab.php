<html>
<body>
&nbsp;
<h1 style="color:blue">Students Information</h1>
<hr>
<?php
error_reporting(0);

class Student
{
	public $s1 ;
	public $d1 ;
	
	public $s2 ;
	public $d2 ;
	
	public $s3 ;
	public $d3 ;
	
	
	public function __construct($s1, $d1, $s2, $d2, $s3, $d3) 
	{
    $this->s1 = $s1;
    $this->d1 = $d1;
	
	$this->s2 = $s2;
    $this->d2 = $d2;
	
	$this->s3 = $s3;
    $this->d3 = $d3;
	}
	
}

class Department extends Student
{
	public function __construct() 
	{
    $this->s1 = $s1;
    $this->d1 = $d1;
	
	$this->s2 = $s2;
    $this->d2 = $d2;
	
	$this->s3 = $s3;
    $this->d3 = $d3;
	}
	
	public function stds($s1, $d1, $s2, $d2,$s3, $d3)
	{
	$students = array(
		array($s1,$d1),
		array($s2,$d2),
		array($s3,$d3),
		);
	
	//Adding Students
	$students[] = array("Rakib - ","EEE");
	$students[] = array("Sakib - ","ETE");
	
	
	
	//Deleting Student
	$i=3;
	while($i<sizeof($students))
	{
		
	$students[$i] = $students[$i+1];
	$i++;
	}

	for($j=0;$j<sizeof($students);$j++)
	{
		for($k=0;$k<sizeof($students[$j]);$k++)
		echo "<b style='font-size:30px'>".$students[$j][$k]."</b>";
		echo "<br>" ;
		echo "<hr>" ;

	}
	
	}
	
}
	$st = new Department();
	$st -> stds("Zubair - ","CSE","Asif - ","EEE","Saad - ","BBA");
?>
</body>
</html>