<?php 

if($this->request->prefix == '1'){
	$this->layout = 'layout';
	if(!$this->Session->isLogged() || $this->Session->user('status') != '1'){
		$this->redirect('users/login');
	}
}

?>