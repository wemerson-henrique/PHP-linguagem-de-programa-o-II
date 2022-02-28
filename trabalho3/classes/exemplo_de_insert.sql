INSERT INTO `venda`(`ID`, `Data_da_Venda`, `Total_da_Venda`, `Quantidade_Vendida`, `ID_Produto`, `Nome_do_Produto`, `Preco_de_Venda`, `Quantidade_em_Estoque`) VALUES ('2','2022/02/24','23','2', (SELECT `ID` FROM `produto` WHERE `ID` = 1), (SELECT `Nome` FROM `produto` WHERE `ID` = 1), (SELECT `Preco_De_Venda` FROM `produto` WHERE `ID` = 1), (SELECT `Quantidade` FROM `produto` WHERE `ID` = 1));

