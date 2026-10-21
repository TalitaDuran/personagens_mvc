
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar personagem</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Cadastrar personagem</h1>

    <p>Preencha as informações para adicionar um personagem ao catálogo.</p>

    <?php if ($mensagem != "") { ?>
        <p class="mensagem">
            <?php echo htmlspecialchars($mensagem); ?>
        </p>
    <?php } ?>

    <form method="POST" action="index.php?acao=cadastrar">

        <label for="nome">Nome:</label>
        <input
            type="text"
            id="nome"
            name="nome"
            required
        >

        <label for="universo">Universo:</label>
        <input
            type="text"
            id="universo"
            name="universo"
            required
        >

        <label for="poder">Poder:</label>
        <input
            type="text"
            id="poder"
            name="poder"
            required
        >

        <button type="submit">Cadastrar personagem</button>

    </form>

    <p>
        <a href="index.php">← Voltar para a lista</a>
    </p>

</body>
</html>
