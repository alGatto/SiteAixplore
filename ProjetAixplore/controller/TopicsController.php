<?php

class TopicsController extends Controller{

	function index(){
		//définition d'une variable qui va dire combien d'éléments on récupère
		$perPage = 15;
		//on charge le model
		$this->loadModel('Topic');
		//on va définir une condition pour aller chercher les éléments en BDD
		$conditions = array('type'=> 'Topic');
		// on va stocker toutes les données topics dans le tableau suivant la condition déclarée précédemment
		$d['topics'] = $this->Topic->find(array(
			'condition' => $conditions,
			'limit' => ($perPage*($this->request->page-1)).', '.$perPage
			));
		//On va compter le nombre de ligne retournée 
		$d['total'] = $this->Topic->findCount($conditions);
		$d['page'] = ceil($d['total']/ $perPage);
		$this->set($d);
	}
}