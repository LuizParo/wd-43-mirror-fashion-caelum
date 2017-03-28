<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link rel="stylesheet" href="css/produto.css">
  </head>
  <body>
    <?php include("cabecalho.php") ?>

    <div class="produto">
      <h1>Fuzzy Cardigan</h1>
      <p>por apenas R$ 129,00</p>

      <form>
        <fieldset class="cores">
          <legend>Escolha a cor:</legend>

          <input type="radio" name="cor" value="verde" id="verde" checked>
          <label for="verde">
            <img src="img/produtos/foto2-verde.png" alt="verde">
          </label>

          <input type="radio" name="cor" value="rosa" id="rosa">
          <label for="rosa">
            <img src="img/produtos/foto2-rosa.png" alt="rosa">
          </label>

          <input type="radio" name="cor" value="azul" id="azul">
          <label for="azul">
            <img src="img/produtos/foto2-azul.png" alt="azul">
          </label>
        </fieldset>

        <input type="submit" name="comprar" value="Comprar">
      </form>
    </div>

    <?php include("rodape.php") ?>
  </body>
</html>
