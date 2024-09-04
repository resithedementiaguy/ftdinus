<!DOCTYPE html>
<?php
/*defined('BASEPATH') OR exit('No direct script access allowed');

$pdf = new FPDF();
$pdf->AddPage();*/
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <style>
        body {
            font-family: 'Times New Roman', serif;
            font-size: 12px;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            padding: 10px;
        }

        .header::after {
            content: "";
            display: table;
            clear: both;
        }


        .header img,
        .header .text-container {
            display: inline-block;
            vertical-align: middle;
        }

        .header img {
            max-height: 100px;
            margin-right: 20px;
        }

        .header img {
            max-height: 100px;
            /* Gantilah sesuai kebutuhan */
            margin-right: 20px;
            /* Gantilah sesuai kebutuhan */
        }

        .header .text-container {
            text-align: center;
            flex-grow: 1;
        }

        .sub-header {
            text-align: center;
            font-weight: bold;
        }

        .bold-line {
            margin-bottom: 2px;
            border-bottom: 4px solid black;
        }

        .light-line {
            margin-bottom: 8px;
            border-bottom: 1px solid black;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table.no-border td {
            border: none;
            padding: 5px;
        }

        .table th,
        .table td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        .sign-area {
            text-align: right;
        }

        .line {
            border-bottom: 1px solid black;
            display: inline-block;
            width: 250px;
        }
    </style>
</head>

<body>
    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <?php
                    $path = base_url('assets/img/logo_dinus.png');
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    ?>
                    <img src="<?= $base64 ?>" alt="Logo" />
                </td>
                <td style="text-align: center;">
                    <h3><strong>FAKULTAS TEKNIK</strong></h3>
                    <h3><strong>UNIVERSITAS DIAN NUSWANTORO</strong></h3>
                    <p>Jl. Nakula I No. 5-11 Semarang 50131, Telp: (024) 3555628</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="sub-header">
        <div class="bold-line"></div>
        <div class="light-line"></div>
        <h4><strong>FORMULIR PENGAJUAN KERJA PRAKTIK</strong></h4>
        <h4>
            <strong>SEMESTER GANJIL | GENAP TAHUN __________ /
                __________</strong>
        </h4>
    </div>

    <!-- Table without borders -->
    <table class="table no-border" style="font-weight: bold;">
        <tr>
            <td style="width: 70px;">Nama</td>
            <td>:</td>
            <td style="width: 70px;">NIM</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td>E-mail</td>
            <td>:</td>
        </tr>
    </table>

    <table class="table">
        <tr>
            <th>Penanggungjawab</th>
            <th colspan="2">Keterangan</th>
            <th>Tanda Tangan Penanggungjawab</th>
        </tr>
        <tr>
            <td>Dosen Wali</td>
            <td>
                <input type="checkbox" /> <strong>Semester 5</strong> <br />
                <input type="checkbox" /> min. 90 SKS
                <strong>(s/d smstr 5)</strong> <br />
                <input type="checkbox" /> IPK min. 2.00 <br />
                <input type="checkbox" /> Lulus MK Statistik
            </td>
            <td>
                <input type="checkbox" /> <strong>Semester 6, dst.</strong>
                <br />
                <input type="checkbox" /> min. 108 SKS
                <strong>(s/d smstr 6)</strong> <br />
                <input type="checkbox" /> IPK min. 2.00 <br />
                <input type="checkbox" /> Lulus MK Statistik <br />
                <input type="checkbox" /> Sedang ambil MK Metopel
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Koordinator KP</td>
            <td colspan="2">Dosen Pembimbing yang ditunjuk:</td>
            <td></td>
        </tr>
        <tr>
            <td>Dosen Pembimbing</td>
            <td colspan="2">
                Rencana Lokasi:
                <br />
                ________________________________________
                <br />
                Rencana Topik:
                <br />
                ________________________________________
                <br />
                Rencana Waktu Pelaksanaan: __________ s/d __________
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Sekretariat</td>
            <td colspan="2">
                <input type="checkbox" /> Kertas KOP FT dan Amplop FT <br />
                <input type="checkbox" /> Nomor Surat:
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Koordinator KP</td>
            <td colspan="2">
                <input type="checkbox" /> Surat Permohonan ber-KOP Fakultas
                Teknik (wajib) <br />
                <input type="checkbox" /> Proposal (opsional, bila
                perusahaan membutuhkan)
            </td>
            <td></td>
        </tr>
    </table>
    <p>
        *Berikan tanda centang (√ ) pada tanda O dan
        <input type="checkbox" />
    </p>

    <div class="sign-area d-flex justify-content-end">
        <div class="text-center">
            <p class="mb-0">Semarang, <span class="line"></span></p>
            <br />
            <br />
            <br />
            <br />
            <p class="mb-0">
                <span class="line"></span>
                <br />(nama & tanda tangan mahasiswa)
            </p>
        </div>
    </div>
</body>

</html>
<?php
//$pdf->Output();
?>