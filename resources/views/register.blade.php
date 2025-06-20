<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | SIKEMA - Politeknik Harapan Bersama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/media/favicons/logo_phb.png">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f7fa;
        }

        .illustration {
            background-color: #eef1f5;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .illustration img {
            max-width: 70%;
            height: auto;
        }

        .register-box {
            width: 100%;
            max-width: 450px;
            padding: 2rem;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.06);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.2);
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 1rem;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        @media (max-width: 767.98px) {
            .illustration {
                display: none !important;
            }
        }
    </style>
</head>

<body>
<div class="container-fluid h-100">
    <div class="row h-100">
        <!-- LEFT ILLUSTRATION -->
        <div class="col-md-6 illustration d-none d-md-flex">
            <img src="assets/media/favicons/logo-sikema.png" alt="Logo SIKEMA">
        </div>

        <!-- RIGHT REGISTER FORM -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
            <div class="register-box">
                <h5 class="fw-bold mb-1 text-center">Registrasi Akun Alumni</h5>
                <h6 class="mb-3 fw-bold text-primary text-center">Politeknik Harapan Bersama</h6>
                <p class="text-muted text-center mb-4">Daftarkan akun untuk mengakses layanan akademik kampus.</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="NIM" name="nim" id="nim" required>
                        <div class="invalid-feedback">NIM wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Tahun Angkatan" name="tahun_angkatan" id="tahun_angkatan" required>
                        <div class="invalid-feedback">Tahun Angkatan wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                        <div class="invalid-feedback">Mohon masukkan email yang valid.</div>
                    </div>

                    <div class="mb-3 position-relative">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        <span class="password-toggle" onclick="togglePassword('password')">👁️</span>
                        <div class="invalid-feedback">Password minimal 6 karakter.</div>
                    </div>

                    <div class="mb-3 position-relative">
                        <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" id="password_confirmation" required>
                        <span class="password-toggle" onclick="togglePassword('password_confirmation')">👁️</span>
                        <div class="invalid-feedback">Konfirmasi password tidak cocok.</div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 shadow-sm">Daftar</button>
                </form>

                <small class="d-block text-muted mt-3 text-center">
                    Sudah punya akun? <a href="/login" class="text-decoration-none">Masuk di sini</a>
                </small>
                <small class="d-block text-muted mt-2 text-center">
                    © 2025 | Politeknik Harapan Bersama - Sisofo360
                </small>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword(fieldId) {
        const input = document.getElementById(fieldId);
        input.type = input.type === 'password' ? 'text' : 'password';
    }

    document.querySelector("form").addEventListener("submit", function (e) {
        const nim = document.getElementById("nim");
        const angkatan = document.getElementById("tahun_angkatan");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const confirm = document.getElementById("password_confirmation");

        let valid = true;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validasi NIM
        if (!nim.value.trim()) {
            nim.classList.add("is-invalid");
            valid = false;
        } else {
            nim.classList.remove("is-invalid");
        }

        // Validasi Tahun Angkatan
        if (!angkatan.value.trim()) {
            angkatan.classList.add("is-invalid");
            valid = false;
        } else {
            angkatan.classList.remove("is-invalid");
        }

        // Validasi Email
        if (!email.value.trim() || !emailRegex.test(email.value)) {
            email.classList.add("is-invalid");
            valid = false;
        } else {
            email.classList.remove("is-invalid");
        }

        // Validasi Password
        if (password.value.length < 6) {
            password.classList.add("is-invalid");
            valid = false;
        } else {
            password.classList.remove("is-invalid");
        }

        // Validasi Konfirmasi Password
        if (confirm.value !== password.value) {
            confirm.classList.add("is-invalid");
            valid = false;
        } else {
            confirm.classList.remove("is-invalid");
        }

        if (!valid) {
            e.preventDefault();
        }
    });
</script>
</body>
</html>
