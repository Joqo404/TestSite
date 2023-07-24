function button_show_password() {
	var input;
	input = document.getElementById("input-password-place");
	if (input.getAttribute('type') == 'password') {
		input.setAttribute('type', 'text');
	}
	else{
		input.setAttribute('type', 'password');
	}  
}