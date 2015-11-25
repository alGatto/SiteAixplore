<div class="bwrite">
	<div class="page-header">
		<h1>We'd love to hear from you</h1>
	</div>

	<p>Please fill in the form below, specifying the subject of your question or request and we'll get back to you :-)</p>

	<form method="post" action="<?php echo Router::url('contacts/index'); ?>" class="form-horizontal">
		<?php echo $this->Form->input('name', 'Name*'); ?>
		<?php echo $this->Form->input('firstname', 'Firstname*'); ?>
		<?php echo $this->Form->input('email', 'E-mail*', array('type'=>'email')); ?>
		<?php echo $this->Form->input('subject', 'Subject*'); ?>
		<?php echo $this->Form->input('message', 'Message', array('type'=>'textarea', 'rows' => 10, 'cols' => 7)); ?>
		<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-10">
	      		<button type="submit" class="btn btn-primary">Send</button>
	    	</div>
	  	</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
</div>