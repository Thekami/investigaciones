<?php  

	require_once "resources/utilities/Main.class.php";
    require_once "resources/utilities/DBConnection.class.php";

    

	Class Investigacion {


        public static function View($vista) {

            $response = json_encode(array(
                "view" => self::loadDataView($vista),
                "nav"  => self::loadDataNav()
            ));

            return json_decode($response);

        }

        private static function loadDataNav(){

            $consult = "SELECT titulo_corto titulo_tema, vista url FROM temas";
            $result  = DBConnection::query_object($consult);

            $html = "";

            foreach ($result as $key => $value) {
                $html .= '<li><a href="'.$value->url.'">'.$value->titulo_tema.'</a></li>';
            }

            return $html;
        }

        private static function loadDataView($vista){

            $consult = "SELECT T.titulo titulo_tema, T.key_words palabras, A.nombre autor, A.pagina FROM temas T JOIN autores A ON A.id = T.autor WHERE T.vista = '$vista'";
            $result  = DBConnection::query_single_object($consult);

            return $result;
        }

        public static function search($data){

            $consult = "SELECT * FROM temas WHERE key_word LIKE '%$data%'";
            $result  = DBConnection::query_object($consult);

            return $result;
        }



        

    }

?>