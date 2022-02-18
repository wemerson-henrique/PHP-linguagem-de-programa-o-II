<?php
    abstract class dataBase{
        private static string $bancoDeDados = "mysql";
        private static string $host = "localhost";
        private static string $usuario = "root";
        private static string $senha = "";
        private static string $nomeDoBancoDeDados = "trabalho2";
        private static int $porta = 3306;
        private static object $conexao;

        public function conetar(){
            try{
                self::$conexao = new PDO(self::$bancoDeDados . ':host=' . self::$host . ';port=' . self::$porta . ';dbname=' . self::$nomeDoBancoDeDados, self::$usuario, self::$senha);
                return self::$conexao;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
?>