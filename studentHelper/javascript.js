function SuccSign() {
  alert("Sign up successfull, you may now login.");
}

function newGroup() {
  alert("Study Group Added!");
}

function removeStudent() {
  alert("Student removed");
}

function groupJoined() {
  alert("Successfully joined group");
}

function wrongUserPass() {
  alert("Wrong username or password");
}

function roomAdded() {
  alert("Room Added");
}

function compareEmail(){
	//Compares the two emails to ensure they're the same
	var email = document.getElementById("email").value.toLowerCase();
	//Loads the first email entered and puts it in lowercase
	var confirmEmail = document.getElementById("confirmEmail").value.toLowerCase();
	//Loads the second email entered and puts it in lowercase
	if (email === confirmEmail){
		//If the emails match...
		document.getElementById("emailValid").src = "images/valid.png";
		document.getElementById("emailValid").alt = "The two email addresses match.";
		//Put a tick next to the second email
		document.getElementById("submit").disabled = false;
		//Enable the submit button
	}else{
		//Otherwise...
		document.getElementById("emailValid").src = "images/invalid.png";
		document.getElementById("emailValid").alt = "The two email addresses do not match.";
		//Put a cross next to the second email
		document.getElementById("submit").disabled = true;
		//Disable the submit button
	}
}
