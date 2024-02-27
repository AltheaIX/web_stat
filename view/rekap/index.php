<?php
include '../../config.php';
error_reporting(0);

$sqla = "SELECT * FROM setting ORDER BY id DESC";
$stmta = $conn->prepare($sqla);
$stmta->execute();
$rowa = $stmta->fetch();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=p1, shrink-to-fit=no">
    <title><?php echo $rowa['nama']; ?></title>
    <link rel="icon" type="image/x-icon" href="images/160522011148_logo_dasawisma_5.png">
    <link rel="shortcut icon" href="images/160522011148_logo_dasawisma_5.png" />

    <script src="../../assets/js/pace.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/pace-theme-default.min.css">
    <!--Animate CSS -->
    <link rel="stylesheet" href="../../assets/css/animate.min.css" type="text/css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/custom.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/depan.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/print.css" type="text/css" media="print">
    <!-- Plugin css for this page -->

    <link rel="stylesheet" href="../../assets/css/jquery.toast.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="../../assets/css/summernote-bs4.css">
    <!-- End plugin css for this page -->
    <style media="screen">
        .form-group label {
            font-weight: 600;
        }

        .form-check-label {
            font-weight: 100 !important;
        }

        .required {
            color: #D02727
        }

        .linkabout:hover {
            text-decoration: none;
        }
    </style>

    <!-- plugins:js -->
    <script src="../../assets/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/sweetalert.min.js"></script>
    <script src="../../assets/js/jquery.toast.min.js"></script>
    <script src="../../assets/js/jquery.fancybox.min.js"></script>
    <script src="../../assets/js/select2.min.js"></script>
    <script src="../../assets/js/summernote-bs4.min.js"></script>
    <script src="../../assets/js/clipboard.min.js"></script>
    <script src="../../assets/js/loadingoverlay.min.js"></script>
    <script src="../../assets/js/Chart.min.js"></script>
    <script src="../../assets/js/chartjs-plugin-datalabels.js"></script>
    <script src="../../assets/js/chartjs-plugin-colorschemes.min.js"></script>
    <script src="../../assets/js/custom.js"></script>

    <!-- end plugins js -->
    // <script type="text/javascript">
    //     var BASE_URL = "https://dasawisma.pkk.makassarkota.go.id/";
    //     $(document).ready(function() {
    //         var t_message = '';
    //         var t_type = '';

    //         if (t_message.length > 0) {
    //             //showToast(t_type, t_message);
    //             swal(t_message, {
    //                 icon: t_type
    //             })
    //         }
    //     });
    // </script>

</head>

