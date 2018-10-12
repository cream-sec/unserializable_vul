
<?php 
$a=isset($_GET["a"])?$_GET["a"]:'';
$b=isset($_GET["b"])?$_GET["b"]:'';
$c=isset($_GET["c"])?$_GET["c"]:'';
$d=isset($_GET["d"])?$_GET["d"]:'';
$e=isset($_GET['e'])?$_GET['e']:'';

if(preg_match('/php/i', $a)){
    die("This not allow pseudo protocol!");
}
if(preg_match('/\.\./', $a)){
    die("This also not allow!");
}

if((file_get_contents($a,'r')===$b)&&(file_get_contents($e,'r')==="I'm Administrator!")){
    echo "hello admin!<br>";
    if(preg_match("/flag/",$c)){
        echo "不能现在就给你flag哦";
        exit();
    }else{  
        include($c);
        if(preg_match('/base64/', $d)){
            die("No! you can't use it!");
        }
        $d = unserialize($d);
        echo $d;
    }  
}else{
    echo "you are not admin ! <br>";
}