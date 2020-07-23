<?php

namespace Application\Controllers;
use Application\Core\Controller;
use Application\Core\Router;
use Application\Models\LivroModel;
use Application\Views\MainView;


class LivroController extends Controller
{
    
    public function index(){       
     
        Router::get('livro/success',function(){
            $this->view = new MainView('livro','success');
            $this->view->render(array(
                'livros' => LivroModel::findAll()
            ));
        });

        Router::get('livro',function(){
            $this->view = new MainView('livro','index');
            $this->view->render(array());
        });

        Router::get('livro/favorites',function(){
            $this->view = new MainView('livro','favorites');
            $this->view->render(array(
                'livros' => LivroModel::findAll()
            ));
        });

        Router::get('livro/insert',function(){
            $this->_insert();
        });

        Router::get('livro/delete/?',function($param){

            if(LivroModel::delete($param[2])){
                
                echo "SUCCESS";

            }else{

                echo "ERROR";   

            }

        });

    }


    private function _insert(){
        
       if (isset($_POST['titulo']) AND isset($_POST['descricao']) AND isset($_POST['imagem'])) {
            
            $titulo = addslashes($_POST['titulo']);
            $descricao = addslashes($_POST['descricao']);
            $imagem = addslashes($_POST['imagem']);

            LivroModel::insert(array('titulo' => $titulo, 'descricao' => $descricao, 'imagem' => $imagem));
            
            echo 'SUCCESS';  

        }else{

            Redirect::to('produto/index');

        }
    }

}


?>