$(function(){	
var countryOptions;
	$.getJSON('countries.json',function(result){
		$.each(result, function(i,country) {
			//<option value='countrycode'>contryname</option>
			countryOptions+="<option value='"
			+country.currency_code+
			"'>"
			+country.country+ " "+ "(" +country.currency_code+")"
			"</option>";
			 });
			 $('#from').html(countryOptions);
	});
});


$(function(){	
var countryOptions;
	$.getJSON('countries.json',function(result){
		$.each(result, function(i,country) {
			//<option value='countrycode'>contryname</option>
			countryOptions+="<option value='"
			+country.currency_code+
			"'>"
			+country.country+ " "+ "(" +country.currency_code+")"
			"</option>";
			 });
			 $('#to').html(countryOptions);
	});
});









function checkInputs() {

const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');




	// trim to remove the whitespaces
	const fnameValue = fname.value.trim();
	const lnameValue = lname.value.trim();
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	
	if(fnameValue === '') {
		setErrorFor(fname, 'First Name cannot be blank');
	} else {
		setSuccessFor(fname);
	}

	if(lnameValue === '') {
		setErrorFor(lname, 'Last Name cannot be blank');
	} else {
		setSuccessFor(lname);
	}



	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}





