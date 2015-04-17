<?php

namespace FileStore;

Class Table {

    private $_dir;

    public function __construct($dir) {
        $this->_dir = $dir;
    }

    public function set($entry, $data) {
        return file_put_contents($this->_dir . '/' . $entry, json_encode($data));
    }

    public function get($entry) {
        return json_decode(file_get_contents($this->_dir . '/' . $entry), true);
    }

    public function del($entry) {
        return unlink($this->_dir . '/' . $entry);
    }

    public function keys() {
        $data = [];
        foreach (new \DirectoryIterator($this->_dir) as $fileInfo) {
            if ($fileInfo->isDot())
                continue;
            array_push($data, $fileInfo->getFilename());
        }
        return $data;
    }

    public function exists($entry) {
        return file_exists($this->_dir . '/' . $entry);
    }

    public function count() {
        return iterator_count(new \FilesystemIterator($this->_dir . '/', \FilesystemIterator::SKIP_DOTS));
    }

}
