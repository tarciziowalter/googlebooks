<main role="main" class="container">
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=APP_PATH;?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pesquisar Livros</li>
        </ol>
    </nav>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4 class="h4">Encontre o seu livro favorito</h4>
        </div>

        <form method="post" id="formBuscarLivro">
            <div class="form-group">
                <label for="nome">Título da Obra:*</label>
                <input type="text" class="form-control" name="search" autofocus>
            </div>
            <button type="submit" class="btn btn-success" name="action"><i class="fas fa-search"></i> Pesquisar</button>
            <button type="button" class="btn btn-danger" name="clear" id="btnLimparPesquisa"><i class="fas fa-times"></i> Limpar</button>
        </form>

        <br><br>

        <table class="table table-hover" id="tableBooks">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Título</th>
                    <th scope="col" width="50%">Descrição Resumida</th>
                    <th scope="col">Imagem</th>
                    <th scope="col" width="10%"><center>Ação</center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4"><center>Não há resultados.</center></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>