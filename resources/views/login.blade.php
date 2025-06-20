<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SIKEMA - Politeknik Harapan Bersama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/logo_phb.png">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .illustration {
            background-color: #f1f3f5;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .illustration img {
            max-width: 70%;
            height: auto;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
            padding: 2rem;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.25);
        }

        @media (max-width: 767.98px) {
            .illustration {
                display: none !important;
            }

            .login-box {
                padding: 1.5rem;
                box-shadow: none;
            }
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- LEFT Illustration -->
            <div class="col-md-6 illustration d-none d-md-flex">
                <img src="assets/media/favicons/logo-sikema.png" alt="Logo SIKEMA">
            </div>

            <!-- RIGHT Login Form -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-box">
                    <h5 class="fw-bold mb-1 text-center">Sistem Informasi Kemahasiswaan</h5>
                    <h6 class="mb-3 fw-bold text-center text-primary">Politeknik Harapan Bersama</h6>
                    <p class="text-muted text-center mb-4">Akses layanan akademik kampus dengan mudah & cepat.</p>

                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" novalidate>
                        @csrf

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                            <div class="invalid-feedback">Mohon masukkan email yang valid.</div>
                        </div>

                        <div class="mb-3 position-relative">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                            <span class="password-toggle" onclick="togglePassword()">
                                👁️
                            </span>
                            <div class="invalid-feedback">Password minimal 6 karakter.</div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 shadow-sm">Login</button>
                    </form>

                    <small class="d-block text-muted mt-3 text-center">
                        Belum punya akun? <a href="/register" class="text-decoration-none">Registrasi Akun</a>
                    </small>
                    <small class="d-block text-muted mt-2 text-center">
                        © 2025 | Politeknik Harapan Bersama - Sisofo360
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            password.type = password.type === "password" ? "text" : "password";
        }

        document.querySelector("form").addEventListener("submit", function(e) {
            const emailInput = document.getElementById("email");
            const passwordInput = document.getElementById("password");
            const email = emailInput.value.trim();
            const password = passwordInput.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            let isValid = true;

            // Validasi Email
            if (!email || !emailRegex.test(email)) {
                emailInput.classList.add("is-invalid");
                isValid = false;
            } else {
                emailInput.classList.remove("is-invalid");
                emailInput.classList.add("is-valid");
            }

            // Validasi Password
            if (!password || password.length < 6) {
                passwordInput.classList.add("is-invalid");
                isValid = false;
            } else {
                passwordInput.classList.remove("is-invalid");
                passwordInput.classList.add("is-valid");
            }

            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
