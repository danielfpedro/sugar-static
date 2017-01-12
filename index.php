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
            <div class="row">
                <div class="col">
                    <div class="sugar-header">
                        <div class="row">
                            <div class="col">
                                <h1>Adicionar Artigo</h1>
                                <nav class="breadcrumb">
                                    <a class="breadcrumb-item" href="#">Artigos</a>
                                    <span class="breadcrumb-item active">Adicionar artigo</span>
                                </nav>
                            </div>
                            <div class="col text-right align-self-end">
                                <button type="button" class="btn btn-primary">Adicionar Artigo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="sugar-card">
                        <form class="form" action="index.html" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="q">Palavra Chave</label>
                                        <input type="text" id="q" class="form-control" placeholder="Nome ou Email">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status"/>
                                            <option value="">Todos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col text-right align-self-end">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-search fa-fw"></span> Pesquisar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- .card -->
                </div> <!-- col -->
            </div> <!-- row -->

            <div class="row">
                <div class="col">
                    <div class="sugar-card">
                        <div class="sugar-pagination-container">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-secondary btn-sm">
                                        <span class="fa fa-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <span class="fa fa-remove"></span>
                                    </button>
                                </div>
                                <div class="col align-self-center text-right">
                                    1 - 50 de 200 registros
                                </div>
                                <div class="col-md-1 align-self-center">
                                    <ul class="pagination pagination-sm" style="margin: 0; pading: 0;">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <span class="fa fa-chevron-left"></span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <span class="fa fa-chevron-right"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sugar-card sugar-card-table">
                        <table class="table table-sm table-hover table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 40px;"></th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i = 0; $i < 20; $i++): ?>
                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            danielfe@gmail.com
                                        </td>
                                        <td>
                                            Daniel de Faria Pedro
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div> <!-- .card -->
                </div>
            </div>
        </div> <!-- .sugar-content -->
    </div><!-- .sugar-container -->

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
