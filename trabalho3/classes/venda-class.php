<?php
    require_once('conf-banco-de-dados.php');

    class Venda extends dataBase{
        public array $dadosRecebidos;
        public object $conexaoComBanco;

        public function RealizarVenda(){
            $this -> conexaoComBanco = $this->conetar();
            $query_venda = "INSERT INTO venda(ID, Data_da_Venda, Total_da_Venda, Quantidade_Vendida, ID_Produto, Nome_do_Produto, Preco_de_Venda, Quantidade_em_Estoque) VALUES (null, :dataDaVenda, :quantidade * (SELECT Preco_De_Venda FROM produto WHERE ID = :idProduto), :quantidade, (SELECT ID FROM produto WHERE ID = :idProduto), (SELECT Nome FROM produto WHERE ID = :idProduto), (SELECT Preco_De_Venda FROM produto WHERE ID = :idProduto), (SELECT Quantidade FROM produto WHERE ID = :idProduto))";

            $cad_venda = $this->conexaoComBanco->prepare($query_venda);

            $cad_venda->bindParam(':dataDaVenda',$this->dadosRecebidos['dataDaVenda']);
            $cad_venda->bindParam(':quantidade',$this->dadosRecebidos['quantidade']);
            $cad_venda->bindParam(':idProduto',$this->dadosRecebidos['idProduto']);
            
            

            $cad_venda->execute();
            if($cad_venda->rowCount()){
                return true;
            }else {
                return false;
            }
        }
    }
?>