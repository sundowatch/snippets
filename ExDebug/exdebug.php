<?php 

class ExDebug{
    function __construct(){
        $this->echo = true;
        $this->exit = true;
    }
    public function print($varArr=[], $exit=true){
        if(is_array($varArr)){
            foreach($varArr AS $key=>$var){
                if($this->echo){
                    echo '<b style="font-size: 2rem; width:100%; border-bottom: 1px solid #222;">'.$key.'</b>';
                    echo '<pre>' . var_export($var, true) . '</pre>';
                }
            }
        } elseif(is_string($varArr)){
            if($this->echo){
                echo $varArr;
            }
        } else{
            if($this->echo){
                echo '<pre>' . var_export($varArr, true) . '</pre>';
            }
        }
        if($exit && $this->exit){
            exit();
        }
    }
}

?>