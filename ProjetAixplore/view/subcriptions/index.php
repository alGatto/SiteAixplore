<div class="bwrite">
	<div class="page-header">
		<h1>To Participate in the Tournament</h1>
	</div>

	<p>Please fill out the form.</p>

	<form method="post" action="<?php echo Router::url('subcriptions/index'); ?>" class="form-horizontal">
		<?php echo $this->Form->input('name', 'Name*'); ?>
		<?php echo $this->Form->input('first_name', 'Firstname*'); ?>
		<?php echo $this->Form->input('email', 'E-mail*', array('type'=>'email')); ?>
		<?php echo $this->Form->input('pseudo', 'Pseudo'); ?>
		<?php echo $this->Form->input('id', 'hidden'); ?>
		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-primary">Send</button>
	    	</div>
	  	</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</div>