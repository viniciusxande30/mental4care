<!DOCTYPE html>
<html>
<head>
    <title>Novo Formulário Enviado</title>
</head>
<body>
    <h2>Nova mensagem do formulário de contato:</h2>
    <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
    <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
    <p><strong>Empresa:</strong> {{ $dados['empresa'] }}</p>
    <p><strong>Quantidade de Colaboradores:</strong> {{ $dados['qtd'] }}</p>
    <p><strong>Telefone para Contato:</strong> {{ $dados['telefone'] }}</p>
    <p><strong>Mensagem:</strong> {{ $dados['mensagem'] }}</p>
</body>
</html>