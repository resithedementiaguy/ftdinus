<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDCA</title>
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style>
        @media print {
            @page {
                size: A4 portrait;
                margin: 10mm;
            }

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            table {
                width: 100%;
            }

            th,
            td {
                text-align: center;
                font-size: 12px;
            }
        }

        .table td,
        .table th {
            padding: 4px;
        }

        .kotak {
            margin-bottom: 12px;
            border: 2px solid black;
            text-align: center;
            padding: 6px;
        }
    </style>
</head>

<body>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td rowspan="5" class="text-center align-middle"><img src="<?= base_url('assets/img/logo_dinus.png') ?>" width="50" alt=""></td>
                <td rowspan="5" style="white-space: nowrap; font-size: 10px;">
                    P-D-C-A
                    <table style="border-collapse: collapse; width: 100%; margin: 0; padding: 0;">
                        <tr>
                            <td style="border: none; margin: 0; padding: 0;">Program Studi</td>
                            <td style="border: none; margin: 0; padding: 0;">: Teknik Elektro</td>
                        </tr>
                        <tr>
                            <td style="border: none; margin: 0; padding: 0;">Fakultas</td>
                            <td style="border: none; margin: 0; padding: 0;">: Teknik</td>
                        </tr>
                        <tr>
                            <td style="border: none; margin: 0; padding: 0;">Universitas</td>
                            <td style="border: none; margin: 0; padding: 0;">: Universitas Dian Nuswantoro</td>
                        </tr>
                        <tr>
                            <td style="border: none; margin: 0; padding: 0;">Tahun Ajaran</td>
                            <td style="border: none; margin: 0; padding: 0;">: 2021/2022</td>
                        </tr>
                        <tr>
                            <td style="border: none; margin: 0; padding: 0;">Title</td>
                            <td style="border: none; margin: 0; padding: 0;">: Evaluasi CPL 1</td>
                        </tr>
                    </table>
                </td>
                <td rowspan="5" class="text-center align-middle font-weight-bold" style="white-space: nowrap; font-size: 16px; margin: 0; padding: 0;">PDCA Analysis Sheet Report Student Outcome Program</td>
                <td colspan="2" class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Dibuat</td>
                <td colspan="2" class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Diketahui</td>
            </tr>
            <tr>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Date</td>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Date</td>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
            </tr>
            <tr>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0; height: 50px;">Assign</td>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0; height: 50px;">Assign</td>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
            </tr>
            <tr>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Dr. Ir. Aripin, M.Kom.</td>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Ir. Heru Agus Santoso, Ph.D</td>
            </tr>
            <tr>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Kaprodi Teknik Elektro</td>
                <td style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;"></td>
                <td class="text-center align-middle" style="white-space: nowrap; font-size: 10px; margin: 0; padding: 0;">Dekan Fakultas Teknik</td>
            </tr>
            <tr>
                <td colspan="8" style="border: 2px solid black; color: black;">P - PLAN</td>
            </tr>
            <tr>
                <td colspan="8">
                    <h6 class="h6 mb-3 text-black font-weight-bold">Data Capaian Pembelajaran Program Studi Teknik Elektro</h6>
                    <div class="row">
                        <div class="col-6">
                            <div id="chartCP" class="kotak"></div>
                        </div>
                        <div class="col-6">
                            <div id="chartperPI" class="kotak"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="kotak">
                                Kotak 1
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="kotak">
                                Kotak 2
                            </div>
                        </div>
                    </div>

                    <h5 class="h5 mb-3 text-black font-weight-bold">Root Cause Analysis</h5>
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="bg-primary text-center">
                                <td style="border: 2px solid black; color: white;">Problem</td>
                                <td style="border: 2px solid black; color: white;">Why 1</td>
                                <td style="border: 2px solid black; color: white;">Why 2</td>
                                <td style="border: 2px solid black; color: white;">Why 1</td>
                                <td class="bg-warning" style="border: 2px solid black; color: black;">Root Cause</td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime corrupti laborum voluptatem dolorum facere, aliquid eveniet qui cum numquam eos commodi inventore nam odio quod repudiandae maiores deserunt voluptate?</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime corrupti laborum voluptatem dolorum facere, aliquid eveniet qui cum numquam eos commodi inventore nam odio quod repudiandae maiores deserunt voluptate?</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime corrupti laborum voluptatem dolorum facere, aliquid eveniet qui cum numquam eos commodi inventore nam odio quod repudiandae maiores deserunt voluptate?</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime corrupti laborum voluptatem dolorum facere, aliquid eveniet qui cum numquam eos commodi inventore nam odio quod repudiandae maiores deserunt voluptate?</td>
                                <td rowspan="2" style="border: 2px solid black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime corrupti laborum voluptatem dolorum facere, aliquid eveniet qui cum numquam eos commodi inventore nam odio quod repudiandae maiores deserunt voluptate?</td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit rem facilis porro unde placeat fugit reiciendis accusantium sequi tempora dolore quidem, veritatis, numquam fugiat, pariatur veniam. Ullam nulla explicabo iste!</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit rem facilis porro unde placeat fugit reiciendis accusantium sequi tempora dolore quidem, veritatis, numquam fugiat, pariatur veniam. Ullam nulla explicabo iste!</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit rem facilis porro unde placeat fugit reiciendis accusantium sequi tempora dolore quidem, veritatis, numquam fugiat, pariatur veniam. Ullam nulla explicabo iste!</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit rem facilis porro unde placeat fugit reiciendis accusantium sequi tempora dolore quidem, veritatis, numquam fugiat, pariatur veniam. Ullam nulla explicabo iste!</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="h5 mb-3 text-black font-weight-bold">Rancangan Perbaikan</h5>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="bg-warning" style="border: 2px solid black; color: black;">Root Cause</td>
                                <td class="bg-warning" style="border: 2px solid black; color: black;">Tindakan Perbaikan</td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consequuntur dolorum nulla ratione harum magnam, facilis incidunt neque quas at doloribus sit commodi cumque soluta fugiat quisquam totam minima ipsum?</td>
                                <td style="border: 2px solid black;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis ratione facere nam inventore soluta maxime accusamus alias reprehenderit, rem aperiam, doloribus id nihil odio enim! Explicabo, tempora. Veniam, cum harum.</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="8" style="border: 2px solid black; color: black;">D - DO</td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="row">
                        <div class="col-6">
                            <div id="chartpi1" class="kotak"></div>
                        </div>
                        <div class="col-6">
                            <div id="chartpi2" class="kotak"></div>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Permasalahan</td>
                                <td>Analisis</td>
                                <td>Perbaikan</td>
                                <td>PIC</td>
                                <td>Tanggal</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, impedit, eveniet incidunt esse quibusdam ducimus, ad itaque quo odio commodi maxime saepe hic sunt ullam dolorem labore! Dignissimos, aliquid unde!</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, impedit, eveniet incidunt esse quibusdam ducimus, ad itaque quo odio commodi maxime saepe hic sunt ullam dolorem labore! Dignissimos, aliquid unde!</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, impedit, eveniet incidunt esse quibusdam ducimus, ad itaque quo odio commodi maxime saepe hic sunt ullam dolorem labore! Dignissimos, aliquid unde!</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, impedit, eveniet incidunt esse quibusdam ducimus, ad itaque quo odio commodi maxime saepe hic sunt ullam dolorem labore! Dignissimos, aliquid unde!</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, impedit, eveniet incidunt esse quibusdam ducimus, ad itaque quo odio commodi maxime saepe hic sunt ullam dolorem labore! Dignissimos, aliquid unde!</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="8" style="border: 2px solid black; color: black;">C - CHECK</td>
            </tr>
            <tr>
                <td colspan="8">
                    <div class="row">
                        <div class="col-6">
                            <div id="chartperbandingan" class="kotak"></div>
                        </div>
                        <div class="col-6">
                            <div id="chartperbaikan" class="kotak"></div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8" style="border: 2px solid black; color: black;">A - ACTION</td>
            </tr>
            <tr>
                <td colspan="8">ADSFADS</td>
            </tr>
        </tbody>
    </table>
