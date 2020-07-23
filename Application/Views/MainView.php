<?php 

namespace Application\Views;

class MainView
{
	
	private $folder;
	private $fileName;
	private $header;
	private $footer;

	const project_title = 'Google Books - Desafio';
	public $menuItems = array('Home','Pesquisa','Meus Favoritos');
	
	public function __construct($folder,$fileName,$header = 'header',$footer = 'footer'){
		$this->folder = $folder;
		$this->fileName = $fileName;
		$this->header = $header;
		$this->footer = $footer;
	}

	public function render($arr = []){
		include('pages/templates/'.$this->header.'.php');
		include('pages/'.$this->folder.'/'.$this->fileName.'.php');
		include('pages/templates/'.$this->footer.'.php');
	}
}

?>