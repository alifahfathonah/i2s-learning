<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myform{

	function ftext($label,$name,$value,$tipe="text"){
		// tipe: text, password,email, date

		$str= "<div class=\"form_group mt-3\">\n";
		$str.= "  <label for=\"$name\">$label:</label>\n";
		$str.= "  <input type=\"$tipe\" name=\"$name\" value=\"$value\" class=\"form-control\" id=\"$name\">\n";
		$str.= "</div>";
	
		return $str;
	}


	#label,fld,tipe,value,class
	function ftarea($label,$name,$value,$row=5){
		$str= "<div class=\"form-group mt-3\">\n";
		$str.= " <label for=\"$name\">$label:</label>\n";
		$str.= " <textarea name=\"$name\" value=\"$value\" class=\"form-control\" rows=\"$rows\" id=\"$name\"></textarea>\n";
		$str.= "/div>\n";
		
		return $str;
	}

	function fcbx($label,$name,$value,$disabled=''){
		$str= "<div class=\"form-check-inline mt-3 ml-2\">";
		$str.= " <label class=\"form-check-label\">";
		$str.= " <input type=\"checkbox\" name=\"$name\" class=\"form-check-input\" value=\"$value\" $disabled>$label";
		$str.= " </label>";
		$str.= "</div>";
	
		return $str;
	}


	function fradio($label,$name,$value,$disabled=''){
		$str="<div class=\"form-check-inline mt-3 ml-2\">";
  		$str.="<label class=\"form-check-label\">";
    	$str.="<input type=\"radio\" class=\"form-check-input\" name=\"$name\" value=\"$value\" $disabled>$label";
  		$str.="</label>";
		$str.="</div>";

		return $str;
	}

	function fselect($label,$name,$options=array()){
		$str= "<div class=\"form-group\">";
		$str.=  "<label for=\"$name\">$label</label>";
		$str.=  "<select name=\"$name\" class=\"form-control\" id=\"$name\">";
		foreach($options as $option){
			$value=$option['value'];
			$oplabel=$option['label'];
			$str.=    "<option value=\"$value\">$oplabel</option>";
		};
		$str.=  "</select>";
		$str.="</div>" ;

		return $str;

	}


	function fsubmit($class=""){
		#class btn-primary, btn-danger dll
		$str="<hr><div class=\"text-right mt-3\"><button type=\"submit\" class=\"btn $class\">Submit</button></div>";
	
		return $str;
	}
}