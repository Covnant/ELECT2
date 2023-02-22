<?php
    namespace strToDate;
    class Dateformat{


        public static function getFormat($input){
            $orgDate = STRTOTIME($input);
            return date("mm/dd/yyyy", $orgDate);
        }
    };

?>
