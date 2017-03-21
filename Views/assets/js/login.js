/**
 * Created by hamada on 20/03/17.
 */
(function () {
    // checkIfLoggedIn();
    $("#login").on("click", login);
    $("#signup").on("click", signup);
})();

function login(event) {
    event.preventDefault();
    var username = $("#login-form").find("#username").val();
    var password = $("#login-form").find("#password").val();
    username = username.trim();
    password = password.trim();

    if (username == "" || password == "") {
        alert("username or password is empty");
    } else {
        $.ajax({
            url: "../general.php",
            method: "POST",
            data: {"username": username, "password": password, "login": "login"},
            success: function (data) {
                data = JSON.parse(data);
                if (data) {
                    window.location.replace("./index.php");
                } else {
                    alert("error in the login");
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
}


function signup() {
    event.preventDefault();
    var username = $("#register-form").find("#username").val();
    var email = $("#register-form").find("#email").val();
    var password = $("#register-form").find("#password").val();
    var confirmPassword = $("#register-form").find("#confirm-password").val();
    username = username.trim();
    password = password.trim();
    email = email.trim();
    password = password.trim();
    confirmPassword = confirmPassword.trim();

    if (username == "" || password == "" || email=="" || password == "" || confirmPassword =="") {
        alert("Please fill all cells");
    } else {
        if(!password == confirmPassword){
            alert("Passwords doesn't match");
        }else{
            $.ajax({
                url: "../general.php",
                method : "POST",
                data : {
                    "username" : username,
                    "password" : password,
                    "email"    : email,
                    "signup"   : "signup"
                },
                success : function(data){
                    data = JSON.parse(data);
                    if(data){
                        window.location.replace("");
                    }else{
                        console.log(data);
                    }
                },
                error : function(error){
                    console.log(error);
                }
            });
        }
    }
}


function checkIfLoggedIn() {
    $.ajax({
        url: "../general.php",
        method: "POST",
        data: {"isLogged": "isLogged"},
        success: function (data) {
            data = JSON.parse(data);
            if (data) {
                window.location.replace("./index.php");
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}