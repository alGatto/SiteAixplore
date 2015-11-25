<div class="bwrite">
	<div class="page-header">
		<h1>Restricted Area</h1>
	</div>

	<form method="post" action="<?php echo Router::url('users/login'); ?>" class="form-horizontal">
		<?php echo $this->Form->input('pseudo', 'Identifiant'); ?>
		<?php echo $this->Form->input('password', 'Mot de passe', array('type'=>'password')); ?>
		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-primary">Connect</button>
	    	</div>
	  	</div>
	</form>
</div>