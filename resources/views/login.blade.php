<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SIKEMA - Politeknik Harapan Bersama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/logo_phb.png">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .illustration {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .illustration img {
            max-width: 100%;
            height: auto;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        @media (max-width: 767.98px) {
            .illustration {
                display: none !important;
            }

            .login-box {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- LEFT Illustration (Hidden on mobile) -->
            <div class="col-md-6 illustration d-none d-md-flex">
                <img src="assets/media/favicons/logo-sikema.png" alt="Logo SIKEMA">
            </div>

            <!-- RIGHT Login Form -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-box">
                    <h5 class="fw-bold mb-1">Sistem Informasi Kemahasiswaan</h5>
                    <h6 class="mb-3 fw-bold">Politeknik Harapan Bersama</h6>
                    <p class="text-muted mb-4">Akses ke seluruh layanan akademik kampus dengan mudah dan cepat.</p>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Email" name="email" id="email"
                                required>
                            <div class="invalid-feedback">Mohon masukkan email yang valid.</div>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                id="password" required>
                            <div class="invalid-feedback">Password minimal 6 karakter.</div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="showPassword">
                            <label class="form-check-label" for="showPassword">Tampilkan Password</label>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Login</button>
                    </form>

                    <small class="d-block text-muted mt-3">Belum punya akun? <a href="/register">RegistrasiAkun</a></small>
                    <small class="d-block text-muted mt-2">© 2025 | Politeknik Harapan Bersama - Sisofo360</small>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            const emailInput = document.getElementById("email");
            const passwordInput = document.getElementById("password");
            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            let isValid = true;

            // Email validation
            if (!email || !emailRegex.test(email)) {
                emailInput.classList.add("is-invalid");
                isValid = false;
            } else {
                emailInput.classList.remove("is-invalid");
                emailInput.classList.add("is-valid");
            }

            // Password validation
            if (!password || password.length < 6) {
                passwordInput.classList.add("is-invalid");
                isValid = false;
            } else {
                passwordInput.classList.remove("is-invalid");
                passwordInput.classList.add("is-valid");
            }

            // Prevent form submit if not valid
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>


</body>

</html>
