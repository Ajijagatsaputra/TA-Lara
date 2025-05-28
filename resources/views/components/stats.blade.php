<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Statistik Institusi</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .stats-container {
      padding: 60px 0;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 30px 25px;
      margin-bottom: 30px;
      border: 1px solid rgba(0, 0, 0, 0.05);
      box-shadow: 0 15px 35px rgba(182, 167, 167, 0.08);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      text-align: center;
      text-decoration: none;
      color: inherit;
    }

    .stat-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .stat-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2);
      transform: scaleX(0);
      transition: transform 0.3s ease;
    }

    .stat-card:hover::before {
      transform: scaleX(1);
    }

    .stat-icon {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 28px;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .stat-icon::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: inherit;
      border-radius: 50%;
      filter: blur(10px);
      opacity: 0.3;
      transform: scale(1.2);
    }

    .stat-icon i {
      position: relative;
      z-index: 2;
    }

    .mahasiswa-icon {
      background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    }

    .dosen-icon {
      background: linear-gradient(135deg, #10b981, #047857);
    }

    .alumni-icon {
      background: linear-gradient(135deg, #f59e0b, #d97706);
    }

    .prestasi-icon {
      background: linear-gradient(135deg, #ef4444, #dc2626);
    }

    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      color: #2d3748;
      margin-bottom: 10px;
      background: linear-gradient(135deg, #3b82f6, #1d4ed8);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .stat-label {
      font-size: 0.95rem;
      font-weight: 600;
      color: #718096;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 8px;
    }

    .stat-description {
      font-size: 0.85rem;
      color: #a0aec0;
      font-style: italic;
    }

    .section-title {
      text-align: center;
      margin-bottom: 50px;
      color: #2d3748;
    }

    .section-title h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #1a202c;
    }

    .section-title p {
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto;
      color: #4a5568;
      opacity: 0.7;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }

    .bg-decoration {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
    }

    .bg-decoration::before,
    .bg-decoration::after {
      content: '';
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: rgba(59, 130, 246, 0.03);
    }

    .bg-decoration::before {
      top: 10%;
      right: 15%;
      animation: float 8s ease-in-out infinite;
    }

    .bg-decoration::after {
      bottom: 15%;
      left: 10%;
      animation: float 8s ease-in-out infinite reverse;
    }

    @media (max-width: 768px) {
      .stat-number {
        font-size: 2.5rem;
      }

      .section-title h2 {
        font-size: 2rem;
      }

      .stat-card {
        padding: 25px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="bg-decoration"></div>

  <div class="container stats-container">
    <div class="section-title">
      <h2>Statistik Institusi</h2>
      <p>Menampilkan data terkini civitas akademika dan pencapaian institusi</p>
    </div>

    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-icon mahasiswa-icon">
            <i class="fas fa-user-graduate"></i>
          </div>
          <div class="stat-label">Mahasiswa</div>
          <div class="stat-number" data-count="120">0</div>
          <div class="stat-description">Mahasiswa aktif</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-icon dosen-icon">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>
          <div class="stat-label">Dosen</div>
          <div class="stat-number" data-count="50">0</div>
          <div class="stat-description">Tenaga pengajar</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-icon alumni-icon">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="stat-label">Alumni</div>
          <div class="stat-number" data-count="112">0</div>
          <div class="stat-description">Lulusan terdaftar</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="stat-card">
          <div class="stat-icon prestasi-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <div class="stat-label">Prestasi</div>
          <div class="stat-number" data-count="85">0</div>
          <div class="stat-description">Penghargaan diraih</div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function animateCounters() {
      const counters = document.querySelectorAll('.stat-number');
      counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const stepTime = 16;
        const step = target / (duration / stepTime);
        let current = 0;

        const timer = setInterval(() => {
          current += step;
          if (current >= target) {
            counter.textContent = target;
            clearInterval(timer);
          } else {
            counter.textContent = Math.floor(current);
          }
        }, stepTime);
      });
    }

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.disconnect();
        }
      });
    }, { threshold: 0.5 });

    observer.observe(document.querySelector('.stats-container'));
  </script>
</body>
</html>
