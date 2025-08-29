<?php
/* ===== Students data ===== */
$students = [
  ['id'=>'20003','name'=>'Ahmed Ali','email'=>'ahmed@gmail.com','gap'=>88.7],
  ['id'=>'30304','name'=>'Mona Khalid','email'=>'mona@gmail.com','gap'=>78.5],
  ['id'=>'10002','name'=>'Bilal Hmaza','email'=>'bilal@gmail.com','gap'=>98.7],
  ['id'=>'10005','name'=>'Said Ali','email'=>'said@gmail.com','gap'=>98.7],
  ['id'=>'10007','name'=>'Mohammed Ahmed','email'=>'mohamed@gmail.com','gap'=>98.7],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Students Resume</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" />
  <!-- Core theme CSS (Bootstrap theme) -->
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    .avatar-emoji{font-size:72px; line-height:1; display:inline-block;}
    .card .badge{font-size:.9rem;}
  </style>
</head>
<body id="page-top">
  <!-- Side Nav (kept minimal) -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Students</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="..." />
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#students">Students</a></li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid p-0">

    <!-- Students Section -->
    <section class="resume-section" id="students">
      <div class="resume-section-content">
        <h2 class="mb-5">Students</h2>

        <div class="row g-4">
          <?php foreach ($students as $i => $s): ?>
            <?php
              // choose color variant by GAP
              $variant = ($s['gap'] >= 90) ? 'success'
                       : (($s['gap'] < 80) ? 'warning' : 'primary');
              $textEmphasis = "text-{$variant}-emphasis";
              $bgSubtle     = "bg-{$variant}-subtle";
              $bdSubtle     = "border border-{$variant}-subtle";
            ?>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card shadow-lg border-0 h-100 <?= $bgSubtle ?> <?= $bdSubtle ?>">
                <div class="card-body text-center p-4 <?= $textEmphasis ?>">
                  <!-- Emoji instead of image -->
                  <div class="avatar-emoji mb-3" aria-hidden="true">🧑‍🎓</div>

                  <h5 class="card-title mb-1"><?= htmlspecialchars($s['name']) ?></h5>
                  <div class="text-muted mb-3">Student #<?= $i+1 ?></div>

                  <div class="d-grid gap-2 text-start small">
                    <div><i class="fa-solid fa-id-card fa-fw me-1"></i><strong>ID:</strong> <?= htmlspecialchars($s['id']) ?></div>
                    <div><i class="fa-solid fa-envelope fa-fw me-1"></i><strong>Email:</strong>
                      <a href="mailto:<?= htmlspecialchars($s['email']) ?>"><?= htmlspecialchars($s['email']) ?></a>
                    </div>
                    <div>
                      <i class="fa-solid fa-chart-simple fa-fw me-1"></i><strong>GAP:</strong>
                      <span class="badge <?= ($s['gap']>=90)?'bg-success':
                                              (($s['gap']<80)?'bg-warning text-dark':'bg-primary') ?>">
                        <?= number_format((float)$s['gap'],1) ?>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-transparent text-center small text-muted">
                  <i class="fa-solid fa-user-graduate me-1"></i> Profile
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <p class="mt-4"><strong>Total Students:</strong> <?= count($students) ?></p>
      </div>
    </section>
    <hr class="m-0" />

  </div>

  <!-- Bootstrap core JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
