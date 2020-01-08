$(document).ready(function(){


	/*if(lastName.length<6){
		$("#inputLastName")
	}*/

	
	/*$("#inputLastName").mouseover(function(){
		$("#inputLastName").css("border-color", "orange");
	});
	*/

	var field1 = false;
	var field2 = false;
	var field3 = false;
	var field4 = false;
	var field5 = false;
	var field6 = false;
	var field7 = false;
	var field8 = false;


	$("form#signUp").submit(function(){


		/*===========================================
		=            REFERENCE TO LABELS            =
		===========================================*/
		/*  validateGender
			validateLastName
			validateFirstName
			validateAge
			validateUsername
			validatePassword
			validatePasswordConfirm
			countryDrop  */
			/*=====  End of REFERENCE TO LABELS  ======*/



			/*----------  Variable declarations  ----------*/
			var gender = $("input[name='gender']:checked").val();
			var lastName = $("input[name='lastname']").val();
			var firstName = $("input[name='firstname']").val();
			var age = $("input[name='age']").val();
			var userName = $("input[name='username']").val();
			var password = $("input[name='password']").val();
			var passwordConfirm = $("input[name='passwordCon']").val();
			var newsLetter = $("input[name='newsletter']:checked").val();
			var country = $("select[name='country']").val();

			var valid = true;
			var pvalid = true;



			/*----------  varaible inputs comment block  ----------*/
			var inputLastName = document.getElementById("#inputLastName");
			var inputFirstName = document.getElementById("#inputFirstName");
			var inputAge = document.getElementById("#inputAge");
			var inputUserName = document.getElementById("#inputUserName");
			var inputPass = document.getElementById("#inputPass");
			var inputPassCon = document.getElementById("#inputPassCon");
			var inputLastName = document.getElementById("#inputLastName");




		/*==========================================
		=            Radio button input            =
		==========================================*/
		if(!gender){
			$(".validateGender").fadeIn("slow");
			$(".validateGender").css("border-color", "red");
			valid = false;
		}else{
			$(".validateGender").fadeOut("slow");
			$(".validateGender").css("border-color", "green");
		}
		/*=====  End of Radio button input  ======*/







		/*=============================================
		=            last name input comment block            =
		=============================================*/
		if(lastName.length<2){
			$(".validateLastName").fadeIn("slow");
			$(".validateLastName").css("border-color", "red");
			$("#inputLastName").css("border-color", "red");
			valid = false;
			
		}else{
			$(".validateLastName").fadeOut("slow");
			$(".validateLastName").css("border-color", "green");
			$("#inputLastName").css("border-color", "green");
		}
		/*=====  End of last name input comment block  ======*/




		
		

		/*========================================
		=            first name input            =
		========================================*/
		if(firstName.length<2){
			$(".validateFirstName").fadeIn("slow");
			$(".validateFirstName").css("border-color", "red");
			$("#inputFirstName").css("border-color", "red");
			valid = false;
		}else{
			$(".validateFirstName").fadeOut("slow");
			$(".validateFirstName").css("border-color", "green");
			$("#inputFirstName").css("border-color", "green");
		}
		/*=====  End of first name input  ======*/




		
		
		/*=================================
		=            age input            =
		=================================*/
		if(age<5 || age>150){
			$(".validateAge").fadeIn("slow");
			$(".validateAge").css("border-color", "red");
			$("#inputAge").css("border-color", "red");
			valid = false;
		}else{
			$(".validateAge").fadeOut("slow");
			$(".validateAge").css("border-color", "green");
			$("#inputAge").css("border-color", "green");
		}
		/*=====  End of age input  ======*/







		/*======================================
		=            username input            =
		======================================*/
		if(userName.length<5){
			$(".validateUsername").fadeIn("slow");
			$(".validateUsername").css("border-color", "red");
			$("#inputUserName").css("border-color", "red");
			valid = false;
		}else{
			$(".validateUsername").fadeOut("slow");
			$(".validateUsername").css("border-color", "green");
			$("#inputUserName").css("border-color", "green");
		}
		/*=====  End of username input  ======*/




		


		/*======================================
		=            password input            =
		======================================*/
		if(password.length<6){
			$(".validatePassword").fadeIn("slow");
			$(".validatePassword").css("border-color", "red");
			$("#inputPass").css("border-color", "red");
			valid = false;
			pvalid = false;
		}else{
			$(".validatePassword").fadeOut("slow");
			$(".validatePassword").css("border-color", "green");
			$("#inputPass").css("border-color", "green");
		}
		/*=====  End of password input  ======*/







		/*==============================================
		=            password confirm input            =
		==============================================*/
		if(!pvalid || passwordConfirm != password){
			$(".validatePasswordConfirm").fadeIn("slow");
			$(".validatePasswordConfirm").css("border-color", "red");
			$("#inputPassCon").css("border-color", "red");
			valid = false;
		}else{
			$(".validatePasswordConfirm").fadeOut("slow");
			$(".validatePasswordConfirm").css("border-color", "green");
			$("#inputPassCon").css("border-color", "green");
			
		}
		/*=====  End of password confirm input  ======*/
		
		
		





		/*==============================================
		=            Checkbox confirm input            =
		==============================================*/
		if(country == ""){
			$(".countryDrop").fadeIn("slow");
			$(".countryDrop").css("border-color", "red");
			valid = false;
		}else{
			$(".countryDrop").fadeOut("slow");
			$(".countryDrop").css("border-color", "green");
		}
		/*=====  End of Checkbox confirm input  ======*/


		var gender = $('input[name="gender"]:checked').val();
		if(!gender){			
			field1 = false;
		}else{			
			field1 = true;			
		}

		var country = $("select[name='country']").val();
		
		if(country == ""){
			field8 = false;
		}else{
			field8 = true;
		}

		
		var genderText;
		if(document.getElementById('radioMale').checked){
			var genderText = "Male";
		}else if(document.getElementById('radioFemale').checked){
			var genderText = "Female";
		}
		

		if(field1 && field2 && field3 && field4 && field5 && field6 && field7 && field8){
			alert("Gender: " + genderText +"\n" + "Last name:" + lastName+"\n" + "First name: " + firstName+"\n" + "Age: " + age+"\n" + "Username: " + userName+"\n" + "Password: " + password+"\n" + "Password confirmation: " + passwordConfirm+"\n" + "Country: " + country);
		}


		


		return valid;
	});






		/*=============================================
		=            RZA button block            =
		=============================================*/

		/*----------  Reset input fields  ----------*/
		$("#btnRaz").click(function(){
			//document.querySelector('input[name="gender"]:checked').checked = false;
			
			/*----------  Reset input fields  ----------*/
			$('#inputLastName').val("");
			$('#inputLastName').css("background-color","white");
			$('#inputLastName').css("borderColor","lightgray");

			$('#inputFirstName').val("");
			$('#inputFirstName').css("background-color","white");
			$('#inputFirstName').css("borderColor","lightgray");

			$('#inputAge').val("");
			$('#inputAge').css("background-color","white");
			$('#inputAge').css("borderColor","lightgray");

			$('#inputUserName').val("");
			$('#inputUserName').css("background-color","white");
			$('#inputUserName').css("borderColor","lightgray");

			$('#inputPass').val("");
			$('#inputPass').css("background-color","white");
			$('#inputPass').css("borderColor","lightgray");

			$('#inputPassCon').val("");
			$('#inputPassCon').css("background-color","white");
			$('#inputPassCon').css("borderColor","lightgray");
			
			

			/*----------  Reset labels  ----------*/
			$(".validateGender").fadeOut("slow");
			$(".validateLastName").fadeOut("slow");
			$(".validateFirstName").fadeOut("slow");
			$(".validateAge").fadeOut("slow");
			$(".validateUsername").fadeOut("slow");
			$(".validatePassword").fadeOut("slow");
			$(".validatePasswordConfirm").fadeOut("slow");
			$(".countryDrop").fadeOut("slow");

			return false;
		});
		/*=====  End of RZA button block  ======*/



		inputFirstName.addEventListener("blur", function () {				
			if(inputFirstName.value.length < 2){
				inputFirstName.style.backgroundColor = "#fbff007a";
				field3 = false;
			}else{
				inputFirstName.style.backgroundColor = "#33ff0059";
				field3 = true;
			}							
		});

		inputFirstName.addEventListener("focus", function () {
			inputFirstName.style.backgroundColor = 'white';
		});  

		inputUserName.addEventListener("blur", function () {				
			if(inputUserName.value.length < 5){
				inputUserName.style.backgroundColor = "#fbff007a";
				field5 = false;
			}else{
				inputUserName.style.backgroundColor = "#33ff0059";
				field5 = true;
			}							
		});

		inputUserName.addEventListener("focus", function () {
			inputUserName.style.backgroundColor = 'white';
		});  

		inputPass.addEventListener("blur", function () {				
			if(inputPass.value.length < 6){
				inputPass.style.backgroundColor = "#fbff007a";
				field6 = false;
			}else{
				inputPass.style.backgroundColor = "#33ff0059";
				field6 = true;
			}							
		});

		inputPass.addEventListener("focus", function () {
			inputPass.style.backgroundColor = 'white';
		});  

		inputPassCon.addEventListener("blur", function () {				
			if(inputPassCon.value.length < 6 || inputPassCon.value != inputPass.value){
				alert("Password must match password confirmation");
				inputPassCon.style.backgroundColor = "#fbff007a";
				field7 = false;
			}else{
				inputPassCon.style.backgroundColor = "#33ff0059";
				field7 = true;
			}							
		});

		inputPassCon.addEventListener("focus", function () {
			inputPassCon.style.backgroundColor = 'white';
		});  

		inputLastName.addEventListener("blur", function () {				
			if(inputLastName.value.length < 2){
				inputLastName.style.backgroundColor = "#fbff007a";
				field2 = false;
			}else{
				inputLastName.style.backgroundColor = "#33ff0059";
				field2 = true;
			}							
		});

		inputLastName.addEventListener("focus", function () {
			inputLastName.style.backgroundColor = 'white';
		});  

		inputAge.addEventListener("blur", function () {				
			if(inputAge.value < 5 || inputAge.value > 150){
				inputAge.style.backgroundColor = "#fbff007a";
				field4 = false;
			}else{
				inputAge.style.backgroundColor = "#33ff0059";
				field4 = true;
			}							
		});

		inputAge.addEventListener("focus", function () {
			inputAge.style.backgroundColor = 'white';
		});  


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}




});



/*----------  REFERENCE  ----------*/
		/*  validateGender
			validateLastName
			validateFirstName
			validateAge
			validateUsername
			validatePassword
			validatePasswordConfirm
			countryDrop  */
