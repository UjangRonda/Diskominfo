<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Publik Kota Surakarta</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/keyframe.css" />
    <style>
        :root {
            --primary-color: #9e514c;
            --secondary-color: #D2691E;
            --bg-color: #FFF8DC;
            --text-color: #5D4037;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        table,
        td,
        th {
            font-family: 'Poppins', sans-serif !important;
        }


        .title-data {
            padding: 40px 20px;
            background: linear-gradient(rgba(139, 69, 19, 0.9), rgba(139, 69, 19, 0.7)), url('images/bg\ lagi.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .title-data h1 {
            font-size: 2.2rem;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin: 0;
            padding: 0 20px;
        }

        .content-wrapper {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin: 0 20px 40px 20px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            transition: all 0.3s ease;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            transform: translateY(-1px);
        }

        .dataTables_processing {
            animation: fadeIn 0.3s ease-in-out;
        }

        #myTable {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
        }

        #myTable thead th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            border: none;
            padding: 15px 10px;
            animation: slideIn 0.5s ease-out;
            animation-fill-mode: both;
        }

        #myTable tbody td {
            padding: 12px 10px;
            border-color: #f0f0f0;
        }

        #myTable tbody tr {
            transition: all 0.3s ease;
        }


        #myTable tbody tr:hover {
            background-color: #FFF3E0 !important;
            transition: all 0.2s ease;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(139, 69, 19, 0.1);
        }

        .dataTables_wrapper .dataTables_length select,
        .dataTables_wrapper .dataTables_filter input {
            background-color: white;
            border: 2px solid var(--primary-color);
            border-radius: 6px;
            padding: 6px 10px;
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(139, 69, 19, 0.2);
            transform: scale(1.02);
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: var(--primary-color) !important;
            color: white !important;
            border: none !important;
            border-radius: 5px;
            padding: 5px 12px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: var(--secondary-color) !important;
            color: white !important;
            border: none !important;
            transform: translateY(-1px);
        }


        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate {
            color: var(--text-color) !important;
            margin: 15px 0;
        }

        #myTable thead th:nth-child(1) {
            animation-delay: 0.1s;
        }

        #myTable thead th:nth-child(2) {
            animation-delay: 0.2s;
        }

        #myTable thead th:nth-child(3) {
            animation-delay: 0.3s;
        }

        #myTable thead th:nth-child(4) {
            animation-delay: 0.4s;
        }

        #myTable thead th:nth-child(5) {
            animation-delay: 0.5s;
        }

        #myTable thead th:nth-child(6) {
            animation-delay: 0.6s;
        }

        #myTable thead th:nth-child(7) {
            animation-delay: 0.7s;
        }

        #myTable thead th:nth-child(8) {
            animation-delay: 0.8s;
        }

        #myTable thead th:nth-child(9) {
            animation-delay: 0.9s;
        }

        @media (max-width: 768px) {
            .title-data h1 {
                font-size: 1.8rem;
            }

            .content-wrapper {
                padding: 15px;
                margin: 0 10px 30px 10px;
            }
        }

        header {
            background: linear-gradient(135deg, rgba(139, 62, 47, 0.9), rgba(184, 78, 58, 0.9)),
                url("images/bg3.png") center/cover no-repeat;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            margin: 0 auto;
            border-radius: 12px;
            max-width: 1200px;
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.html'; ?>

    <section class="main-content" style="margin-top: 100px;">
        <header>
            <h1>Daftar Informasi Publik Pemerintah Kota Surakarta Tahun 2024/2025</h1>
        </header>
        <div class="content-wrapper">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Informasi</th>
                        <th>Ringkasan Informasi</th>
                        <th>Pejabat yang Menguasai Informasi</th>
                        <th>Penanggung Jawab Informasi</th>
                        <th>Waktu Pembuatan Informasi</th>
                        <th>Bentuk Informasi yang tersedia</th>
                        <th>Jangka Waktu Menyimpan</th>
                        <th>Jenis Media yang memuat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Informasi Kebijakan</td>
                        <td>Peraturan Daerah</td>
                        <td>Kepala Bagian Hukum</td>
                        <td>Sekretariat Daerah</td>
                        <td>Januari 2024</td>
                        <td>PDF</td>
                        <td>Permanen</td>
                        <td>Website</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Informasi Keuangan</td>
                        <td>APBD 2024</td>
                        <td>Kepala BPKAD</td>
                        <td>BPKAD</td>
                        <td>Februari 2024</td>
                        <td>PDF, Excel</td>
                        <td>10 Tahun</td>
                        <td>Website, Arsip</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Informasi Program</td>
                        <td>Program Kerja 2024</td>
                        <td>Kepala Bappeda</td>
                        <td>Bappeda</td>
                        <td>Maret 2024</td>
                        <td>PDF</td>
                        <td>5 Tahun</td>
                        <td>Website, Arsip</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.html'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                responsive: true,
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Tidak ada data yang tersedia",
                    zeroRecords: "Data tidak ditemukan",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya"
                    }
                },
                initComplete: function() {
                    $('.dataTables_filter input').attr('placeholder', 'Cari data...');
                }
            });
        });
    </script>
    <script>
        document.body.classList.add('preload');

        window.addEventListener('load', function() {
            document.body.classList.remove('preload');
        });
    </script>
</body>

</html>