<?php 

class Flasher {

    public static function setFlasher($message, $action, $type)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash'])) {
            echo '
            <p>' . $_SESSION['flash']['message'] . ' melakukan ' . ' '. $_SESSION['flash']['action'] .'</p>
            ';
            unset($_SESSION['flash']);
        }
    }

}