
function returnCreateAccount(){
    document.getElementById("createAccount").style.display = 'block';
    document.getElementById("createAccount-button").style.display = 'none';
}

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 


/* Remember me button idk if it works
-------------------------- */


// start this when DOM is ready
$(function(){
    var checkbox = $('#remember'),
        userField = $('#username'),
 
        // assign the key name to a variable
        // so we don't have to type it up every time
        key = 'savedUsername',
 
        // use jStorage to retrieve a stored key
        // on first load this is going to return undefined
        username = $.jStorage.get(key);
 
    // if a username was saved from previous session
    // set the value of the username field to that
    // tick off the checkbox and set focus on password field
    if (username) {
        userField.val(username);
        checkbox.prop('checked', true);
        $('#password').focus();
    }
 
    // if username wasn't saved then
    // set username field value to blank and focus on it
    // and make sure the checkbox is unchecked
    else {
        userField.val('').focus();
        checkbox.prop('checked', false);
    }
 
    // when form is submitted check the checkbox
    // if it's checked then save the username using jStorage
    // if not then delete whatever saved username exists
    $('#loginForm').submit(function(e){
        if (checkbox.prop('checked')) {
            $.jStorage.set(key, userField.val());
        }
        else {
            $.jStorage.deleteKey(key);
        }
    });
});