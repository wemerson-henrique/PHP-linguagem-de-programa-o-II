<?php
    require_once('conf-banco-de-dados.php');

    class loginUsuario extends dataBase{
        public array $dadosRecebidos;
        public object $conexaoComBanco;

        public function logar(){
            $this -> conexaoComBanco = $this->conetar();
            $query_logar = "SELECT id FROM usuario WHERE usuario = :userName and senha = :userSenha";

            $user_logando = $this->conexaoComBanco->prepare($query_logar);

            $user_logando->bindParam(':userName',$this->dadosRecebidos['userName']);
            $user_logando->bindParam(':userSenha',$this->dadosRecebidos['userSenha']);

            $user_logando->execute();
            $retorno = $user_logando->fetchALL();
            return $retorno;
        }
    }
?>