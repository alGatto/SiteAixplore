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
 	
 } ?>