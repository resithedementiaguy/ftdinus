<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <style>
        body {
            font-family: 'Times New Roman', serif;
            font-size: 14px;
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

        .line2 {
            border-bottom: 1px solid black;
            display: inline-block;
            width: 187px;
        }

        .box {
            display: inline-block;
            width: 7px;
            height: 7px;
            border: 1px solid black;
            margin-right: 5px;
            vertical-align: middle;
        }

        .circle {
            display: inline-block;
            width: 7px;
            height: 7px;
            border: 1px solid black;
            margin-right: 5px;
            vertical-align: middle;
            border-radius: 50px;
        }

        .bold-text-underline {
            font-weight: bold;
            text-decoration: underline;
        }

        .text-bold{
            font-weight: bold;
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
                    if (!isset($base64)) {
                        $data = file_get_contents($path);
                        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                    }
                    ?>
                    <img src="<?= $base64 ?>" alt="Logo" />
                </td>
                <td style="text-align: center;">
                    <h3 style="font-size: 20px;"><strong>FAKULTAS TEKNIK</strong><br>
                    <strong>UNIVERSITAS DIAN NUSWANTORO</strong></h3>
                    <p>Jl. Nakula I No. 5-11 Semarang 50131, Telp: (024) 3555628</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="sub-header">
        <div class="bold-line"></div>
        <div class="light-line"></div>
        <h4 style="font-size: 18px;"><strong>FORMULIR PENGAJUAN KERJA PRAKTIK</strong><br>  
            <strong>SEMESTER GANJIL | GENAP TAHUN __________ /
                __________</strong>
        </h4>
    </div>

    <!-- Table without borders -->
    <table class="table no-border" style="font-size:17px;">
        <tr>
            <td style="width: 80px; font-weight: bold;">Nama</td>
            <td style="width: 1px;">:</td>
            <td style="width: 250px;"><?= $test?></td>
            <td style="width: 70px; font-weight: bold;">NIM</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Telepon</td>
            <td>:</td>
            <td><?= $test_1row?></td>
            <td style="font-weight: bold;">E-mail</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Status KP</td>
            <td>:</td>
            <td>
                <p><span class="box"></span> PRA-KP (BELUM KRS)</p>
            </td>
            <td colspan="3">
                <p><span class="box"></span> KP (SUDAH KRS)</p>
            </td>
        </tr>
    </table>
    <br>

    <table class="table">
        <tr>
            <th style="text-align: center;">Penanggungjawab</th>
            <th colspan="2" style="text-align: center;">Keterangan</th>
            <th style="text-align: center; width:120px; ">Tanda Tangan Penanggungjawab</th>
        </tr>
        <tr>
            <td style="font-weight: bold;">Dosen Wali</td>
            <td>
                <div class="bold-text-underline">
                    <span class="circle"></span> Semester 5
                </div><br><br>
                <span class="box"></span> min. 90 SKS <span class="text-bold">(s/d smstr 5)</span> <br />
                <span class="box"></span> IPK min. 2.00 <br />
                <span class="box"></span> Lulus MK Statistik <br>
            </td>
            <td>
                <br>
                <div class="bold-text-underline">
                    <span class="circle"></span> Semester 6, dst.
                </div><br><br>
                <span class="box"></span> min. 108 SKS <span class="text-bold">(s/d smstr 6)</span> <br />
                <span class="box"></span> IPK min. 2.00 <br />
                <span class="box"></span> Lulus MK Statistik <br />
                <span class="box"></span> Sedang ambil MK Metopel
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Koordinator KP</td>
            <td colspan="2">
                Dosen Pembimbing yang ditunjuk: <br><br>
                ________________________________________
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Dosen Pembimbing</td>
            <td colspan="2">
                Rencana Lokasi: <br /><br>
                ________________________________________
                <br />
                Rencana Topik: <br /><br>
                ________________________________________
                <br />
                Rencana Waktu Pelaksanaan: __________ s/d __________
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Sekretariat</td>
            <td colspan="2">
                <span class="box"></span> Kertas KOP FT dan Amplop FT <br />
                <span class="box"></span> Nomor Surat: <br>
                ________________________________________
            </td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Koordinator KP</td>
            <td colspan="2">
                <span class="box"></span> Surat Permohonan ber-KOP Fakultas Teknik <span class="text-bold">(wajib)</span> <br />
                <span class="box"></span> Proposal (<span class="text-bold">opsional</span>, bila perusahaan membutuhkan)
            </td>
            <td></td>
        </tr>
    </table>

    
    <p>*Berikan tanda centang (V) pada tanda <span class="circle"></span> dan <span class="box"></span></p>

    <br>
    <div class="sign-area">
        <div class="text-center">
            <p>Semarang, <span class="line2"></span></p>
            <br><br><br><br><br><br>
            <p>
                <span class="line"></span>
                <br />(nama & tanda tangan mahasiswa)
            </p>
        </div>
    </div>
</body>

</html>
