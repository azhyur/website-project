function passwordStrength() {

    var strengths = ["Your password must be at least 8 characters long.", "Very Weak", "Weak", "Medium", "Strong", "Very Strong"];
    var colors = ["#FF0000", "#FF0000", "#FFCC00", "#FFCC00", "#19D119", "#006600"];
    var score = 0;
    var regLower = /[a-z]/, regUpper = /[A-Z]/, regNumber = /\d/, regPunctuation = /[.,!@#$%^&*?_~\-£()]/;

    var password = document.getElementById('password').value;

    if (password.length < 8) {
        score = 0;
    }
    else{
    if(password.length >=8 && password.length < 10){
	score = 1;
    }
    if(password.length >=10 && password.length < 12){
	score = 2;
    }
    if(password.length >=12){
        // length is >= 12 in here
	score = 3; 
    }
	if(regUpper.test(password)){
	    score++;
	}
	if(regNumber.test(password)){
 	    score++;
	}
        // if it also has punctuation, then it gets a 5, otherwise just a 4
        if (regPunctuation.test(password)) {
            score += 2;
        } 
	else {
            score += 1;
        }
    }

    if(score > 5)
	score = 5;

    var spanPwd = document.getElementById('spanPassword');

    spanPwd.innerHTML = strengths[score];

    spanPwd.style.color = colors[score];

}