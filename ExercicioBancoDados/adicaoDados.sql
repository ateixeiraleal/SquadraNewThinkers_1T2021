use restaurante;

-- -----------------------------------------------------
-- COZINHA
-- -----------------------------------------------------
insert into `COZINHA` (`nome`,`numeroPratos`,`numeroCozinheiros`,`tempoPreparo`,`horaAbertura`,`horaFechamento`,`pratoPrincipal`)
values("Mineira",10,4,30,14,20,"Feijoada");
insert into `COZINHA` (`nome`,`numeroPratos`,`numeroCozinheiros`,`tempoPreparo`,`horaAbertura`,`horaFechamento`,`pratoPrincipal`)
values("Italiana",12,6,20,13,22,"Pizza");
insert into `COZINHA` (`nome`,`numeroPratos`,`numeroCozinheiros`,`tempoPreparo`,`horaAbertura`,`horaFechamento`,`pratoPrincipal`)
values("Chinesa",15,8,45,13,22,"Yakissoba");
insert into `COZINHA` (`nome`,`numeroPratos`,`numeroCozinheiros`,`tempoPreparo`,`horaAbertura`,`horaFechamento`,`pratoPrincipal`)
values("Portuguesa",13,6,45,10,23,"Bacalhoada");
insert into `COZINHA` (`nome`,`numeroPratos`,`numeroCozinheiros`,`tempoPreparo`,`horaAbertura`,`horaFechamento`,`pratoPrincipal`)
values("Mexicana",4,2,15,11,22,"Guacamole");


-- -----------------------------------------------------
-- INGREDIENTE
-- -----------------------------------------------------
insert into `INGREDIENTE` (`nome`,`validade`)
values("Feijão", "2022/02/10");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Linguiça", "2021/07/25");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Palmito","2021/12/20");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Presunto","2021/04/22");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Abacate","2021/04/17");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Macarrão","2022/02/07");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Farinha", "2022/01/17");
insert into `INGREDIENTE` (`nome`,`validade`)
values("Champignon", "2021/04/30");

-- -----------------------------------------------------
-- INGREDIENTE_COZINHA
-- -----------------------------------------------------
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(1,1);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(4,2);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(8,3);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(2,5);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(5,5);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(7,1);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(6,3);
insert into `INGREDIENTE_COZINHA` (`INGREDIENTE_cod`,`COZINHA_cod`)
values(3,2);


-- -----------------------------------------------------
-- FUNCIONARIO
-- -----------------------------------------------------
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("José das Couves", "Chefe");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Manoel Sovaco de Gamba","Caixa");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Maria da Dores", "Garçonete");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Jacinto Leite Aquino Rego","Cozinheiro");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Sextavado Obtusângulo Reto","Atendente");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Ácido Acético Etílico da Silvas","Cozinheiro");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Maria Bastarda Dequem","Cozinheira");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Celisvaldo dos Santos","Metri");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Maria Bastarda Dequem","Cozinheira");	
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Felícia da Benevolência","Cozinheira");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Rego Penteado","Bar Men");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Aberta Demais de Oliveira","Faxineira");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Leda Prazeres Amante","Cozinheira");
insert into `FUNCIONARIO` (`nome`,`atividade`)
values("Eva Gina Melo","Cozinheira");

-- -----------------------------------------------------
-- FUNCIONARIO_COZINHA
-- -----------------------------------------------------
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(11,4);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(1,1);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(5,2);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(8,4);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(3,1);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(2,4);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(7,4);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(10,1);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(4,5);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(9,2);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(6,3);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(12,4);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(13,1);
insert into `FUNCIONARIO_COZINHA` (`FUNCIONARIO_cod`,`COZINHA_cod`)
values(14,1);
