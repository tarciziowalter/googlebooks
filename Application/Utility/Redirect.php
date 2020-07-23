<?php 

namespace Application\Utility;

class Redirect
{
    
    public static function to($path=""){
        header("Location:".APP_PATH.$path);
        exit();
    }
    
}

?>