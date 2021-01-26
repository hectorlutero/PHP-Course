<?php

/**
 * Credit goes to https://www.netsparker.com/blog/web-security/untrusted-data-unserialize-php/
 */

class Logging {
    public $lastLog;
    public $lastTime;
    
    protected $logDate;
    protected $username;
    
    private $logFile;
    
    public function __construct($username = null) {
        $this->username = $username;
        $this->logDate = date('d-m-y');
        $this->logFile = './logs/' . $this->username . '_' . $this->logDate . '.log';
        
        $this->createLog($this->logFile);
        $this->logAction('start logging');
    }
    
    public function logAction($content) {
        $this->lastLog = $content;
        $this->lastTime = time();
        file_put_contents($this->logFile, '[' . $this->lastTime . '] - ' . $content . "\n", FILE_APPEND);
    }
    
    public function __wakeup() {
        $this->createLog($this->logFile);
        $this->logAction('resuming log. previous entry: ' . $this->lastLog);
    }
    
    protected function createLog($file) {
        if (!file_exists($file)) {
            touch($file);
        }
    }
}
