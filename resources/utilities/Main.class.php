<?php  

	/**
	* 
	*/
	class Main{

		public static function log($texto) {
			$myfile = fopen("log.txt", "a") or die("Unable to open file!");

			$txt = "
			$texto\n";

			fwrite($myfile, $txt);
			fclose($myfile);
		
		}

        public static function DateTime(){
            $time = date('H:i:s', time());
            $date = date('d-m-Y');
            return array($time, $date);
        }
		
	}

?>