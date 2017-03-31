<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Checkout Mirror Fashion</title>

    <link rel="stylesheet" href="css/bootstrap-flatly.css">

    <style media="screen">
      body {
        padding-top: 70px;
      }

      .form-control:invalid {
        border: 1px solid #cc0000;
      }

      .navbar {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#navbar-collapse-id">

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Mirror Fashion</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-id">
        <ul class="nav navbar-nav">
          <li class="active"><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas frequentes</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
        </ul>
      </div>
    </nav>

    <header class="jumbotron">
      <div class="container">
        <h1>Ótima escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
      </div>
    </header>

    <article class="container">
      <div class="row">
        <div class="col-sm-4 col-lg-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Sua compra</h2>
            </div>

            <div class="panel-body">
              <img src="img/produtos/foto1-<?= $_POST['cor'] ?>.png"
                   alt="Fuzzy Cardigan"
                   class="img-thumbnail img-responsive">

              <dl>
                <dt>Produto</dt>
                <dd><?= $_POST['nome'] ?></dd>

                <dt>Cor</dt>
                <dd><?= $_POST['cor'] ?></dd>

                <dt>Tamanho</dt>
                <dd><?= $_POST['tamanho'] ?></dd>

                <dt>Preço</dt>
                <dd id="preco"><?= $_POST['preco'] ?></dd>
              </dl>

              <div class="form-group">
                <label for="qt">Quantidade</label>
                <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
              </div>

              <div class="form-group">
                <label for="total">Total</label>
                <output for="qt preco" id="total" class="form-control">
                  <?= $_POST["preco"] ?>
                </output>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-8 col-lg-9">
          <form method="post">
            <div class="row">
              <fieldset class="col-md-6">
                <legend>Dados pessoais</legend>

                <div class="form-group">
                  <label for="nome">Nome completo</label>
                  <input type="text" id="nome" name="nome" class="form-control" autofocus required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>

                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@exemplo.com" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00">
                </div>

                <div class="checkbox">
                  <label for="spam">
                    <input type="checkbox" id="spam" name="spam" value="sim" checked>
                      Quero receber spam da Mirror Fashion
                    </input>
                  </label>
                </div>
              </fieldset>

              <fieldset class="col-md-6">
                <legend>Cartão de crédito</legend>

                <div class="form-group">
                  <label for="numero-cartao">Número - CVV</label>
                  <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" />
                </div>

                <div class="form-group">
                  <label for="bandeira-cartao">Bandeira</label>
                  <select class="form-control" id="bandeira-cartao" name="bandeira-cartao">
                    <option value="master">MasterCard</option>
                    <option value="visa">VISA</option>
                    <option value="amex">American Express</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="validade-cartao">Validade</label>
                  <input type="month" class="form-control" id="validade-cartao" name="validade-cartao" />
                </div>

                <button type="submit" class="btn btn-primary btn-lg pull-right">
                  <span class="glyphicon glyphicon-thumbs-up"></span>
                  Confirmar pedido
                </button>
              </fieldset>
            </div>
          </form>
        </div>
      </div>
    </article>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/total.js"></script>
  </body>
</html>
