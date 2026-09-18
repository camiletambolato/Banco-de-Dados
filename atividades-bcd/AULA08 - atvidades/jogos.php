<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

require_once("conexao.php");

$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo === "POST") {
    $json = file_get_contents("php://input");
    $dados = json_decode($json, true);

    // Valida se o JSON foi recebido corretamente e se todos os campos estão presentes
    if (
        !$dados || 
        !isset(
            $dados["titulo"], 
            $dados["plataforma"], 
            $dados["genero"], 
            $dados["desenvolvedora"], 
            $dados["ano_lancamento"], 
            $dados["preco"], 
            $dados["estoque"]
        )
    ) {
        http_response_code(400);
        echo json_encode(["erro" => "Dados incompletos ou JSON inválido."]);
        exit;
    }

    // Insere o jogo no banco de dados com 7 marcadores de posição
    $sql = "INSERT INTO jogos (titulo, plataforma, genero, desenvolvedora, ano_lancamento, preco, estoque) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $comando = $pdo->prepare($sql);

    $comando->execute([
        $dados["titulo"],
        $dados["plataforma"],
        $dados["genero"],
        $dados["desenvolvedora"],
        (int)$dados["ano_lancamento"],
        (float)$dados["preco"],
        (int)$dados["estoque"]
    ]);

    http_response_code(201);
    echo json_encode([
        "mensagem" => "Jogo cadastrado com sucesso!"
    ]);
    exit;
}

if ($metodo === "GET") {
    // Retorna todos os jogos em ordem alfabética pelo título
    $sql = "SELECT * FROM jogos ORDER BY titulo ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    $jogos = $stmt->fetchAll();

    http_response_code(200);
    echo json_encode($jogos);
    exit;
}

// Retorno caso utilize um método não permitido (PUT, DELETE, etc.)
http_response_code(405);
echo json_encode(["erro" => "Método não permitido."]);
?>