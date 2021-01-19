<?php 

class XHR{
    
    public function __construct(){
		$this->URL;
		$this->debug = false;
    }
    
    public function post($data){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->URL);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec ($ch); 
		if (curl_errno($ch)) {
			$error_msg = curl_error($ch);
		}
		curl_close ($ch); 
		
		if($this->debug && isset($error_msg)){
			var_dump($error_msg);
		}

        return $result; 
	}
	
	public function get(){
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->URL);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec ($ch); 
		if (curl_errno($ch)) {
			$error_msg = curl_error($ch);
		}
		curl_close ($ch); 
		
		if($this->debug && isset($error_msg)){
			var_dump($error_msg);
		}

        return $result; 
	}
}


?>