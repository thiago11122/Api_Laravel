<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,minimal-ui" name="viewport">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/vue-material.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue-material/dist/theme/default.css">
  </head>

  <body>
    <div id="app">
      <!-- Your code here -->
    </div>

    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-material"></script>
    <script>
      Vue.use(VueMaterial.default)

      new Vue({
        el: '#app'
      })
    </script>
  </body>
</html>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .pt-6{
              padding-top: 6px;
            }
        </style>
    </head>
    <body>
      <div>
          <div class="md-layout">
              <div class="">
                    <h1>API Teste</h1>
                    <p>
                        <h2>Rotas:</h2>
                        <h3>public/api/cadastrarPedido</h3>
                        Faz o cadastro de um Pedido.<br/> Deve-se enviar
                        um json com o seguinte modelo via post:<br/>

                        {
                            "Nome": "Thiago",
                            "Products": [
                                {
                                    "product": "espinafre",
                                    "qty": 2,
                                    "price": 23
                                },
                                {
                                    "product": "nugget",
                                    "qty": 1,
                                    "price": 23
                                },
                                {
                                    "product": "couve",
                                    "qty": 1,
                                    "price": 23
                                }
                            ]
                        }

                    <h3>public/api/retornarPedido/{id}/{dataInicial}/{dataFinal}</h3>
                    Retorna os dados de um pedido, pelo id do pedido e o intervalo de data
                    no qual ele foi feito. O intervalo deve ser informado no formato dia/mês/ano.
                    </p>
              </div>
          </div>
      </div>
    </body>
</html>
