<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPARK</title>
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body class="bg-info">
    <div class="container">
        <!-- Login Form Start -->
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Sign in to Account</h1>
                        <hr class="my-3" />
                        <form action="#" method="post" class="px-3" id="login-form">
                            @csrf
                            <div id="loginAlert"></div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="far fa-envelope fa-lg fa-fw"></i></span>
                                </div>
                                <input type="email" id="email" name="email" class="form-control rounded-0"
                                    placeholder="E-Mail" required value="{{ \Cookie::get('email', '') }}" />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="fas fa-key fa-lg fa-fw"></i></span>
                                </div>
                                <input type="password" id="password" name="password" class="form-control rounded-0"
                                    minlength="5" placeholder="Password" required autocomplete="off" value="" />
                            </div>
                            <div class="form-group clearfix">
                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="rem"
                                        {{ \Cookie::get('email') ? 'checked' : '' }} />
                                    <label class="custom-control-label" for="customCheck">Remember me</label>
                                </div>
                                <div class="forgot float-right">
                                    <a href="#" id="forgot-link">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="login-btn" value="Sign In"
                                    class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Hello Sir/Mam!</h1>
                        <hr class="my-3 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start
                            your journey
                            with us!</p>
                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn"
                            id="register-link">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->
        <!-- Registration Form Start -->
        <div class="row justify-content-center wrapper" id="register-box" style="display: none;">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
                        <hr class="my-4 bg-light myHr" />
                        <p class="text-center font-weight-bolder text-light lead">To keep connected with us please login
                            with your
                            personal info.</p>
                        <button class="btn btn-outline-light btn-lg font-weight-bolder mt-4 align-self-center myLinkBtn"
                            id="login-link">Sign In</button>
                    </div>
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Create Account</h1>
                        <hr class="my-3" />
                        <form action="#" method="post" class="px-3" id="register-form">
                            @csrf
                            <div id="regAlert"></div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="far fa-user fa-lg fa-fw"></i></span>
                                </div>
                                <input type="text" id="name" name="name" class="form-control rounded-0"
                                    placeholder="Full Name" required />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="far fa-envelope fa-lg fa-fw"></i></span>
                                </div>
                                <input type="email" id="remail" name="email" class="form-control rounded-0"
                                    placeholder="E-Mail" required />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="fas fa-key fa-lg fa-fw"></i></span>
                                </div>
                                <input type="password" id="rpassword" name="password" class="form-control rounded-0"
                                    minlength="5" placeholder="Password" required />
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="fas fa-key fa-lg fa-fw"></i></span>
                                </div>
                                <input type="password" id="cpassword" name="cpassword"
                                    class="form-control rounded-0" minlength="5" placeholder="Confirm Password"
                                    required />
                            </div>
                            <div class="form-group">
                                <div id="passError" class="text-danger font-weight-bolder"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="register-btn" value="Sign Up"
                                    class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form End -->
        <!-- Forgot Password Form Start -->
        <div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
            <div class="col-lg-10 my-auto myShadow">
                <div class="row">
                    <div class="col-lg-7 bg-white p-4">
                        <h1 class="text-center font-weight-bold text-primary">Forgot Your Password?</h1>
                        <hr class="my-3" />
                        <p class="lead text-center text-secondary">To reset your password, enter the registered e-mail
                            adddress and
                            we will send you password reset instructions on your e-mail!</p>
                        <form action="#" method="post" class="px-3" id="forgot-form">
                            @csrf
                            <div id="forgotAlert"></div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i
                                            class="far fa-envelope fa-lg"></i></span>
                                </div>
                                <input type="email" id="femail" name="email" class="form-control rounded-0"
                                    placeholder="E-Mail" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" id="forgot-btn" value="Reset Password"
                                    class="btn btn-primary btn-lg btn-block myBtn" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">Reset Password!</h1>
                        <hr class="my-4 bg-light myHr" />
                        <button class="btn btn-outline-light btn-lg font-weight-bolder myLinkBtn align-self-center"
                            id="back-link">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forgot Password Form End -->
    </div>
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#register-link").click(function() {
                $("#login-box").hide();
                $("#register-box").show();
            });
            $("#login-link").click(function() {
                $("#login-box").show();
                $("#register-box").hide();
            });
            $("#forgot-link").click(function() {
                $("#login-box").hide();
                $("#forgot-box").show();
            });
            $("#back-link").click(function() {
                $("#login-box").show();
                $("#forgot-box").hide();
            });

            //Register Ajax request
            $("#register-btn").click(function(e) {
                if ($("#register-form")[0].checkValidity()) {
                    e.preventDefault();
                    $("#register-btn").val('Please wait...');
                    if ($("#rpassword").val() != $("#cpassword").val()) {
                        $("#passError").text('* Password did not matched!');
                        $("#register-btn").val('Sign up');
                    } else {
                        $("#passError").text('');
                        $.ajax({
                            url: '/register',
                            method: 'POST',
                            data: $('#register-form').serialize(),
                            success: function(response) {
                                // Set the button text back to normal
                                $("#register-btn").val('Sign up');
                                // If the registration was successful, redirect the user to the home page
                                if (response === 'register') {
                                    window.location = '/home';
                                } else {
                                    // If the registration was not successful, display the error -- here I can use custom error message with custom responses
                                    $("#regAlert").html(response);
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                // If validation fails, the server will respond with a 422 status code
                                if (jqXHR.status === 422) {
                                    // Clear the previous errors
                                    $("#regAlert").html('');
                                    // Set the button text back to normal
                                    $("#register-btn").val('Sign up');
                                    // Get the errors from the response
                                    var errors = jqXHR.responseJSON.errors;

                                    // Loop through each error and display it
                                    $.each(errors, function(key, value) {
                                        $("#regAlert").append('<p>' + value + '</p>');
                                    });
                                } else {
                                    // If the server responds with a status code other than 422
                                    $("#regAlert").html(
                                        'An error occurred while processing your request. Please try again.'
                                    );
                                }
                            }
                        });
                    }
                }
            });

            //login ajax request
            $("#login-btn").click(function(e) {
                if ($("#login-form")[0].checkValidity()) {
                    e.preventDefault();

                    $("#login-btn").val('Please Wait...');
                    $.ajax({
                        url: '/login',
                        method: 'POST',
                        data: $("#login-form").serialize(),
                        success: function(response) {
                            $("#login-btn").val('Sign In');
                            if (response === 'login') {
                                window.location = '/home';
                            } else {
                                $("#loginAlert").html(response);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            // If validation fails, the server will respond with a 422 status code
                            if (jqXHR.status === 422) {
                                // Clear the previous errors
                                $("#loginAlert").html('');
                                // Set the button text back to normal
                                $("#login-btn").val('Sign up');
                                // Get the errors from the response
                                var errors = jqXHR.responseJSON.errors;

                                // Loop through each error and display it
                                $.each(errors, function(key, value) {
                                    $("#loginAlert").append('<p>' + value + '</p>');
                                });
                            }
                            // Using auth attempt method in controller that returns 401 status code 
                            else if (jqXHR.status === 401) {
                                // Set the button text back to normal
                                $("#login-btn").val('Sign In');
                                // Display the server's error message
                                $("#loginAlert").html(jqXHR.responseText);
                            } else {
                                // Set the button text back to normal
                                $("#login-btn").val('Sign In');
                                // If the server responds with a status code other than 422 or 401
                                $("#loginAlert").html(
                                    'An error occurred while processing your request. Please try again.'
                                );
                            }
                        }
                    });
                }
            });

            //forgot password ajax request
            $("#forgot-btn").click(function(e) {
                if ($("#forgot-form")[0].checkValidity()) {
                    e.preventDefault();

                    $("#forgot-btn").val('Please Wait...');

                    $.ajax({
                        url: '/forget-password',
                        method: 'POST',
                        data: $('#forgot-form').serialize(),
                        success: function(response) {
                            // Set the button text back to normal
                            $("#forgot-btn").val('Reset Password');
                            $("#forgot-form")[0].reset();
                            // $("#forgotAlert").html(response);

                            // Show the success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response,
                            });
                        },
                        error: function(response) {
                            // Set the button text back to normal
                            $("#forgot-btn").val('Reset Password');

                            // Show the error message
                            var errors = response.responseJSON.errors;
                            var error_message = '';

                            for (var error in errors) {
                                error_message += errors[error] + ' ';
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: error_message,
                            });
                        }
                    });
                }
            });




        });
    </script>
</body>

</html>
