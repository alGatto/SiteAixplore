<?php 
 class UsersController extends Controller {
 	
 	/**
 	* Login
 	**/

 	function login() {
 		if($this->request->data) {
 			$data = $this->request->data;
 			$data->password = sha1($data->password);
 			$this->loadModel('User');
 			$user = $this->User->findFirst(array(
 				'conditions' => array('pseudo' => $data->pseudo, 'password' => $data->password) 
 				));
 			if(!empty($user)){
 				$this->Session->write('User',$user);
 			}
 			$this->request->data->password = '';
 		}
 		if($this->Session->isLogged()) {
 			if($this->Session->user('status') == '1') {
 				$this->redirect('index');
 			} else {
 				$this->redirect('');
 			}
 			
 		}
 	}

 	/**
 	* Logout
 	**/

 	function logout() {
 		unset($_SESSION['User']);
 		$this->Session->setFlash('You have been successfully logged out.');
 		$this->redirect('');
 	}

 	/**
 	* 	fonction inscription
 	**/
 	
 	function index(){
 		/**
		*  Fonction inscription
 		 **/
		$this->loadModel('User');  																		// On charge le model
		if($this->request->data){
			if($this->User->validates($this->request->data)){ 											// On  vérifie que nos règles sont bien respecter
				$this->request->data->create_date = date('Y-m-d h:i:s');
				$this->User->save($this->request->data);												// sauvegarde des informations et transformation en request avec la fonction save qui l'envoie a la bdd.
				$this->Session->setFlash('Le contenu a bien été modifié.');
				$this->redirect('index');
			} else {
				$this->Session->setFlash('Merci de corriger vos informations.', 'danger');
			}
		}
	}

 } ?>