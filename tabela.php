<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário</title>
    <meta charset="utf-8">
</head>
<body>

<?php   $arquivo = file('arquivo.txt'); ?>

        <table border="1">
		<tr>
            <th>Dados dos usuarios</th>
		</tr>
		<?php foreach ($arquivo as $imprime) {?>
		<tr>
            <td><?= print_r($imprime); ?></td>
		</tr>
		<?php }?>
            <a href="tela.php">Voltar</a>
            <a href="">Incluir</a>
            <a href="">Excluir</a>



</body>
</html>