</body>

<script>
    var options = {
        series: [{
                name: "Rata-rata CPP",
                data: [3.55, 3.58, 3.55, 3.55, 3.55, 3.55, 3.55, 3.55, 3.55]
            },
            {
                name: "Garis Standar"
            }
        ],
        chart: {
            type: 'bar',
            height: 380
        },
        plotOptions: {
            bar: {
                horizontal: false,
                endingShape: 'flat',
                dataLabels: {
                    position: 'top',
                },
            }
        },
        xaxis: {
            type: 'category',
            categories: ['CPP1', 'CPP2', 'CPP3', 'CPP4', 'CPP5', 'CPP6', 'CPP7', 'CPP8', 'CPP9'],
            labels: {
                style: {
                    fontSize: '12px',
                    fontWeight: 700
                }
            }
        },
        colors: ['#00BFFF', '#0000FF', '#FF0000'], // Warna biru muda untuk CPP, biru tua untuk Rata-rata CPP, dan merah untuk Garis Standar
        title: {
            text: 'Monitoring Pemenuhan CP Program Studi Periode 2020/2021 s.d 2021/2022',
        },
        tooltip: {
            enabled: true,
            x: {
                formatter: function(val) {
                    return val;
                }
            }
        },
        annotations: {
            yaxis: [{
                y: 2.0,
                borderColor: '#FF0000',
                label: {
                    borderColor: '#FF0000',
                    style: {
                        color: '#fff',
                        background: '#FF0000',
                    }
                }
            }]
        }
    };

    var chart = new ApexCharts(document.querySelector("#chartCP"), options);
    chart.render();

    var options = {
        series: [{
            name: "CPP",
            data: [{
                    x: 'Q1 2019',
                    y: 3.55
                },
                {
                    x: 'Q2 2019',
                    y: 3.55
                }
            ]
        }],
        chart: {
            type: 'bar',
            height: 380
        },
        xaxis: {
            type: 'category',
            categories: ['PI-1.1', 'PI-1.2'],
            labels: {
                style: {
                    fontSize: '12px',
                    fontWeight: 700
                }
            }
        },
        title: {
            text: 'Monitoring Pemenuhan CP Program Studi Periode 2020/2021 s.d 2021/2022',
        },
        tooltip: {
            enabled: true,
            x: {
                formatter: function(val) {
                    return val;
                }
            }
        },
        annotations: {
            yaxis: [{
                y: 2.0, // Titik Y untuk anotasi
                borderColor: '#FF0000', // Warna border anotasi
                label: {
                    style: {
                        color: '#fff',
                        background: '#FF0000',
                    }
                }
            }]
        }
    };

    var chart = new ApexCharts(document.querySelector("#chartperPI"), options);
    chart.render();

    var options = {
        series: [{
            data: [44, 55, 41, 64, 22, 43, 21]
        }, {
            data: [53, 32, 33, 52, 13, 44, 32]
        }],
        chart: {
            type: 'bar',
            height: 430
        },
        plotOptions: {
            bar: {
                horizontal: true,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        dataLabels: {
            enabled: true,
            offsetX: -6,
            style: {
                fontSize: '12px',
                colors: ['#fff']
            }
        },
        stroke: {
            show: true,
            width: 1,
            colors: ['#fff']
        },
        tooltip: {
            shared: true,
            intersect: false
        },
        xaxis: {
            categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
        },
    };

    var chart = new ApexCharts(document.querySelector("#chartpi1"), options);
    chart.render();

    var options = {
        series: [{
            data: [44, 55, 41, 64, 22, 43, 21]
        }, {
            data: [53, 32, 33, 52, 13, 44, 32]
        }],
        chart: {
            type: 'bar',
            height: 430
        },
        plotOptions: {
            bar: {
                horizontal: true,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        dataLabels: {
            enabled: true,
            offsetX: -6,
            style: {
                fontSize: '12px',
                colors: ['#fff']
            }
        },
        stroke: {
            show: true,
            width: 1,
            colors: ['#fff']
        },
        tooltip: {
            shared: true,
            intersect: false
        },
        xaxis: {
            categories: [2001, 2002, 2003, 2004, 2005, 2006, 2007],
        },
    };

    var chart = new ApexCharts(document.querySelector("#chartpi2"), options);
    chart.render();

    var options = {
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'Free Cash Flow',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
            title: {
                text: '$ (thousands)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chartperbaikan"), options);
    chart.render();

    var options = {
        series: [{
            name: "CPP",
            data: [{
                    x: 'Q1 2019',
                    y: 3.55
                },
                {
                    x: 'Q2 2019',
                    y: 3.55
                }
            ]
        }],
        chart: {
            type: 'bar',
            height: 380
        },
        xaxis: {
            type: 'category',
            categories: ['PI-1.1', 'PI-1.2'],
            labels: {
                style: {
                    fontSize: '12px',
                    fontWeight: 700
                }
            }
        },
        title: {
            text: 'Monitoring Pemenuhan CP Program Studi Periode 2020/2021 s.d 2021/2022',
        },
        tooltip: {
            enabled: true,
            x: {
                formatter: function(val) {
                    return val;
                }
            }
        },
        annotations: {
            yaxis: [{
                y: 2.0, // Titik Y untuk anotasi
                borderColor: '#FF0000', // Warna border anotasi
                label: {
                    style: {
                        color: '#fff',
                        background: '#FF0000',
                    }
                }
            }]
        }
    };

    var chart = new ApexCharts(document.querySelector("#chartperbandingan"), options);
    chart.render();
</script>

</html>