CREATE TABLE catalogo (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    duracao_min INT NOT NULL,
    avaliacao NUMERIC(3,2) NOT NULL
);


INSERT INTO catalogo (nome, duracao_min, avaliacao) VALUES
('Harry Potter e a Pedra Filosofal', 152, 7.30),
('Harry Potter e a Câmara Secreta', 161, 7.30),
('Harry Potter e o Prisioneiro de Azkaban', 141, 8.10),
('Harry Potter e o Cálice de Fogo', 157, 7.60),
('Harry Potter e a Ordem da Fênix', 138, 7.10),
('Harry Potter e o Enigma do Príncipe', 153, 7.30),
('Harry Potter e as Relíquias da Morte: Parte 1', 146, 7.10),
('Harry Potter e as Relíquias da Morte: Parte 2', 131, 8.40),
('A Substância', 141, 8.10),
('A Viagem de Chihiro', 125, 8.80),
('Castelo Animado', 119, 7.70),
('Ponyo', 100, 7.90),
('The Maze Runner', 113, 5.90),
('Maze Runner: The Scorch Trials', 131, 5.40),
('Maze Runner: The Death Cure', 142, 5.10),
('Alice in Borderland', 1226, 7.00),
('Parasite', 132, 9.40),
('The Glory', 952, 7.50),
('Coraline', 100, 8.00),
('Squid Game', 1319, 7.50);

-- Exibir todos os registros
SELECT * FROM catalogo;

-- 10 filmes/séries mais bem avaliados
SELECT *
FROM catalogo
ORDER BY avaliacao DESC
LIMIT 10;

-- Atualizar algumas avaliações
UPDATE catalogo
SET avaliacao = 8.60
WHERE nome = 'A Substância';

UPDATE catalogo
SET avaliacao = 9.00
WHERE nome = 'Coraline';

UPDATE catalogo
SET avaliacao = 8.70
WHERE nome = 'Harry Potter e as Relíquias da Morte: Parte 2';

-- Verificar as alterações
SELECT *
FROM catalogo
ORDER BY avaliacao DESC;

-- Apagar 5 registros
DELETE FROM catalogo
WHERE nome IN (
    'The Maze Runner',
    'Maze Runner: The Scorch Trials',
    'Maze Runner: The Death Cure',
    'Ponyo',
    'Castelo Animado'
);

-- Verificar o resultado final
SELECT * FROM catalogo;