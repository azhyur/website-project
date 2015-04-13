function passwordStrength() {

    var strengths = ["Blank", "Very Weak", "Weak", "Medium", "Strong", "Very Strong"];
    var colors = ["#FF0000", "#FF0000", "#FFCC00", "#FFCC00", "#19D119", "#006600"];
    var score = 0;
    var regLower = /[a-z]/, regUpper = /[A-Z]/, regNumber = /\d/, regPunctuation = /[.,!@#$%^&*?_~\-£()]/;

    var password = document.getElementById('password').value;

    if (!password) {
        score = 0;
    } else if (password.length < 2) {
        score = 1;
    } else if (password.length < 4) {
        score = 2;
    } else if (password.length <= 7) {
        score = 3;
    } else {
        // length is >= 8 in here
        if (regLower.test(password) && regUpper.test(password) && regNumber.test(password)) {
            // if it also has punctuation, then it gets a 5, otherwise just a 4
            if (regPunctuation.test(password)) {
                score = 5;
            } else {
                score = 4;
            }
        } else {
            // if doesn't have upper, lower and numbers, then it gets a 3
            score = 3;
        }
    }

    var spanPwd = document.getElementById('spanPassword');

    spanPwd.innerHTML = strengths[score];

    spanPwd.style.color = colors[score];

}