<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link rel="stylesheet" href="css/produto.css">
  </head>
  <body>
    <?php include("cabecalho.php") ?>

    <div class="produto-back">
      <div class="container">
        <div class="produto">
          <h1>Fuzzy Cardigan</h1>
          <p>por apenas R$ 129,00</p>

          <form action="checkout.php" method="post">
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

              <input type="hidden" name="nome" value="Fuzzy Cardigan">
              <input type="hidden" name="preco" value="129,00">
            </fieldset>

            <fieldset class="tamanhos">
              <legend>Escolha o tamanho:</legend>

              <input type="range" name="tamanho" id="tamanho" min="36" max="46" step="2" value="42">
            </fieldset>

            <input type="submit" class="comprar" name="comprar" value="Comprar">
          </form>
        </div>

        <section class="detalhes">
          <h2>Detalhes do produto</h2>

          <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
          material italiano com estampa desenhada pelos artesãos da
          comunidade de Krotor nas ilhas grega. Compre já e receba hoje
          mesmo pela nossa entrega a jato.</p>

          <table>
            <thead>
              <tr>
                <th>Características</th>
                <th>Detalhe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Modelo</td>
                <td>Cardigã</td>
              </tr>
              <tr>
                <td>Material</td>
                <td>Algodão e poliester</td>
              </tr>
              <tr>
                <td>Cores</td>
                <td>Azul, Rosa e Verde</td>
              </tr>
              <tr>
                <td>Lavagem</td>
                <td>Lavar a mão</td>
              </tr>
            </tbody>
          </table>
        </section>
      </div>
    </div>

    <?php include("rodape.php") ?>
  </body>
</html>
