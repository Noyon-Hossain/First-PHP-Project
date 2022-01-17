<?php
function selectDisplayOptions($options){
	foreach ($options as $option) {
		printf("<option value='%s'>%s</option>\n", strtolower($option), ucwords($option));
	}
}

function selectDisplayCountey($counteryyy, $selectedValue){
	foreach ($counteryyy as $contyer) {
		$contyer  = strtolower($contyer);
		$selected = '';
		if (in_array($contyer, $selectedValue)) {
			$selected = ' selected';
		}
		printf("<option value='%s' %s>%s</option>\n", $contyer, $selected, ucwords($contyer));
	}
}


