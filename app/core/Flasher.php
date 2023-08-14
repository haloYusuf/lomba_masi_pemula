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
            <div class="my-5 toast text-bg-' . $_SESSION['flash']['type'] . ' border-0 fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                    ' . $_SESSION['flash']['message'] . ' melakukan ' . ' '. $_SESSION['flash']['action'] .'
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" fdprocessedid="xalb69"></button>
                </div>
            </div>
            ';
            unset($_SESSION['flash']);
        }
    }

}