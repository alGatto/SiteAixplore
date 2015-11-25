<?php
class SubcriptionsController extends Controller{


	function index(){

		$this->loadModel('Subcription');
		if($this->request->data){
			if($this->Subcription->validates($this->request->data)){
				$this->Subcription->save($this->request->data);
				$this->redirect('layout/index');
				$this->Session->setFlash('You are successfully registered.'); // ça ne s'affiche pas
			} else {
				$this->Session->setFlash('Please complete the form.');
			}
		}

	}

}