<?php
    require_once('conf-banco-de-dados.php');

    class Usuario extends dataBase{
        public array $dadosRecebidos;
        public object $conexaoComBanco;

        public function listar(): array {
            $this -> conexaoComBanco = $this->conetar();
            $query_usuario = "SELECT nome, cpf, email, telefone, usuario, senha FROM usuario ORDER BY id DESC LIMIT 40";
            $busca = $this->conexaoComBanco->prepare($query_usuario);
            $busca->execute();
            $retorno = $busca->fetchALL();
            return $retorno;
        }

        public function cadastrar(){
            $this -> conexaoComBanco = $this->conetar();
            $query_user = "INSERT INTO usuario (id,nome,cpf,telefone,usuario,senha,email) values (null, :nome, :cpf, :telefone, :usuario, :senha, :email)";
            $cad_usuario = $this->conexaoComBanco->prepare($query_user);

            $cad_usuario->bindParam(':nome',$this->dadosRecebidos['nome']);
            $cad_usuario->bindParam(':cpf',$this->dadosRecebidos['cpf']);
            $cad_usuario->bindParam(':telefone',$this->dadosRecebidos['telefone']);
            $cad_usuario->bindParam(':usuario',$this->dadosRecebidos['usuario']);
            $cad_usuario->bindParam(':senha',$this->dadosRecebidos['senha']);
            $cad_usuario->bindParam(':email',$this->dadosRecebidos['email']);

            $cad_usuario->execute();
            if($cad_usuario->rowCount()){
                return true;
            }else {
                return false;
            }
        }

        public function username(){
            $this->conexaoComBanco = $this->conetar();
            $query_usuario = "SELECT nome FROM trabalho2.usuario WHERE nome = :nome";
            $cad_usuario = $this->conexaoComBanco->prepare($query_usuario);

            $cad_usuario->bindParam(':nome',$this->dadosRecebidos['nome']);

            $cad_usuario->execute();
            if($cad_usuario->rowCount()){
                return true;
            }else {
                return false;
            }
        }
    }
?>