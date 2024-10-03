<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="<?= base_url('kp_form/generate_pdf') ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik CPL berdasarkan tahun</h6>
                    <div>
                        <button class="btn btn-primary year-button" data-year="2021">2021</button>
                        <button class="btn btn-primary year-button" data-year="2022">2022</button>
                        <button class="btn btn-primary year-button" data-year="2023">2023</button>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <canvas id="cplChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- CPL Yearly Data for each year -->
    <script>
        const cplData = {
            '2021': [4, 3, 2, 4, 3, 4, 2, 3, 4, 2],
            '2022': [2, 4, 4, 3, 4, 2, 3, 2, 4, 4],
            '2023': [3, 2, 4, 2, 3, 2, 4, 4, 3, 2]
        };

        const ctx = document.getElementById('cplChart').getContext('2d');
        let cplChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4', 'CPL 5', 'CPL 6', 'CPL 7', 'CPL 8', 'CPL 9', 'CPL 10'],
                datasets: [{
                    label: 'CPL Data',
                    data: cplData['2021'], // Default to 2021 data
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Function to update chart data based on year button pressed
        document.querySelectorAll('.year-button').forEach(button => {
            button.addEventListener('click', function() {
                const year = this.getAttribute('data-year');
                cplChart.data.datasets[0].data = cplData[year];
                cplChart.update();

                updateCPL1Chart(year);
            });
        });
    </script>

    <!-- Content Row for CPL Chart -->
    <div class="row">
        <!-- CPL 1 Yearly Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">CPL 1 Yearly Data</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <canvas id="cpl1Chart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        const cpl1YearlyData = {
            '2021': [2],
            '2022': [2, 3],
            '2023': [2, 3, 4]
        };

        const ctxCpl1 = document.getElementById('cpl1Chart').getContext('2d');
        let cpl1Chart = new Chart(ctxCpl1, {
            type: 'bar',
            data: {
                labels: ['2021'], // Default to 2021 only
                datasets: [{
                    label: 'CPL 1 Data',
                    data: cpl1YearlyData['2021'], // Default data for 2021
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Function to update CPL 1 chart based on year button pressed
        function updateCPL1Chart(selectedYear) {
            const updatedLabels = Object.keys(cpl1YearlyData).filter(year => year <= selectedYear);
            const updatedData = updatedLabels.reduce((acc, year) => acc.concat(cpl1YearlyData[year]), []);

            cpl1Chart.data.labels = updatedLabels;
            cpl1Chart.data.datasets[0].data = updatedData;
            cpl1Chart.update();
        }
    </script>
    <!-- More charts can be added similarly for CPL 2, CPL 3, etc. -->
</div>
<!-- /.container-fluid -->