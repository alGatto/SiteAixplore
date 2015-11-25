<?php
class Form {

	public $controller;
	public $errors;

	public function __construct($controller){
		$this->controller = $controller;
	}

	public function input($name, $label, $options=array()){
		$errors = false;
		$classError = '';
		if(isset($this->errors[$name])){
			$errors = $this->errors[$name];
			$classError = ' has-error has-feedback';
		} 
		if(!isset($this->controller->request->data->$name)){
			$value = '';
		} else {
			$value = $this->controller->request->data->$name;
		}
		if($label == 'hidden'){
			return '<input type="hidden" name="'.$name.'" value="'.$value.'" />';
		}
		$html = '	<div class="form-group'.$classError.'">
	    			<label for="input'.$name.'" class="col-sm-2 control-label">'.$label.'</label>';
	    if(!isset($options['type'])){
	    	$html .= '	<div class="col-xs-4">
	    				<input type="text" class="form-control" id="input'.$name.'" name="'.$name.'" value="'.$value.'" />';
	    } elseif($options['type'] == 'textarea') {
	    	$html .= '	<div class="col-sm-'.$options['cols'].'">
	    				<textarea class="form-control" rows="'.$options['rows'].'" id="input'.$name.'" name="'.$name.'">'.$value.'</textarea>';
	    } elseif($options['type'] == 'checkbox') {
	    	$html .= '	<div class="checkbox">
  						<label>
    						<input type="hidden" name="'.$name.'" value="0" />
  						</label>
  						<label>
    						<input type="checkbox" name="'.$name.'" value="1" '.(empty($value)?'':'checked').'/>
  						</label>
						</div>';
	    } elseif($options['type'] == 'file') {
	    	$html .= '	<div class="col-xs-4">
	    				<input type="file" class="input-file" id="input'.$name.'" name="'.$name.'" />';
	    } elseif($options['type'] == 'password') {
	    	$html .= '	<div class="col-xs-4">
	    				<input type="password" class="form-control" id="input'.$name.'" name="'.$name.'" value="'.$value.'" />';
	    } elseif($options['type'] == 'date') {
	    	$html .= '	<div class="col-xs-4">
	    				<input type="date" class="form-control" id="input'.$name.'" name="'.$name.'" value="'.$value.'" />';
	    } elseif($options['type'] == 'email') {
	    	$html .= '	<div class="col-xs-4">
	    				<input type="email" class="form-control" id="input'.$name.'" name="'.$name.'" value="'.$value.'" />';
	    }
	    if($errors){
	    	$html .= '	<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	    				<span id="inputError2Status" class="sr-only">(error)</span>
	    				<span id="helpBlock" class="help-block">'.$errors.'</span>';
	    }				
	    $html .= '</div></div>';
	    return $html;
	}

}