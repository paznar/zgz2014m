<?php

namespace Core\Adapters;
use Core\Application\Application;

Class Txt implements AdapterInterface, TxtInterface
{
    private $filename;
    
    public function __construct() {
        $config = Application::getConfig();
        $this->setFilename($_SERVER['DOCUMENT_ROOT']."/".$config['filename']);
    }

    public function setFilename($filename) 
    {
        $this->filename = $filename;
    }
    
    public function getFilename() 
    {
        return $this->filename;
    }
    
    public function fetchAll()
    {
        $users = file_get_contents($this->filename);
        $users = explode("\n", $users);
        return $users;                 
    }
    
    public function fetch($id) 
    {
        
    }
    
    public function insert($data) {
        
    }
    
    public function update($id, $data) {
        
    }
    
    public function delete($id) {
        
    }
}
