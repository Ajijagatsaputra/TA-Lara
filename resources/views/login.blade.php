<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Login Page</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .btn-block {
            width: 100%;
        }

        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6 mb-4 mb-md-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image" />
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form id="loginForm" novalidate>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg"
                                placeholder="Email address" required />
                            <label class="form-label mt-1" for="email">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Password" required />
                            <label class="form-label mt-1" for="password">Password</label>
                        </div>

                        <!-- Checkbox & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe"
                                    checked />
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(e) {
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            if (!email || !/\S+@\S+\.\S+/.test(email)) {
                alert("Please enter a valid email address.");
                e.preventDefault();
                return;
            }

            if (!password || password.length < 6) {
                alert("Password must be at least 6 characters.");
                e.preventDefault();
                return;
            }
        });
    </script>
</body>
</html>