<body>
    <nav class="navbar col-lg-12 col-12 p-1 fixed-top d-flex flex-row d-print-none" style="background-color: #E54606;">
        <!-- Brand/logo -->
        <a class="navbar-brand brand-logo mr-0 d-print-none" href="#">
            <img class="ml-2 d-print-none" src="../../images/logo.png?p=1" alt="logo" style="width:170px;">
        </a>

        <ul class="navbar-nav navbar-nav-right mr-2">
            <li class="nav-item nav-profile">
                
                    
                        <a class="btn btn-outline-primary btn-icon-text" href="#">
                            <i class="mdi mdi-login text-warning"></i>
                            Login
                        </a>

                    
                            </li>
        </ul>

    </nav>
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel-center">
            <div class="content-wrapper mt-2"><div class="row">
    <div class="col-md-12 col-xl-12 mx-auto animated fadeIn delay-3s d-print-block">
        <?php
        $count = 1;

        $sql = $conn->prepare("SELECT id_kec, m_kecamatan.nama AS nama_kec, data_rekap.j_kel AS jumlah_kelurahan, data_rekap.j_rw AS jumlah_rw, data_rekap.j_rt AS jumlah_rt, data_rekap.j_dasawisma AS jumlah_dasawisma, data_rekap.j_kk AS jumlah_kk FROM `data_rekap` INNER JOIN m_kecamatan ON data_rekap.id_kec = m_kecamatan.id GROUP BY id_kec ORDER BY m_kecamatan.id ASC");
        $sql->execute();
        ?>
        <div class="card m-b-30 d-print-noborder">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <img class="img-sm rounded" src="../../images/160522011148_logo_dasawisma_5.png" alt="profile">
                    <div class="px-2 card-weather">
                        <div class="px-0">Data Sim <?php echo $rowa['nama']; ?></div>
                        <div class="px-0 text-muted small">Rekap Kota Bitung <i class="label bg-yellow"> <?php echo $sql->rowCount(); ?> Kecamatan </i></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-2 d-none">
                    <button type="button" id="reload" class="d-none  btn btn-sm btn-info-2 btn-icon-text"><i class="mdi mdi-backup-restore btn-icon-prepend"></i> Muat Ulang</button>
                    <a href="#" class="d-none btn btn-sm btn-sm btn-primary btn-icon-text"><i class="mdi mdi-chart-bar btn-icon-prepend"></i> Chart</a>

                </div>

                <div class="col mb-3 mt-3">
                    <h4 class="font-weight-normal text-center">Hasil Pendataan Real Time</h4>
                    <h4 class="font-weight-normal text-center mb-2">Kelompok Data Sim <?php echo $rowa['nama']; ?></h4>
                </div>

                <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>RW</th>
            <th>RT</th>
            <th>Dasawisma</th>
            <th>KK</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
            
            <?php
                   while($data=$sql->fetch()) {
                       
                ?>
                
          <tr>
              <td><?php echo $count; ?></td>
            <td><?php echo $data['nama_kec'];?></td>
            <td><?php echo $data['jumlah_kelurahan'];?></td>
            <td><?php echo $data['jumlah_rw'];?></td>
            <td><?php echo $data['jumlah_rt'];?></td>
            <td><?php echo $data['jumlah_dasawisma'];?></td>
            <td><?php echo $data['jumlah_kk'];?></td>
            <td>
              <div class="btn btn-primary" onclick="redirectKeHalamanDetail(<?php echo $data['id_kec'];?>)"> <i class="fa-solid fa-book"></i> Rekap
</div>
            </td>
          </tr>
          
          <?php
                $count=$count+1;
                } 
                ?>
          
          
        </tbody>
      </table>
                </div>
            </div>
        </div>
        
        <script>
    function redirectKeHalamanDetail(idKecamatan) {
        // Arahkan pengguna ke halaman baru dengan menyertakan ID Kecamatan
        window.location.href = 'detail_kecamatan.php?id_kecamatan=' + idKecamatan;
    }
</script>

       <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <h4>Bar Chart</h4>
        <div class="container-fluid">
            <?php
            include '../../config.php';
            error_reporting(E_ALL);

            // Query untuk mengambil data dari database
            $sql = "SELECT m.nama, d.j_rw, d.j_rt, d.j_a_total_l, d.j_a_total_p FROM m_kecamatan AS m INNER JOIN data_rekap AS d ON m.id = d.id_kec";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Mengonversi data dari database ke format yang dapat digunakan oleh Chart.js
            $data = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $kecamatan = $row['nama'];
                $data[$kecamatan] = [
                    "Value 1" => $row['j_rw'],
                    "Value 2" => $row['j_rt'],
                    "Value 3" => $row['j_a_total_l'],
                    "Value 4" => $row['j_a_total_p'],
                ];
            }

            $labels = json_encode(array_keys($data));
            $values = json_encode(array_values($data));
            ?>

            <div style="width: 100%; margin: auto;" class="">
                <canvas id="barChart"></canvas>
            </div>

            <script>
                // Mengambil data dari PHP dan mengonversi ke JavaScript
                var labels = <?php echo $labels; ?>;
                var values = <?php echo $values; ?>;

                // Membuat bar chart menggunakan Chart.js versi 3
                var ctx = document.getElementById('barChart').getContext('2d');
                var datasets = [];

                // Membuat dataset untuk setiap nilai
                var colors = ['rgba(173, 216, 230, 0.6)', 'rgba(0, 0, 128, 0.6)', 'rgba(144, 238, 144, 0.6)', 'rgba(0, 128, 0, 0.6)'];

                for (var i = 0; i < 4; i++) {
                    var dataset = {
                        label: ['Jumlah RW', 'Jumlah RT', 'Jumlah Laki-laki', 'Jumlah Perempuan'][i],
                        data: values.map(item => item['Value ' + (i + 1)]),
                        backgroundColor: colors[i],
                        borderColor: colors[i],
                        borderWidth: 1
                    };
                    datasets.push(dataset);
                }

                // Membuat bar chart dengan multiple datasets
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom',
                                labels: {
                                    text: ['Jumlah RW', 'Jumlah RT', 'Jumlah Laki-laki', 'Jumlah Perempuan']
                                }
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
</div>




