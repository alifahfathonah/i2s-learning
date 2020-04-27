<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myform{

	function ftext($label,$name,$value,$tipe="text"){
		
		$str=  "<div class=\"form-group row\">\n";
		$str.= "    <label for=\"$name\" class=\"col-sm-2 col-form-label\">$label</label>\n";
		$str.= "    <div class=\"col-sm-10\">\n";
		$str.= "      <input type=\"$tipe\" name=\"$name\" value=\"$value\" class=\"form-control\" id=\"$name\">\n";
		$str.= "    </div>\n";
		$str.= "</div>";
		
		return $str;
	}

	function ftarea($label,$name,$value,$rows=5){		
		$str=  "<div class=\"form-group row\">\n";
		$str.= "    <label for=\"$name\" class=\"col-sm-2 col-form-label\">$label</label>\n";
		$str.= "    <div class=\"col-sm-10\">\n";
		$str.= " <textarea name=\"$name\" class=\"form-control\" rows=\"$rows\" id=\"$name\">$value</textarea>\n";
		$str.= "    </div>\n";
		$str.= "</div>";
		return $str;
	}

	function fcbx($label,$label2,$name,$value,$disabled=''){
		$str= "<div class=\"form-group row\">\n";
		$str.= "   <div class=\"col-sm-2\">$label</div>\n";
		$str.= "   <div class=\"col-sm-10\">\n";
		$str.= "     <div class=\"form-check\">\n";
		$str.= "       <input class=\"form-check-input\" type=\"checkbox\" id=\"$name\" $disabled>\n";
		$str.= "       <label class=\"form-check-label\" for=\"$name\">\n";
		$str.= "         $label2\n";
		$str.= "       </label>\n";
		$str.= "     </div>\n";
		$str.= "   </div>\n";
		$str.= " </div>\n";

		return $str;
	}

	function fradio_tag($pos="begin"){
		//awal n akhir
		if($pos=='begin'){
			$str= "<fieldset class=\"form-group\">\n";
			$str.= "    <div class=\"row\">\n";
			$str.= "      <legend class=\"col-form-label col-sm-2 pt-0\">Radios</legend>\n";
			$str.= "      <div class=\"col-sm-10\">";
		}else{

			$str= "      </div>\n";
			$str.= "    </div>\n";
			$str.= "  </fieldset>";
		}

		return $str;
	}

	function fradio($label,$name,$value,$checked=''){

		$str= "<div class=\"form-check\">\n";
		$str.= "  <label class=\"form-check-label\">\n";
		$str.= "    <input type=\"radio\" class=\"form-check-input\" name=\"$name\" value=\"$value\" $checked>$label\n";
		$str.= "  </label>\n";
		$str.= "</div>";

		return $str;
	}






	function fselect($label,$name,$options=array()){
		
		$str=  "<div class=\"form-group row\">\n";
		$str.= "    <label for=\"$name\" class=\"col-sm-2 col-form-label\">$label</label>\n";
		$str.= "    <div class=\"col-sm-10\">\n";
		$str.=  "<select name=\"$name\" class=\"form-control\" id=\"$name\">";
		foreach($options as $option){
			$opvalue=$option['value'];
			$oplabel=$option['label'];
			$str.=    "<option value=\"$opvalue\">$oplabel</option>";
		};
		$str.=  "</select>";
		$str.= "    </div>\n";
		$str.= "</div>";
		
		return $str;
	}


	function fsubmit($class=""){
		#class btn-primary, btn-danger dll
		$str="<hr><div class=\"text-right mt-3\"><a href=\"javascript:history.back()\">Go Back</a><button type=\"submit\" class=\"btn $class\">Submit</button></div>";

		$str.="<script>function goBack() {
  window.history.back();
}
</script>";
	
		return $str;
	}
}