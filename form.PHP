<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Pelanggan Salon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
        }
        .card {
            border-radius: 20px;
        }
        .card-header {
            border-radius: 20px 20px 0 0 !important;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="mb-0">
                        <i class="bi bi-scissors"></i> Registrasi Pelanggan Salon
                    </h4>
                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="bi bi-person-fill"></i> Nama Lengkap
                            </label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="bi bi-calendar"></i> Umur
                            </label>
                            <input type="number" class="form-control" name="umur" min="1" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="bi bi-telephone-fill"></i> Nomor Telepon
                            </label>
                            <input type="text" class="form-control" name="telp" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="bi bi-geo-alt-fill"></i> Alamat
                            </label>
                            <textarea class="form-control" name="alamat" rows="3" required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">
                                <i class="bi bi-save"></i> Daftar Sekarang
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $nama   = htmlspecialchars($_POST['nama']);
                $umur   = htmlspecialchars($_POST['umur']);
                $telp   = htmlspecialchars($_POST['telp']);
                $alamat = htmlspecialchars($_POST['alamat']);
                $antrian = rand(1, 100);

                echo "
                <div class='alert alert-success mt-4 shadow'>
                    <h5><i class='bi bi-check-circle-fill'></i> Registrasi Berhasil!</h5>
                    <hr>
                    <strong>Nomor Antrian:</strong> $antrian <br>
                    <strong>Nama:</strong> $nama <br>
                    <strong>Umur:</strong> $umur Tahun <br>
                    <strong>No Telp:</strong> $telp <br>
                    <strong>Alamat:</strong> $alamat
                </div>
                ";
            }
            ?>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>