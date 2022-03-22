<?php


namespace Joker\Piweb\Config;

class Connection
{
    public function getCon(){
        
            try {
                
                $result = new \PDO( 'mysql:host=localhost;dbname=pegada', 'root', '');
        
            } catch (\Exception $e){
               $result = $e->getMessage();
                
            }
        return $result;
        

    }

}