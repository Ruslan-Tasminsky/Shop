<?php

namespace shop;

class ErrorHandler 
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorsHandler']);
        set_exception_handler([$this, 'exceptionsHandler']);
    }
    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->logErrors($errstr, $errfile, $errline);
        if (DEBUG || in_array($errno, [E_USER_ERROR, E_RECOVERABLE_ERROR])) {
            $this->displayErrors($errno, $errstr, $errfile, $errline);
        }
        return true;
    }
    public function fatalErrorsHandler()
    {
        $error = error_get_last();
        if ($error && $error['type'] & (E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR)) {
            $this->logErrors($error['message'], $error['file'], $error['line']);
            ob_end_clean();
        } else {
            ob_end_flush();
        }
    }
    public function exceptionsHandler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayErrors('Exception', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }
    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date("Y-m-d H:i:s") . "] Message: {$message} | File: {$file}, Line: {$line} \n=================\n", 3, ROOT . '/tmp/error.log');
    }
    protected function displayErrors($errno, $errstr, $errfile, $errline, $response = 500)
    {
        http_response_code($response);
        if ($response == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        } else {
            require WWW . '/errors/prod.php';
        }
        die;
    }
}