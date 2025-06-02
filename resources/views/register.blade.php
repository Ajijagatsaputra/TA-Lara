<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | SIKEMA - Politeknik Harapan Bersama</title>
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

        <!-- RIGHT Register Form -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
            <div class="login-box">
                <h5 class="fw-bold mb-1">Registrasi Akun Mahasiswa</h5>
                <h6 class="mb-3 fw-bold">Politeknik Harapan Bersama</h6>
                <p class="text-muted mb-4">Daftarkan akun untuk mengakses layanan akademik kampus.</p>

                <!-- Error messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
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

                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                               id="password" required>
                        <div class="invalid-feedback">Password minimal 6 karakter.</div>
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Konfirmasi Password"
                               name="password_confirmation" id="password_confirmation" required>
                        <div class="invalid-feedback">Konfirmasi password tidak cocok.</div>
                    </div>

                    <button type="submit" class="btn btn-dark w-100">Daftar</button>
                </form>

                <small class="d-block text-muted mt-3">Sudah punya akun? <a href="/login">Masuk di sini</a></small>
                <small class="d-block text-muted mt-2">© 2025 | Politeknik Harapan Bersama - Sisofo360</small>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector("form").addEventListener("submit", function (e) {
        const nim = document.getElementById("nim");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const confirm = document.getElementById("password_confirmation");

        let valid = true;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!nim.value.trim()) {
            nim.classList.add("is-invalid");
            valid = false;
        } else {
            nim.classList.remove("is-invalid");
        }

        if (!email.value.trim() || !emailRegex.test(email.value)) {
            email.classList.add("is-invalid");
            valid = false;
        } else {
            email.classList.remove("is-invalid");
        }

        if (password.value.length < 6) {
            password.classList.add("is-invalid");
            valid = false;
        } else {
            password.classList.remove("is-invalid");
        }

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
