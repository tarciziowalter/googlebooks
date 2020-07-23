<?php 

namespace Application\Controllers;
use Application\Core\Controller;
use Application\Core\Router;
use Application\Views\MainView;

class HomeController extends Controller
{

	
	public function index(){

        Router::get('',function(){
            $this->view = new MainView('','home');
            $this->view->render(array('titulo' => 'Home'));
        });

		Router::get('home',function(){
			$this->view = new MainView('','home');
			$this->view->render(array('titulo' => 'Home'));
		});
		
	}
	
}


?>