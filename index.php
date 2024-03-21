<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prato do Dia</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container">

  <h1>Prato do Dia</h1>

  <form method="post" action="index.php">
    <div class="campo-formulario">
      <label for="diaSemana">Dia da Semana:</label>
      <select id="diaSemana" name="diaSemana">
        <option value="">Selecione...</option>
        <option value="Domingo">Domingo</option>
        <option value="Segunda-feira">Segunda-feira</option>
        <option value="Terça-feira">Terça-feira</option>
        <option value="Quarta-feira">Quarta-feira</option>
        <option value="Quinta-feira">Quinta-feira</option>
        <option value="Sexta-feira">Sexta-feira</option>
        <option value="Sábado">Sábado</option>
      </select>
    </div>

    <br/>

    <button type="submit">Buscar Prato do Dia</button>
  </form>

  <?php

  // Extraia os dados do formulário
  $diaSemana = isset($_POST['diaSemana']) ? trim($_POST['diaSemana']) : '';

  // Inicialize as variáveis
  $pratoDoDia = "";
  $preco = "";

  // Verifique se o dia da semana foi informado
  if ($diaSemana) {
    // Crie um array com os pratos do dia
    $cardapio = array(
      array("Domingo", "Lasanha quatro queijos", 12.60),
      array("Segunda-feira", "Frango ao molho", 10.00),
      array("Terça-feira", "Arroz com legumes", 9.40),
      array("Quarta-feira", "Feijoada", 11.20),
      array("Quinta-feira", "Panqueca", 8.50),
      array("Sexta-feira", "Nhoque paulista", 10.00),
      array("Sábado", "Carne assada", 15.00),
    );

    // Procure o prato no array
    foreach ($cardapio as $item) {
      if ($item[0] == $diaSemana) {
        $pratoDoDia = $item[1];
        $preco = $item[2];
        break;
      }
    }
  }

  // Exiba o resultado
  if ($pratoDoDia) {
    echo "<h2>Prato do Dia: $pratoDoDia</h2>";
    echo "<p>Preço: R$ $preco</p>";
  } else {
    echo "<h2>Prato do Dia não encontrado!</h2>";
  }

  ?>

</div>

</body>
</html>
