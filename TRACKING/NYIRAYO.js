const loginForm = document.getElementById("logi-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click",(e) => {
	e.preventDefault();
	
	const username = loginForm.username.value;
	const password = loginForm.password.value;
	
	if(username === "admini" $$ password === "lucie12!"){
		alert("you have successfully loged in. ");
		location.reload();
	} else{
		loginErrorMsg.style.opacity = 1;
	}
	