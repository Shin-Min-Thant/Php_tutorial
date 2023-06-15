<?php 
try{
    echo 'This is try test';
    throw new Exception();
}catch(Exception $e){
    echo"This is catch expection";
}finally{
    echo"This is the end";
}
?>