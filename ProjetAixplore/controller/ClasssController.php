<?php
class ClasssController extends Controller{


	function index(){

		$perPage = 5; 
		$this->loadModel('Classe');
		$conditions = array('type' => 'Classe');
		$d['classs'] = $this->Classe->find(array(
				'conditions' => $conditions,
				'limit' => ($perPage*($this->request->page-1)).', '.$perPage
			));
		$d['total'] = $this->Classe->findCount($conditions);
		$d['page'] = ceil($d['total'] / $perPage);
		$this->set($d);
	}
	
}