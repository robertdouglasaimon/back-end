<?php 
trait Logger {
    public function log($message) {
        echo '<br> [LOG]: '. $message;
        echo '<br> Datetime: '. date('Y-m'). '<br>'; 
    }
}




?>


