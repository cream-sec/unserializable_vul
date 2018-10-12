<?php  
$txt = $_GET["txt"];  
$file = $_GET["file"];  
$password = $_GET["password"];  
  
if(isset($txt)&&(file_get_contents($txt,'r')==="ichunqiu")){  
    echo "hello friend!<br>";  
    if(preg_match("/flag/",$file)){ 
		echo "不能现在就给你flag哦";
        exit();  
    }else{  
        include($file);   
        $password = unserialize($password);  
        echo $password;  
    }  
}else{  
    echo "you are not the number of bugku ! ";  
}  
  
?>  
  
<!--  
$txt = $_GET["txt"];  
$file = $_GET["file"];  
$password = $_GET["password"];  
  
if(isset($txt)&&(file_get_contents($txt,'r')==="ichunqiu")){  
    echo "hello friend!<br>";  
    if(preg_match("/flag/",$file)){ 
		echo "不能现在就给你flag哦";
        exit();  
    }else{  
        include($file);   
        $password = unserialize($password);  
        echo $password;  
    }  
}else{  
    echo "you are not the number of bugku ! ";  
}  
  
 -->  