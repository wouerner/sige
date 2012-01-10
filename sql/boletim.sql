SELECT DISTINCT  b.id AS boletim_id, tp_m.nome AS materia_nome, a.data AS data_avaliacao, tp_en.nome AS ensino_nome, a.nota AS nota_avaliacao, a.tipo_avaliacao AS avaliacao
FROM 
tb_boletim AS b, tb_materia AS m, tb_tipo_materias AS tp_m,tb_tipo_ensino AS tp_en , tb_avaliacao AS a
 WHERE 
b.id_aluno = 797
AND
m.boletim = b.id
AND
tp_m.id =  m.materia
AND 
tp_en.id = m.tipo_ensino
AND 
m.id = a.materia


-- seleciona ultima prova de uma materia

SELECT *
FROM `tb_avaliacao`
WHERE materia =5
AND tipo_avaliacao = 'Prova'
ORDER BY id DESC
LIMIT 1 


--- sql para selecionar apenas ultima prova de uma determinada materia!

SELECT DISTINCT  
b.id AS boletim_id, tp_m.nome AS materia_nome, a.data AS data_avaliacao, tp_en.nome AS ensino_nome, a.nota AS nota_avaliacao, a.tipo_avaliacao AS avaliacao, a.materia

FROM 
tb_boletim AS b, tb_materia AS m, tb_tipo_materias AS tp_m,tb_tipo_ensino AS tp_en , (SELECT *
FROM `tb_avaliacao`
WHERE materia =5
AND tipo_avaliacao = 'Prova'
ORDER BY id DESC
LIMIT 1 ) AS a


 WHERE 
b.id_aluno = 797
AND
m.boletim = b.id
AND
tp_m.id =  m.materia
AND 
tp_en.id = m.tipo_ensino
AND 
m.id = a.materia


--select para encontrar a prova de uma determinada avaliacao

SELECT distinct * FROM tb_materia ,`tb_avaliacao`
WHERE tb_avaliacao.materia = 4
and tb_avaliacao.tipo_avaliacao = 'Prova'
and tb_materia.boletim = 27
and tb_materia.tipo_ensino = 3
and tb_materia.materia = 1
