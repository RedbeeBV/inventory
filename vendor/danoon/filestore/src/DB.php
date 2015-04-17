<?php

namespace FileStore;

Class DB {

    private $_dir;

    public function __construct($dir) {
        if (!is_dir($this->_dir)) {
            mkdir($this->_dir, 0777, TRUE);
        }
        $this->_dir = $dir;
    }

    public function table($db) {
        if (!is_dir($this->_dir . '/' . $db)) {
            mkdir($this->_dir . '/' . $db, 0777, TRUE);
        }
        return new \FileStore\Table($this->_dir . '/' . $db);
    }

}
