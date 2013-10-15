<html>
<head>
<title>Codeasearch.com - Tutorial - Php __set and __get magic method</title>
</head>
<body>
<?php
class push {
    public $result = '';
     
    function setData() {
        $this->result .= ' to codeasearch.com '.date("Y-m-d");
    }
     
    function getData() {
        echo $this->result;
    }
	
	// writing the data using __set magic method
    function __set($name,$value) {
        $this->result = $value;
        $this->$name();
    }   
     
    // reading the data using __get magic method
    function __get($name) {
        $this->$name();
    }   
}

// creating the object 
$obj = new push;
 
// setting the value
$obj->setData = 'Welcome ';
 
// getting the data
$obj->getData;
?>
</body>
</html>