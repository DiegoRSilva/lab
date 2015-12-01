<?php
	class Usuario extends MyslPDO{
         /** instance */
        private static $_instance;
        /** Link database */
        private static $_db;
        /**
         * Constructor default
         */
        public function __construct(){
                self::$_db = parent::db();
        }
        /**
         * Singleton
         */

        public static function instance(){
                if(is_null(self::$_instance))
                        self::$_instance = new self();
                return self::$_instance;
        }
        public function insertUser($dados){
                $stmt = self::$_db->prepare('INSERT INTO usuario(nome,funcao,email,usuario,senha) VALUES (upper(?),upper(?),upper(?),upper(?),upper(?))');
                return $stmt->execute($dados);
        }
        public function getUser($usuario,$senha){
                $stmt = self::$_db->prepare('SELECT * from usuario where usuario=:usuario and senha=:senha');
                $stmt->bindValue(":usuario", $usuario,  PDO::PARAM_STR);
                $stmt->bindValue(":senha", $senha, PDO::PARAM_STR);
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);
                return $res;
        }
        public function updUser($senha,$usuario){
            $stmt = self::$_db->prepare('UPDATE usuario SET senha_user=:senha_user where login_user=:login_user');
            $stmt->bindValue(":senha_user", $senha, PDO::PARAM_STR);
            $stmt->bindValue(":login_user", $usuario, PDO::PARAM_STR);
            $stmt->execute();
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

    }
?>
