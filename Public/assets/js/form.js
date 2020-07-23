$(function(){

    $("#formBuscarLivro").on('submit',function(e){

        e.preventDefault();

        search = $("input[name='search']").val();

        if(search == ""){
            notify("Informe o título do livro que deseja pesquisar!","warning");
            $("input[name='search']").focus();
            return false;
        }

        var url = '';
        var title = '';
        var description = '';
        var author = '';
        var img = '';

        $('.overlay-loading').fadeIn();

        html = '';
        $("#tableBooks > tbody").html("");

        $.get("https://www.googleapis.com/books/v1/volumes?q=" + search , function(response){

            $('.overlay-loading').fadeOut();

            console.log(response);

            for(i=0;i<response.items.length;i++){
                html+= '<tr>';
                html+= '<td>' + response.items[i].volumeInfo.title + '</td>';
                html+= '<td>' + response.items[i].searchInfo.textSnippet + '</td>';
                html+= '<td><img src="' + response.items[i].volumeInfo.imageLinks.smallThumbnail + '"/></td>';
                html+= '<td><center><button type="button" class="btn btn-warning" name="clear" id="btnMarcarFavorito"><i class="fas fa-star"></i></button></center></td>';
                html+= '</tr>';
            }

            $("#tableBooks > tbody").append(html);
     
        });
     

    })

    $("#btnLimparPesquisa").on('click',function(e){
        e.preventDefault();
        $("input[name='search']").val("");
        $("#tableBooks > tbody").html("<tr><td colspan='4'><center>Não há resultados.</center></td></tr>");
        $("input[name='search']").focus();
    })


    $('div').delegate('#btnMarcarFavorito','click', function(e) {

        e.preventDefault();

        base = $('base').attr('url');

        titulo = $(this).closest('tr').find('td:nth-child(1)').text();
        descricao = $(this).closest('tr').find('td:nth-child(2)').text();
        imagem = $(this).closest('tr').find('td').find('img').attr('src');

        data = new FormData();
        data.append('titulo',titulo);
        data.append('descricao',descricao);
        data.append('imagem',imagem);

        $.confirm({
            title: 'Aviso!',
            content: 'Deseja adicionar o livro '+titulo+" nos favoritos?",
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: function () {

                    $.ajax({
                        type: "POST",
                        url: base+'livro/insert',
                        data: data,
                        processData: false,
                        contentType: false,
                        success:function(data){

                            console.log(data);

                            if(data == 'SUCCESS'){

                                notify("O livro foi adicionado com sucesso nos favoritos!","success");

                            }else if(data == 'ERROR'){

                                notify("Ocorreu um erro ao adicionar nos favoritos!","danger");

                            }

                        }
                    })        
                },
                cancel: function () {}
            }
        });

    })

    $(".btnDelete").click(function(e){

        e.preventDefault();

        var base = $('base').attr('url');
        var _title = $(this).attr('_title');
        var id_table = $(this).attr('id_table');
        var controller = $(this).attr('controller');        

        $.confirm({
            title: 'Aviso!',
            content: 'Tem certeza que deseja apagar '+_title+"?",
            type: 'red',
            typeAnimated: true,
            buttons: {
                confirm: function () {
                    $.ajax({
                        type: "POST",
                        url: base+controller+'/delete/'+id_table,
                        data: {"id_table":id_table},
                        success:function(data){
                            
                            if(data == "SUCCESS"){
                                notify("O livro foi apagado com sucesso!","success");
                                $('.overlay-loading').fadeIn();
                                setTimeout(function() { 
                                    $(location).attr('href','favorites');
                                }, 1000);
                            }else if(data == 'ERROR'){
                                notify("Ocorreu um erro ao excluir o registro!","danger");
                            }

                        }
                    })
                },
                cancel: function () {}
            }
        });

    })

});