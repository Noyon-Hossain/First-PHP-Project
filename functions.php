<?php
function isCheckboxChecked($checkInput, $value){
	if (isset($_POST[$checkInput]) && is_array($_POST[$checkInput]) && in_array($value, $_POST[$checkInput])) {
		echo "checked";
	}
}

function isCheckedFruits($value){
	if (isset($_POST['fruits']) && is_array($_POST['fruits']) && in_array($value, $_POST['fruits'])) {
		echo "checked";
	}
}