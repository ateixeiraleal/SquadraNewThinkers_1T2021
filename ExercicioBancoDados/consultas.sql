use restaurante;

-- 5) Criar uma consulta que retorne a quantidade de cozinhas cadastradas no banco de dados.
select count(*) as QTD_COZINHAS from cozinha;

-- 6) Criar uma consulta que possua um filtro, buscando as cozinhas que possuam o horário de fechamento as 22 horas.
select cod, nome as NOME_COZINHA
from cozinha
where horaFechamento = 22;

-- 7) Criar uma consulta que liste quais ingredientes estão vencidos.
select cod, nome from ingrediente where validade < DATE(NOW());

-- 9) Criar uma consulta que realize a junção das tabelas Cozinha e Ingrediente e informe as cozinhas não possuam ingredientes.
select cod as CÓDIGO, nome as COZINHA
from cozinha C left outer join ingrediente_cozinha I on (C.cod = I.COZINHA_cod)
where COZINHA_cod is null;

-- 10) Criar uma consulta que realize a junção das tabelas Cozinha, Ingrediente e Funcionario e informe as cozinhas que possuam número de funcionários maior que 4;
select cod as CÓDIGO, nome as COZINHA
from cozinha C left outer join funcionario_cozinha F on (C.cod = F.COZINHA_cod)
group by COZINHA_cod
having count(*) >= 4;