<?php
    namespace  Fguedez\Poo\utils;
?>

<?php

    class UUID{
        public static function generate(){
            return uniqid();
        }
    }