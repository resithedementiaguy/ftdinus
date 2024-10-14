<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Tabel A4 Landscape</title>
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
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
                border-collapse: collapse;
            }

            th,
            td {
                padding: 8px;
                text-align: center;
                border: 1px solid black;
                font-size: 12px;
            }
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
    <div class="container mt-5">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td rowspan="5">logo</td>
                    <td rowspan="5">pdca</td>
                    <td rowspan="5">pdca</td>
                    <td rowspan="5">PDCA Analysis Sheet Report Student Outcome Program</td>
                    <td colspan="2">Dibuat</td>
                    <td colspan="2">Diketahui</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td></td>
                    <td>Date</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Assign</td>
                    <td></td>
                    <td>Assign</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nama</td>
                    <td></td>
                    <td>Nama</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kaprodi</td>
                    <td></td>
                    <td>Dekan</td>
                </tr>
                <tr>
                    <td colspan="8">P - PLAN</td>
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

                        <h6 class="h6 mb-3 text-black font-weight-bold">Root Cause Analysis</h6>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Problem</td>
                                    <td>Why 1</td>
                                    <td>Why 2</td>
                                    <td>Why 1</td>
                                    <td>Root Cause</td>
                                </tr>
                                <tr>
                                    <td>Baris 2, Kolom 1</td>
                                    <td>Baris 2, Kolom 2</td>
                                    <td>Baris 2, Kolom 3</td>
                                    <td>Baris 2, Kolom 4</td>
                                    <td rowspan="2">Baris 2, Kolom 5</td>
                                </tr>
                                <tr>
                                    <td>Baris 3, Kolom 1</td>
                                    <td>Baris 3, Kolom 2</td>
                                    <td>Baris 3, Kolom 3</td>
                                    <td>Baris 3, Kolom 4</td>
                                </tr>
                            </tbody>
                        </table>

                        <h6 class="h6 mb-3 text-black font-weight-bold">Rancangan Perbaikan</h6>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Problem</td>
                                    <td>Why 1</td>
                                </tr>
                                <tr>
                                    <td>Baris 2, Kolom 1</td>
                                    <td>Baris 2, Kolom 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">D - DO</td>
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
                                    <td>Baris 2, Kolom 1</td>
                                    <td>Baris 2, Kolom 2</td>
                                    <td>Baris 2, Kolom 2</td>
                                    <td>Baris 2, Kolom 2</td>
                                    <td>Baris 2, Kolom 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">C - CHECK</td>
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
                    <td colspan="8">A - ACTION</td>
                </tr>
                <tr>
                    <td colspan="8">ADSFADS</td>
                </tr>
            </tbody>
        </table>
    </div>
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
                    formatter: function (val) {
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