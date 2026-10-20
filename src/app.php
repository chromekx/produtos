<?php 

require __DIR__ . '/../vendor/autoload.php'; 

use Slim\Factory\AppFactory; 

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$produtos = [
    ['id' => 1, 'nome' => 'Teclado'],
    ['id' => 2, 'nome' => 'Mouse'],
    ['id' => 3, 'nome' => 'Monitor']
];

$app->get('/status', function ($request, $response) { 
    $response->getBody()->write(json_encode(['status' => 'ok'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/status/xml', function ($request, $response) { 
    $response->getBody()->write("<status>ok</status>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/status/plain', function ($request, $response) { 
    $response->getBody()->write("ok"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/nome', function ($request, $response) { 
    $response->getBody()->write(json_encode(['nome' => 'Davi Salvador Schubert'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/nome/xml', function ($request, $response) { 
    $response->getBody()->write("<nome>Davi Salvador Schubert</nome>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/nome/plain', function ($request, $response) { 
    $response->getBody()->write("Davi Salvador Schubert"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/curso', function ($request, $response) { 
    $response->getBody()->write(json_encode(['curso' => 'Segundo Ano Informática'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/curso/xml', function ($request, $response) { 
    $response->getBody()->write("<curso>Segundo Ano Informática</curso>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/curso/plain', function ($request, $response) { 
    $response->getBody()->write("Segundo Ano Informática"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/gato', function ($request, $response) { 
    $response->getBody()->write(json_encode(['gato' => 'MEOWWWWWWWWWW'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/gato/xml', function ($request, $response) { 
    $response->getBody()->write("<gato>MEOWWWWWWWWWW</gato>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/gato/plain', function ($request, $response) { 
    $response->getBody()->write("MEOWWWWWWWWWW"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/dog', function ($request, $response) { 
    $response->getBody()->write(json_encode(['dog' => 'Au Au!'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/dog/xml', function ($request, $response) { 
    $response->getBody()->write("<dog>Au Au!</dog>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/dog/plain', function ($request, $response) { 
    $response->getBody()->write("Au Au!"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/telefone', function ($request, $response) { 
    $response->getBody()->write(json_encode(['telefone' => 'Trimmm-Triririm!'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/telefone/xml', function ($request, $response) { 
    $response->getBody()->write("<telefone>Trimmm-Triririm!</telefone>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/telefone/plain', function ($request, $response) { 
    $response->getBody()->write("Trimmm-Triririm!"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/desmotivacional', function ($request, $response) { 
    $response->getBody()->write(json_encode(['desmotivacional' => 'Desista, A vida é ruim'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/desmotivacional/xml', function ($request, $response) { 
    $response->getBody()->write("<desmotivacional>Desista, A vida é ruim</desmotivacional>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/desmotivacional/plain', function ($request, $response) { 
    $response->getBody()->write("Desista, A vida é ruim"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/motivacional', function ($request, $response) { 
    $response->getBody()->write(json_encode(['motivacional' => 'Viva, a vida é uma festa'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/motivacional/xml', function ($request, $response) { 
    $response->getBody()->write("<motivacional>Viva, a vida é uma festa</motivacional>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/motivacional/plain', function ($request, $response) { 
    $response->getBody()->write("Viva, a vida é uma festa"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/musica', function ($request, $response) { 
    $response->getBody()->write(json_encode(['musica' => 'No Surprise - RadioHead'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/musica/xml', function ($request, $response) { 
    $response->getBody()->write("<musica>No Surprise - RadioHead</musica>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/musica/plain', function ($request, $response) { 
    $response->getBody()->write("No Surprise - RadioHead"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/filme', function ($request, $response) { 
    $response->getBody()->write(json_encode(['filme' => 'Guardioes da Galaxia Vol.1'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/filme/xml', function ($request, $response) { 
    $response->getBody()->write("<filme>Guardioes da Galaxia Vol.1</filme>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/filme/plain', function ($request, $response) { 
    $response->getBody()->write("Guardioes da Galaxia Vol.1"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
}); 

$app->get('/tic', function ($request, $response) { 
    $response->getBody()->write(json_encode(['tic' => 'Toc'])); 
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200); 
}); 

$app->get('/tic/xml', function ($request, $response) { 
    $response->getBody()->write("<tic>Toc</tic>"); 
    return $response->withHeader('Content-Type', 'application/xml')->withStatus(200); 
}); 

$app->get('/tic/plain', function ($request, $response) { 
    $response->getBody()->write("Toc"); 
    return $response->withHeader('Content-Type', 'text/plain')->withStatus(200); 
});

$app->get('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {

    $id = (int) $args['id'];

    $produto = current(
        array_filter($produtos, fn($p) => $p['id'] === $id)
    ) ?: null;

    if (!$produto) {

        $response->getBody()->write(
            json_encode(['erro' => 'Produto não encontrado'])
        );

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(404);
    }

    $response->getBody()->write(
        json_encode($produto)
    );

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->post('/produtos', function ($request, $response) use (&$produtos) {

    $dados = $request->getParsedBody();

    if (!isset($dados['nome']) || empty($dados['nome'])) {

        $response->getBody()->write(
            json_encode(['erro' => 'O nome é obrigatório'])
        );

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(400);
    }

    $novoProduto = [
        'id' => $produtos === [] ? 1 : max(array_column($produtos, 'id')) + 1,
        'nome' => $dados['nome']
    ];

    $produtos[] = $novoProduto;

    $response->getBody()->write(
        json_encode($novoProduto)
    );

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(201);
});

$app->delete('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {
    $id = (int) $args['id'];

    foreach ($produtos as $indice => $produto) {
        if ($produto['id'] === $id) {
            array_splice($produtos, $indice, 1);

            $response->getBody()->write(
                json_encode(['mensagem' => 'Produto removido com sucesso'])
            );

            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }

    $response->getBody()->write(
        json_encode(['erro' => 'Produto não encontrado'])
    );

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(404);
});

$app->put('/produtos/{id}', function ($request, $response, $args) use (&$produtos) {
    $id = (int) $args['id'];

    foreach ($produtos as &$produto) {
        if ($produto['id'] === $id) {
            $dados = $request->getParsedBody();

            if (!isset($dados['nome']) || empty($dados['nome'])) {
                $response->getBody()->write(
                    json_encode(['erro' => 'O nome é obrigatório'])
                );

                return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withStatus(400);
            }

            $produto['nome'] = $dados['nome'];
            unset($produto);

            $response->getBody()->write(
                json_encode(['mensagem' => 'Produto atualizado com sucesso'])
            );

            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }
    unset($produto);

    $response->getBody()->write(
        json_encode(['erro' => 'Produto não encontrado'])
    );

    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(404);
});

return $app;