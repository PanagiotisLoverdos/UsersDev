<?php

/**
 * Description of UsersController
 *
 * @author Billonas
 */
class PagesController extends AppController{
  
  	public $name = 'Pages';
  
	public $helpers = array('Html', 'Session','Js'); //To 'js' prepei na ginei 'Js' gia na douleuei
    
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
	
	function about(){
		
	}
	
	function help(){
		
	}
	
	function communication(){
		
	}
    
}

?>