<div class="print-new-page d-print-block"></div>

<div class="col-md-12 col-xl-12 mx-auto animated fadeIn delay-3s d-print-block">

    <div class="row mt-2">

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                 
                <div class="card-body">
                   <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(j_a_total_l) as total_laki,
                                    SUM(j_a_total_p) as total_perempuan,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $total_laki = $row_pie_chart['total_laki'];
                            $total_perempuan = $row_pie_chart['total_perempuan'];
                            $total = $total_laki + $total_perempuan;
                    ?>
                    <p class="card-title text-md-center text-xl-left">Jumlah Warga</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $total; ?></h3>
                        <i class="mdi mdi-human-male-female icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3 text-blue"><?php echo $total_laki; ?><span><small> Laki-Laki</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $total_perempuan; ?><span><small> Perempuan</small></span></h4>
                    </ul>
                  <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="totalwarga" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                
                 <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(j_a_total_l) as total_laki,
                                SUM(j_a_total_p) as total_perempuan
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Laki-Laki" => $row_chart_data['total_laki'],
                    "Perempuan" => $row_chart_data['total_perempuan']
                );
                ?>
               
                      var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("totalwarga", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(j_a_balita_l) as balita_laki,
                                    SUM(j_a_balita_p) as balita_perempuan,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $balita_laki = $row_pie_chart['balita_laki'];
                            $balita_perempuan = $row_pie_chart['balita_perempuan'];
                            $total = $balita_laki + $balita_perempuan;
                    ?>
                    <p class="card-title text-md-center text-xl-left">Jumlah Balita</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $total; ?></h3>
                        <i class="mdi mdi-human-male icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 text-blue"><?php echo $balita_laki; ?><span><small> Balita Laki-Laki</small></span></h4>
                        <h4 class="mb-2 mt-2 text-blue"><?php echo $balita_perempuan; ?><span><small> Balita Perempuan</small></span></h4>
                    </ul>
                    <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="jumlahBalita" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                 <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(j_a_balita_l) as balita_laki,
                                SUM(j_a_balita_p) as balita_perempuan
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Balita Laki-laki" => $row_chart_data['balita_laki'],
                    "Balita Perempuan" => $row_chart_data['balita_perempuan']
                );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("jumlahBalita", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(j_a_blaki) as buta_laki,
                                    SUM(j_a_bcwe) as buta_perempuan,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $buta_laki = $row_pie_chart['buta_laki'];
                            $buta_perempuan = $row_pie_chart['buta_perempuan'];
                            $total = $buta_laki + $buta_perempuan;
                    ?>
                    <p class="card-title text-md-center text-xl-left">Jumlah Warga Buta</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $total; ?></h3>
                        <i class="mdi mdi-human-female icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-2 text-blue"><?php echo $buta_laki; ?><span><small> Laki-Laki Buta</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $buta_perempuan; ?><span><small> Perempuan Buta</small></span></h4>
                        
                    </ul>
                     <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="menikahperempuan" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                 <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(j_a_blaki) as buta_laki,
                                SUM(j_a_bcwe) as buta_perempuan
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Laki-laki Buta" => $row_chart_data['buta_laki'],
                    "Perempuan Buta" => $row_chart_data['buta_perempuan']
                );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("menikahperempuan", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(kr_sehat) as rumah_sehat,
                                    SUM(kr_tdk_sehat) as rumah_tidak_sehat,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $rumah_sehat = $row_pie_chart['rumah_sehat'];
                            $rumah_tidak_sehat = $row_pie_chart['rumah_tidak_sehat'];
                            $total = $rumah_sehat + $rumah_tidak_sehat;
                    ?>
                    <p class="card-title text-md-center text-xl-left">Jumlah Rumah Warga</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $total; ?></h3>
                        <i class="mdi mdi-human-male-female icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3 text-blue"><?php echo $rumah_sehat; ?><span><small> Kriteria Rumah Sehat</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $rumah_tidak_sehat; ?><span><small> Kriteria Rumah Tidak Sehat</small></span></h4>
                    </ul>
                      <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="kriteriaRumah" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                  <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(kr_sehat) as rumah_sehat,
                                SUM(kr_tdk_sehat) as rumah_tidak_sehat
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Rumah Sehat" => $row_chart_data['rumah_sehat'],
                    "Rumah Tidak Sehat" => $row_chart_data['rumah_tidak_sehat']
                );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("kriteriaRumah", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(jr_tsampah) as tsampah,
                                    SUM(jr_spal) as spal,
                                    SUM(jr_jamban) as jamban,
                                    SUM(jr_stiker) as stiker,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $tsampah = $row_pie_chart['tsampah'];
                            $spal = $row_pie_chart['spal'];
                            $jamban = $row_pie_chart['jamban'];
                            $stiker = $row_pie_chart['stiker'];
                            $total = $row_pie_chart['total'];
                    ?>
                    <p class="card-title text-md-center text-xl-left">Kondisi Rumah Warga </p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        
                        <i class="mdi mdi-human-male-female icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3 text-blue"><?php echo $tsampah; ?><span><small> Memiliki Tempat Pembuangan Sampah</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $spal; ?><span><small> Memiliki SPAL </small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $jamban; ?><span><small> Memilik Jamban Keluarga</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $stiker; ?><span><small> Memilik Stiker P4K</small></span></h4>
                    </ul>
                       <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="kondisiRumahWarga" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                  <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(jr_tsampah) as sampah,
                                SUM(jr_spal) as spal,
                                SUM(jr_jamban) as jamban,
                                SUM(jr_stiker) as stiker
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Memiliki Tempat Pembuangan Sampah" => $row_chart_data['sampah'],
                    "Memiliki SPAL" => $row_chart_data['spal'],
                    "Memiliki Jamban" => $row_chart_data['jamban'],
                    "Memiliki Stiker P4K" => $row_chart_data['stiker'],
                    );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("kondisiRumahWarga", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>


        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(sak_pdam) as pdam,
                                    SUM(sak_sumur) as sumur,
                                    SUM(sak_sungai) as sungai,
                                    SUM(sak_dll) as dll,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $pdam = $row_pie_chart['pdam'];
                            $sumur = $row_pie_chart['sumur'];
                            $sungai = $row_pie_chart['sungai'];
                            $dll = $row_pie_chart['dll'];
                            // $total = $row_pie_chart['total'];
                    ?>
                    <p class="card-title text-md-center text-xl-left">Sumber Air Keluarga</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <i class="mdi mdi-home-variant icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-2 text-blue "><?php echo $pdam; ?><span><small> PDAM</small></span></h4>
                        <h4 class="mb-2 text-blue "><?php echo $sumur; ?><span><small> Sumur</small></span></h4>
                        <h4 class="mb-2 text-blue "><?php echo $sungai; ?><span><small> Sungai</small></span></h4>
                        <h4 class="mb-2 text-blue "><?php echo $dll; ?><span><small> DLL</small></span></h4>
                    </ul>
                     <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="SumberAirKeluarga" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                
                 <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(sak_pdam) as pdam,
                                SUM(sak_sumur) as sumur,
                                SUM(sak_sungai) as sungai,
                                SUM(sak_dll) as dll
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Memakai PDAM" => $row_chart_data['pdam'],
                    "Memakai Sumur" => $row_chart_data['sumur'],
                    "Memakai Sungai" => $row_chart_data['sungai'],
                    "Dll" => $row_chart_data['dll'],
                    );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("SumberAirKeluarga", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>
    </div>
</div>

<div class="print-new-page d-print-block"></div>

<div class="col-md-12 col-xl-12 mx-auto animated fadeIn delay-3s d-print-block">
    <div class="row mt-2">

        <div class="col-md-4 grid-margin stretch-card print-new-page">
            <div class="card">
                <div class="card-body">
                    <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(mp_beras) as beras,
                                    SUM(mp_nonberas) as nonberas,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $beras = $row_pie_chart['beras'];
                            $nonberas = $row_pie_chart['nonberas'];
                            // $total = $total_laki + $total_perempuan;
                    ?>
                    <p class="card-title text-md-center text-xl-left">Makanan Pokok</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <i class="mdi mdi-home-variant icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3  text-blue"><?php echo $beras; ?><span><small> Beras</small></span></h4>
                        <h4 class="mb-2 text-blue "><?php echo $nonberas; ?><span><small> Non Beras</small></span></h4>
                    </ul>
                    <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="rumahsehat" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                    
                 <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(mp_beras) as beras,
                                SUM(mp_nonberas) as nonberas
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Makanan Pokok Beras" => $row_chart_data['beras'],
                    "Makanan Pokok Non Beras" => $row_chart_data['nonberas']
                );
                ?>
               
                      var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("rumahsehat", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(kp_ternak) as peternakan,
                                    SUM(kp_ikan) as perikanan,
                                    SUM(kp_warung) as warung_hidup,
                                    SUM(kp_lumbung) as lumbung_hidup,
                                    SUM(kp_toga) as toga,
                                    SUM(kp_tanaman) as tanaman_keras,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $ternak = $row_pie_chart['peternakan'];
                            $ikan = $row_pie_chart['perikanan'];
                            $warung = $row_pie_chart['warung_hidup'];
                            $lumbung = $row_pie_chart['lumbung_hidup'];
                            $toga = $row_pie_chart['toga'];
                            $tanaman = $row_pie_chart['tanaman_keras'];
                            // $total = $total_laki + $total_perempuan;
                    ?>
                    <p class="card-title text-md-center text-xl-left">Pemanfaatan Tanah Pekarangan</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <i class="ion-person-stalker icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3 text-blue"><?php echo $ternak; ?><span><small> Peternakan</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $ikan; ?><span><small> Perikanan</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $warung; ?><span><small> Warung Hidup</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $lumbung; ?><span><small> Lumbung Hidup</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $toga; ?><span><small> Toga</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $tanaman; ?><span><small> Tanaman Keras</small></span></h4>
                    </ul>
                      <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="pemanfaatanTanahPekarangan" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                       
                 <?php
                // ambil data dari database untuk pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                SUM(kp_ternak) as peternakan,
                                    SUM(kp_ikan) as peternakan,
                                    SUM(kp_warung) as warung_hidup,
                                    SUM(kp_lumbung) as lumbung_hidup,
                                    SUM(kp_toga) as toga,
                                    SUM(kp_tanaman) as tanaman_keras
                            FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Peternakan" => $row_chart_data['peternakan'],
                    "Perikanan" => $row_chart_data['peternakan'],
                    "Warung Hidup" => $row_chart_data['warung_hidup'],
                    "Lumbung Hidup" => $row_chart_data['lumbung_hidup'],
                    "Toga" => $row_chart_data['toga'],
                    "Tanaman Keras" => $row_chart_data['tanaman_keras'],
                    
                );
                ?>
               
                      var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("pemanfaatanTanahPekarangan", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>


        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(j_a_hamil) as total_hamil,
                                    SUM(j_a_susui) as total_susui,
                                    (SUM(j_a_balita_p) + SUM(j_a_balita_l)) as total_balita,
                                    COUNT(*) as total 
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $total_hamil = $row_pie_chart['total_hamil'];
                            $total_susui = $row_pie_chart['total_susui'];
                            $total_balita = $row_pie_chart['total_balita'];
                            $total = $total_hamil + $total_susui + $total_balita;
                            
                    ?>
                    <p class="card-title text-md-center text-xl-left">Ibu dan Balita</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $total; ?></h3>
                        <i class="ion-person-stalker icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3 text-blue"><?php echo $total_hamil;?><span><small> Ibu Hamil</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $total_susui; ?><span><small> Ibu Menyusui</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $total_balita; ?><span><small> Balita</small></span></h4>
                    </ul>
                    <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="ibubalita" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                <?php
                // Fetch data from database for pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                                    SUM(j_a_hamil) as total_hamil,
                                                    SUM(j_a_susui) as total_susui,
                                                    (SUM(j_a_balita_p) + SUM(j_a_balita_l)) as total_balita
                                                FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Ibu Hamil" => $row_chart_data['total_hamil'],
                    "Ibu Menyusui" => $row_chart_data['total_susui'],
                    "Balita" => $row_chart_data['total_balita']
                );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("ibubalita", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                     <?php
                    // ambil data dari database
                        $sql_pie_chart = $conn->prepare("SELECT 
                                    SUM(i_pangan) as pangan,
                                    SUM(i_sandang) as sandang,
                                    SUM(i_jasa) as jasa
                                FROM data_rekap");
                        $sql_pie_chart->execute();
                        while ($row_pie_chart = $sql_pie_chart->fetch()) {
                            $pangan = $row_pie_chart['pangan'];
                            $sandang = $row_pie_chart['sandang'];
                            $jasa = $row_pie_chart['jasa'];
                    ?>
                    <p class="card-title text-md-center text-xl-left">Industri Rumah Tangga</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <i class="mdi mdi-school icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <ul>
                        <h4 class="mb-2 mt-3 text-blue"><?php echo $pangan; ?><span><small> Pangan</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $sandang; ?><span><small> Sandang</small></span></h4>
                        <h4 class="mb-2 text-blue"><?php echo $jasa; ?><span><small> Jasa</small></span></h4>
                    </ul>
                     <?php
                    }
                ?>
                </div>
                <div class="card-footer">
                    
			<canvas id="chartsekolah" class="chartjs-render-monitor mt-1" style="display: block; height: 210px; width: 100%;"></canvas>
                <script>
                   <?php
                // Fetch data from database for pie chart
                $sql_chart_data = $conn->prepare("SELECT 
                                                    SUM(i_pangan) as pangan,
                                    SUM(i_sandang) as sandang,
                                    SUM(i_jasa) as jasa
                                                FROM data_rekap");
                $sql_chart_data->execute();
                $row_chart_data = $sql_chart_data->fetch();

                $chart_data = array(
                    "Pangan" => $row_chart_data['pangan'],
                    "Sandang" => $row_chart_data['sandang'],
                    "Jasa" => $row_chart_data['jasa']
                );
                ?>
                    var xValues = <?php echo json_encode(array_keys($chart_data)); ?>;
                    var yValues = <?php echo json_encode(array_values($chart_data)); ?>;
                    new Chart("chartsekolah", {
						plugins: [ChartDataLabels],
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: yValues
                            }]
                        },
                        options: {
							responsive: true,
                            legend: {
                                display: true,
                                fullWidth: true,
                                position: "right",
                                labels: {
                                    boxWidth: 15
                                }
                            },
							plugins: {

								colorschemes: {
									scheme: "tableau.Tableau20"
								},
								datalabels: {
									borderColor: "black",
									borderRadius: 3,
									borderWidth: 0.7,
									color: "black",
									backgroundColor: "white",
									font: {
									  weight: "bold"
									},
									formatter: Math.round,
									display: "auto",
									align: "center",
									anchor: "center",
									rotation: "5"
									},

							}
                        }
                    });
                </script>
		                  </div>
            </div>
        </div>

       

      
       

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var table;
        //datatables
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "ordering": false,
            "iDisplayLength": 25,
            "responsive": {
                "details": {
                    "type": 'column',
                    "target": 'tr'
                }
            },
            "searching": false,
            "info": false,
            "bLengthChange": false,
            "oLanguage": {
                "sProcessing": '<i class="fa fa-spinner fa-spin fa-fw"></i> Loading...'
            },

           
            //Set column definition initialisation properties.
            "columnDefs": [{
                    "className": 'control text-center',
                    "targets": 0,
                    "orderable": false
                },

                {
                    "targets": 1,
                    "orderable": false
                },
                {
                    "orderable": false,
                    "targets": 2
                },
                {
                    "className": "d-print-none",
                    "orderable": false,
                    "targets": 9
                },
            ],
        });

        $("#reload").click(function() {
            table.ajax.reload();
        });


    });
</script></div>
<!-- content-wrapper ends -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">

                    DASAWISMA - V.1.3.5        <br>Copyright © 2024. <a href="#" class="text-navy" target="_blank">TP-PKK Kota Bitung</a>.
        </span>
        <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://ratomi.sulsel.net" class="linkabout text-navy" target="_blank">by. Ratomi</a></span> -->
    </div>
</footer>

<!-- partial  -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- modal -->
<div class="modal modal-top animated fadeInUp delay-30s" id="modalGue" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary  text-white">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalContent"></div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- js -->


<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/template.js"></script>
<script src="../../assets/js/settings.js"></script>
<script src="../../assets/js/todolist.js"></script>
<script src="../../assets/js/clipboard.js"></script>
<script src="../../assets/js/tooltips.js"></script>
<script src="../../assets/js/popover.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#modalGue').on('hide.bs.modal', function() {
            setTimeout(function() {
                $('.modal-dialog').removeClass('modal-lg modal-sm modal-md');
                $('#modalTitle, #modalContent , #modalFooter').html('');
            }, 500);
        });


        if ($(".select2").length) {
            $('.select2').select2();
        }

    });
</script>

</body>

</html>