function checkPasswords(){

	var password1 = document.getElementById('password');
	
	var con_password = document.getElementById('con_password');

	var message = document.getElementById('confirmMessage');

	var successColor = "#8ad572";

	var failColor = "#db8785";

	if(password1.value == con_password.value){

		con_password.style.backgroundColor = successColor;

		message.style.color = successColor;

		message.innerHTML = "Passwords Match"

	}
	
	else{

		con_password.style.backgroundColor = failColor;

		message.style.color = failColor;

		message.innerHTML = "Passwords do not match"

	}

}
