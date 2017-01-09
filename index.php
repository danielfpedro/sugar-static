<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sugar Dashboard</title>

    <link rel="stylesheet" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat|Muli|Roboto:400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.min.css">

    <link rel="stylesheet" href="assets/lib/optiscroll/dist/optiscroll.css">

    <style>
        .optiscroll-vtrack {
        	width: 8px;
            opacity: 0;
        	border-radius: 0;
        	box-shadow: none;
        }
        .optiscroll-htrack {
        }
    </style>

  </head>
  <body>

    <nav class="navbar sticky-top fixed-top navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>

            <div class="my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown open">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider" href="#"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sugar-container">
        <div class="sugar-sidebar-container hidden-xs-down">
            <div class="sugar-sidebar-overlay"></div>
            <div class="sugar-sidebar optiscroll">
                <div class="sugar-sidebar-content">

                    <ul class="sugar-nav-vertical nav flex-column">
                        <?php
                            $i = 0;
                            $menuItems = [
                                ['label' => 'Home', 'icon' => 'home'],
                                ['label' => 'Tabelas', 'icon' => 'table'],
                                ['label' => 'Banco de Dados', 'icon' => 'database'],
                                ['label' => 'Favoritos', 'icon' => 'asterisk'],
                                ['label' => 'Caixa de Sugestões', 'icon' => 'commenting-o'],
                                ['label' => 'Calendário', 'icon' => 'calendar'],
                            ];
                        ?>
                        <?php foreach ($menuItems as $key => $value): ?>
                            <li class="<?= $i == 2 ? 'active' : '' ?> nav-item">
                                <a href="#" class="nav-link">
                                    <span class="fa fa-<?= $value['icon'] ?> fa-fw"></span><?= $value['label'] ?>
                                </a>
                            </li>
                            <?php $i++; ?>
                        <?php endforeach ?>
                        <li>
                            <a href="#" class="has-nav-vertical-submenu">
                                <span class="fa fa-cog fa-fw"></span>Configurações
                            </a>
                            <ul class="sugar-nav-vertical-submenu">
                                <li class="">
                                    <a href="#">Meus dados</a>
                                </li>
                                <li>
                                    <a href="#">Minhas Conta</a>
                                </li>
                                <li>
                                    <a href="#">Senhas</a>
                                </li>
                                <li>
                                    <a href="#">Contas Anexadas</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sugar-content">

            <div class="">
                <div class="row">
                    <div class="col">
                        <h1>Content</h1>
                        Breadcrumb Aqui
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-success">
                            Adicionar
                        </button>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-title">
                    Pesquisar
                </div>
                <div class="panel-body">
                    <form class="" action="index.html" method="post">
                        <div class="row">
                            <div class="col">
                                <fieldset class="form-group">
                                    <label for="formGroupExampleInput2">Another label</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                </fieldset>
                            </div>
                            <div class="col col-bottom text-right">
                                <button type="button" class="btn btn-primary">
                                    Pesquisar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Table</h1>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover table-bordered" style="background-color: white;">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Cidade</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Daniel de Faria Pedro</td>
                                    <td>Volta Redonda</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">
                                            <span class="icon icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jonas da Silva</td>
                                    <td>Volta Redonda</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs">
                                            <span class="icon icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="">
                            <nav>
                              <ul class="pagination pagination-sm">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Form</h1>
                    <form>
                        <fieldset class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Senha">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="texto">Texto</label>
                            <textarea name="texto" id="texto" class="form-control" rows="5" cols="80"></textarea>
                        </fieldset>

                        <h3>Radio</h3>
                        <fieldset class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                Option one is this and that&mdash;be sure to include why it's great
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="radio disabled">
                                <label>
                                    <input type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                Option three is disabled
                                </label>
                            </div>
                        </fieldset>

                        <h3>Radio Inline</h3>

                        <fieldset class="form-group">
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                            </label>
                        </fieldset>

                        <h3>Checkbox</h3>
                        <fieldset class="form-group">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" value="">
                                Option one is this and that&mdash;be sure to include why it's great
                              </label>
                            </div>
                            <div class="checkbox disabled">
                              <label>
                                <input type="checkbox" value="" disabled>
                                Option two is disabled
                              </label>
                            </div>
                        </fieldset>

                        <h3>Checkbox Inline</h3>
                        <fieldset class="form-group">
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                            </label>
                        </fieldset>

                        <fieldset class="form-group">
                            <button type="button" class="btn btn-primary">
                                Salvar Alterações
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Custom Checkbox & Radio</h1>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/lib/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="assets/lib/optiscroll/dist/jquery.optiscroll.min.js">

    </script>
    <script>
      $(function() {
            $('.sugar-sidebar').optiscroll({
                minTrackSize: 10
            });
            // Subnav
            $('.sugar-nav-vertical > li > a.has-nav-vertical-submenu').click(function(e) {
                e.preventDefault();
                var $this = $(this);
                $this.next('.sugar-nav-vertical-submenu').slideToggle();
            });
      });
    </script>

  </body>
</html>
