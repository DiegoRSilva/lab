<?php	

    class MyslPDO{
     
            private static $_instance;
            private static $_link;
            private $_host = "localhost";
            private $_user = "root";
            private $_pass = "";
            private $_db   = "sishpm";
     
            public static function db(){
                    if(self::$_instance == null){
                            self::$_instance = new MyslPDO();      
                    }
                    return self::$_link;
            }
     
            public function __construct(){
                    self::$_link = new PDO('mysql:host='.$this->_host.';dbname='.$this->_db, $this->_user, $this->_pass, array( PDO::ATTR_PERSISTENT => false));
            }
            public function bindAll($params, &$stmt){
                foreach($params as $key => $val)
                        $this->bind($key, $val, $stmt);
        }
 
             public function bind($key, $value, &$stmt){
                if(is_null($key)){
                        throw new Exception("Key of value is null");
                }
                $type = false;
                if(is_int($value))
                  $type = PDO::PARAM_INT;
                elseif(is_bool($value)){
                  $type = PDO::PARAM_BOOL;
                }elseif(is_null($value))
                  $type = PDO::PARAM_NULL;
                elseif(is_string($value))
                  $type = PDO::PARAM_STR;
               
                $stmt->bindParam($key, $value, $type);         
        }
            public function __destruct(){
                    self::$_link = null;
                    self::$_instance = null;
            }
     
    }

?>