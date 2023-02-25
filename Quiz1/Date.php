<?php
    namespace strToDate;
    class Dateformat{


        public static function getFormat($input){
            $orgDate = STRTOTIME($input);
            return date("m/d/Y", $orgDate);
        }
    };

?>
