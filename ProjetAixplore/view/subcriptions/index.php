<div class="bwrite">
	<div class="page-header">
		<h1>Nous sommes ravis de vous accueillir</h1>
	</div>

	<p>Veuillez rentrer vos informations pour suivre nos cours</p>

	<form method="post" action="<?php echo Router::url('subcriptions/index'); ?>" class="form-horizontal">
		<?php echo $this->Form->input('name', 'Nom*'); ?>
		<?php echo $this->Form->input('first_name', 'Prénom*'); ?>
		<?php echo $this->Form->input('b_date', 'Date de naissance*'); ?>
		<?php echo $this->Form->input('email', 'E-mail*', array('type'=>'email')); ?>
		<?php echo $this->Form->input('pseudo', 'Pseudo'); ?>
		<?php echo $this->Form->input('password', 'Mot de Passe*'); ?>
		<?php echo $this->Form->input('city', 'Ville*'); ?>
		<?php echo $this->Form->input('school', 'Ecole, collège ou lycée*'); ?>
		<?php echo $this->Form->input('id', 'hidden'); ?>
		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-primary">Enregistrer</button>
	    	</div>
	  	</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</div>