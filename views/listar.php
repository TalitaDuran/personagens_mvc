
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de personagens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Catálogo de personagens</h1>

    <p>Explore os personagens cadastrados no catálogo.</p>

    <a href="index.php?acao=cadastrar">
        + Cadastrar personagem
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Universo</th>
                <th>Poder</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($personagens as $personagem) { ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars((string) $personagem["id"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($personagem["nome"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($personagem["universo"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($personagem["poder"]); ?>
                    </td>
                    <td>
     <form class="form-excluir"
          method="POST"
          action="excluir.php"
          onsubmit="return confirm('Tem certeza que deseja excluir este personagem?');">

        <input
            type="hidden"
            name="id"
            value="<?php echo (int) $personagem['id']; ?>"
        >

        <button type="submit" class="btn-excluir">
            Excluir
        </button>
    </form>
</td>
                </tr>
            <?php } ?>

            <?php if (empty($personagens)) { ?>
                <tr>
                    <td colspan="5">Nenhum personagem cadastrado ainda.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
