<?php
	//Make sure no one tries to access this file directly

class parseTemplate {
	private $params;
	private $path = "templates/";
	private $separator = "\n";

    
    public function __construct() {
        $this->path = APS_PATH_TEMPLATES;
    }

	public function setParams($params) {
		$this->params = "";
		$this->params = $params;
	}
    
    public function parsePage($fileName) {
    	
    	$return='';
    	$file = @fopen($this->path.$fileName,"r");
    	if (!$file) {
			return false;
    	}
    	while (! feof($file)) {
    		$line = fgets($file,2048);
    		
    		//**Depreciated
    		//$return .= preg_replace('/\[%([\w\-]+?)%\]/e',"isset (\$this->params['\\1']) ? \$this->params['\\1'] : \"\"",$line);
    		$return .= preg_replace_callback( '/\[%([\w\-]+?)%\]/'
                    , function( $match ) { return $this->params[$match[1]];}
                    , $line 
                    ); 
    		
    	}
    	
    	//preg_replace_callback

    	return $return;
    }
    
    function parseBlock($str) {
    	
    	$return='';
    	if (!$str) {
			return false;
    	}
    	$expl = explode($this->separator,$str);
    	if(count($expl)) {
    		foreach ($expl as $line) {
	    		//$return .= preg_replace('/\[%([\w\-]+?)%\]/e',"isset (\$this->params['\\1']) ? \$this->params['\\1'] : \"\"",$line);
	    		$return .= preg_replace_callback( '/\[%([\w\-]+?)%\]/'
	    		    , function( $match ) { return $this->params[$match[1]];}
	    		    , $line
	    		 );
    		}
    	}
    	else {
    	    $return .= preg_replace_callback( '/\[%([\w\-]+?)%\]/'
    	        , function( $match ) { return $this->params[$match[1]];}
    	        , $line
    	        );
    	  //**Depreciated
    	  // $return .= preg_replace('/\[%([\w\-]+?)%\]/e',"isset (\$this->params['\\1']) ? \$this->params['\\1'] : \"\"",$str);
    	}
    	     
    	return $return;  
    }
    
}
?>
