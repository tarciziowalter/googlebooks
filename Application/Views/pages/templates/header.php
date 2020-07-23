<!DOCTYPE html>
<html>
<head>
    <title><?=self::project_title;?></title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="<?=PUBLIC_PATH?>assets/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?=PUBLIC_PATH?>assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_PATH?>assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?=PUBLIC_PATH?>assets/css/jquery-confirm.css">
</head>

<body class="bg-light">

    <base url="<?=APP_PATH;?>"/>
    
    <div class="overlay-loading">
        <img src="<?=PUBLIC_PATH.'assets/images/ajax-loader.gif';?>">
    </div>

	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  	    <a class="navbar-brand mr-auto mr-lg-0" href="<?=APP_PATH;?>">
  			Google Books API
  		</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=APP_PATH;?>"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?=APP_PATH;?>livro" aria-haspopup="true" aria-expanded="false">Pesquisar Livros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?=APP_PATH;?>livro/favorites" aria-haspopup="true" aria-expanded="false">Meus Favoritos</a>
                </li>  
            </ul>
        </div>
    </nav>

    <br>
