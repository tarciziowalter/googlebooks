<main role="main" class="container">
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=APP_PATH;?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Meus Favoritos</li>
        </ol>
    </nav>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
    
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4 class="h4">Livros adicionados nos favoritos</h4>
        </div>

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
                <?php foreach ($arr['livros'] as $key => $value):?>
                
                <tr>
                    <th scope="row"><?=$value['titulo'];?></th>
                    <td><?=$value['descricao'];?></td>
                    <td><img src="<?=$value['imagem'];?>"/></td>
                    <td>
                        <center>
                            <a href="#" _title="<?=$value['titulo'];?>" controller="livro" id_table="<?=$value['id'];?>" class="btn btn-sm btn-info btnDelete" title="Apagar Livro">
                                <i class="fas fa-trash-alt"></i></a>
                        </center>
                    </td>
                </tr>
                <?php endforeach;?>

                <?php if(count($arr['livros']) == 0):?>
                <tr>
                    <td colspan="4"><center>Nenhum registro foi encontrado</center></td>
                </tr>
                <?php endif;?>
                
            </tbody>
        </table>
    </div>
</main>