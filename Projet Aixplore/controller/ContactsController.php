<?php
class ContactsController extends Controller{


	function index(){

		$this->loadModel('Contact');
		if($this->request->data){ 
			if($this->Contact->validates($this->request->data)){
				$headers = 'FROM: '.$this->request->data->email;
				$subject = $this->request->data->subject;
				$message = $this->request->data->message.'<br /> De : '.$this->request->data->name.' '.$this->request->data->firstname;

				if(mail('cocheteux.dylan@ynov.com', $subject, $message, $headers)){ // l'envoi ne semble pas se faire et les alertes ne fonctionnent pas...
					$this->Session->setFlash('Email send');
				} else {
					$this->Session->setFlash('Email don\'t send');
				}
				$this->redirect('contacts/index');
			} else {
				$this->Session->setFlash('Please complete the form.');
			}

		}
	}
	
}