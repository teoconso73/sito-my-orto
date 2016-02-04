/*function validateForm() {
    var x = document.forms["myForm"]["newpassword"].value;
	var y = document.forms["myForm"]["confirmpassword"].value;
    if (x != y) {
        $("#invalidpassw").html("le due  password non sono corrispondenti");
        return false;
    }
}*/

function InvalidMsg(textbox) {
    
    var x = document.forms["myForm"]["newpassword"].value;
	var y = document.forms["myForm"]["confirmpassword"].value;
    if (x != y) {
        textbox.setCustomValidity('Le due password non coincidono');
    }

  
    else {
        textbox.setCustomValidity('');
    }
    return true;
}