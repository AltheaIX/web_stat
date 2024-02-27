<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DASAWISMA - Dashboard</title>
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
  <script type="text/javascript">
    var BASE_URL = "https://dasawisma.pkk.makassarkota.go.id/";
    $(document).ready(function() {
      var t_message = '';
      var t_type = '';

      if (t_message.length > 0) {
        //showToast(t_type, t_message);
        swal(t_message, {
          icon: t_type
        })
      }
    });
  </script>

</head>

<body class="sidebar-fixed">
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center navbar-light text-white" style="background-color: #E54606;">
        <a class="navbar-brand brand-logo mr-1" href="https://dasawisma.pkk.makassarkota.go.id/app/dashboard"><img src="../../images/logo.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="https://dasawisma.pkk.makassarkota.go.id/app/dashboard"><img src="../../images/logok.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end navbar-light text-white" style="background-color: #E54606;">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>

        <ul class="navbar-nav mr-lg-2 align-self-auto">
          <li class="nav-item align-items-center justify-content-center align-middle align-self-auto">
            <p class="text-center align-middle">DASAWISMA PKK Kota Bitung </p>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">

                                                <img src="../../images/logok.png" alt="profile" />
                                          </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

              
                              <a class="dropdown-item" href="#">
                  <i class="mdi mdi-login text-primary"></i>
                  Login
                </a>
              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper ">
      <!-- Menu -->
      <nav class="sidebar sidebar-offcanvas bg-gradient-dark" style="background-color: #ffffff !important;" id="sidebar">
  <ul class="nav">
                                                        <li class="nav-item active">
              <a class="nav-link" target="" href="#">
                <i class="mdi mdi-laptop menu-icon text-yellow"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
                                                                            <li class="nav-item ">
              <a class="nav-link" target="" href="#">
                <i class="mdi mdi-account-plus menu-icon text-yellow"></i>
                <span class="menu-title">Registrasi</span>
              </a>
            </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class="nav-item ">
              <a class="nav-link" target="" href="#">
                <i class="mdi mdi-view-list menu-icon text-green"></i>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
                                                                                                                                                                                                                            <li class="nav-item ">
              <a class="nav-link" target="" href="#">
                <i class="mdi mdi-login-variant menu-icon "></i>
                <span class="menu-title">Login</span>
              </a>
            </li>
                              </ul>
</nav>      <!-- Selesai Menu -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- RUNNING TEXT INFORMASI -->
                    <!-- Selesai Running Text --><div class="row">
    <div class="col-lg-12">
        <div class="text-center d-none">
            Dashboard        </div>
        <div class="card">
            <div class="card-body">
                <h5>Hai, Selamat Datang Pengguna Aplikasi</h5>
                <p class="card-description">
                    Semoga hari anda menyenangkan                </p>

                            </div>
        </div>
    </div>
</div>

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Sebelum menggunakan aplikasi, anda diharuskan terdaftar sebagai pengguna. Jika anda
                        belum terdaftar silahkan melakukan registrasi terlebih dahulu, dan jika
                        anda telah terdaftar dan terverifikasi, silahkan melanjutkan dengan login.</p>
                    <hr>
                    <div class="mt-2 text-center">
                        <a href="#" class="btn btn-sm btn-warning btn-icon-text"><i class="mdi mdi-login btn-icon-prepend"></i>Login</a>
                        <a href="#" class="btn btn-sm btn-info btn-icon-text"><i class="mdi mdi-account-plus btn-icon-prepend"></i>Registrasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="mt-2 text-center">
    <a href="../rekap/" class="btn btn-sm btn-info btn-icon-text"><i class="mdi mdi-elevation-rise btn-icon-prepend"></i>Rekap Data</a>
</div></div>
<!-- content-wrapper ends -->
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">

          DASAWISMA - V.1.3.5    <br>Copyright © 2024. <a href="https://pkk.makassarkota.go.id" class="text-navy" target="_blank">TP-PKK Kota Bitung</a>.
    </span>
    <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand Made by. <a href="https://ratomi.sulsel.net" class="linkabout text-navy" target="_blank">Ratomi</a></span> -->
  </div>

<!-- 
  <style>
    .floatwhatsapp {
      position: fixed;
      width: 30px;
      height: 30px;
      bottom: 30px;
      right: 25px;
      background-image: url('https://dasawisma.pkk.makassarkota.go.id/_temp/backend/whatsapp.svg');
      background-size: contain;
      color: #FFF;
      border-radius: 20px;
      text-align: center;
      font-size: 35px;
      box-shadow: 2px 2px 2px #999;
      z-index: 100;
    }
  </style>
  <a href="https://chat.whatsapp.com/CMsb85OCX8JHXeeeFPR9qA" class="floatwhatsapp" target="_blank"></a>
   -->
  <!-- <a href="https://api.whatsapp.com/send?phone=6282292360962" class="floatwhatsapp" target="_blank"></a> -->
  
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

<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/off-canvas.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/hoverable-collapse.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/template.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/settings.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/todolist.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/clipboard.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/tooltips.js"></script>
<script src="https://dasawisma.pkk.makassarkota.go.id/_temp/backend/js/popover.js"></script>
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


    $(document).on("click", "#reset-pwd", function(e) {
      e.preventDefault();
      $('.modal-dialog').addClass('modal-md');
      $("#modalTitle").text('Reset Password');
      $('#modalContent').load($(this).attr("href"));
      $("#modalGue").modal('show');
    });

    if ($(".text-editor").length) {
      $('.text-editor').summernote({
        height: ($(window).height() - 250),
        tabsize: 1,
        minHeight: null,
        maxHeight: null,
        dialogsInBody: true,
        dialogsFade: true,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['height', ['height']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ],
        callbacks: {
          onImageUpload: function(image) {
            uploadImage(image[0]);
          },
          onInit: function() {
            var label = $(this).attr('data-original-label');
            var next_class = $(this).next();
            $(next_class).addClass(label);
            $(next_class).find('.btn-fullscreen').attr('data-label', label);
            $(next_class).find('button[data-original-title="Picture"]').attr('data-label', label);
            $(document).on("click", "button[data-label='" + label + "']", function(e) {
              e.preventDefault();
              var label_modal = $(this).data('label');
              $(".modal[aria-label='Insert Image']").attr('data-label', '');
              $('.button-file-manager').remove();
              var modal_filemanager = $(".modal[aria-label='Insert Image']").attr('data-label', label_modal);
              $(".modal[data-label='" + label_modal + "'] .modal-body").append('<div class="button-file-manager"></div>');
              $(".button-file-manager").html('<p id="filemanager-note"><a class="btn btn-sm btn-warning" target="_blank" href="https://dasawisma.pkk.makassarkota.go.id/app/filemanager">Open Filemanager</a></p>');
            });

            $(document).on("click", ".btn-fullscreen[data-label='" + label + "']", function(e) {
              e.preventDefault();
              var isFullscreen = $(".text-editor[data-original-label='" + label + "']").summernote('fullscreen.isFullscreen');
              if (isFullscreen) {
                $(".fixed-top").css('z-index', '0');
                $(".sidebar").css('z-index', '0');
              } else {
                $(".fixed-top").css('z-index', '1030');
                $(".sidebar").css('z-index', '11');
              }

            });
          }
        }
      });


      // $(".modal[aria-label='Insert Image']").on('hide.bs.modal', function () {
      //   setTimeout(function(){
      //       $('.button-file-manager').remove();
      //     }, 500);
      //  });


      function uploadImage(image) {
        var data = new FormData();
        data.append("file", image);
        $.ajax({
          url: "https://dasawisma.pkk.makassarkota.go.id/app/dashboard/imageUploadEditor",
          cache: false,
          contentType: false,
          processData: false,
          data: data,
          type: "POST",
          dataType: 'JSON',
          success: function(json) {
            if (json.success == true) {
              $('.text-editor').summernote("insertImage", json.file);
            } else {
              showToast('error', json.msg);
            }
          },
          error: function(data) {
            console.log(data);
          }
        });
      }
    }

    $('.btn-remove-file').on('click', function() {
      var data_id = $(this).data('id');
      $(".btn-remove-file[data-id='" + data_id + "']").hide();
      $(".file-dir[data-id='" + data_id + "']").val("");
      $(".file-name[data-id='" + data_id + "']").val("");
      $(".image-upload-default[data-id='" + data_id + "']").val("");
      $(".document-upload-default[data-id='" + data_id + "']").val("");
    });

    // dari disini
    const MAX_WIDTH = 800;
    const MAX_HEIGHT = 800;
    const MIME_TYPE = "image/jpeg";
    const QUALITY = 1;
    // sampai disini

    // upload single image
    $('.image-upload-browse').on('click', function() {
      var data_id = $(this).data('id');
      var file = $(".image-upload-default[data-id='" + data_id + "']");

      //console.log(data_id);
      //console.log(file);

      file.focus().trigger('click');

    });


    $('.image-upload-default').on('change', function(ev) {
      var data_id = $(this).data('id');
      $(".image-upload-browse[data-id='" + data_id + "']").html(`<div class="spinner-border-custom spinner-border text-light" role="status"">
                                     <span class="sr-only">Loading...</span>
                                        </div>`);
      var file_data = $(".image-upload-default[data-id='" + data_id + "']").prop("files")[0];
      var form_data = new FormData();

      const MAX_WIDTH = 800;
      const MAX_HEIGHT = 800;
      const MIME_TYPE = file_data.type; // "image/jpeg";
      const QUALITY = 1;

      // dari disini
      const file = file_data
      const blobURL = URL.createObjectURL(file);
      const img = new Image();

      img.src = blobURL;
      img.onerror = function() {
        URL.revokeObjectURL(this.src);
        // Handle the failure properly
        console.log("Cannot load image");
      };

      console.log("img src : " + img.src);

      img.onload = function() {
        var namafilenya = file_data.name;
        URL.revokeObjectURL(this.src);
        const [newWidth, newHeight] = calculateSize(img, MAX_WIDTH, MAX_HEIGHT);
        const canvas = document.createElement("canvas");
        canvas.width = newWidth;
        canvas.height = newHeight;
        const ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0, newWidth, newHeight);
        canvas.toBlob(
          blob => {
            // Handle the compressed image. es. upload or save in local state
            //displayInfo('Original file', file);
            //displayInfo('Compressed file', blob);
            //console.log(dataURL);
            //console.log(blob);
            const file_upload = new File([blob], namafilenya);

            form_data.append("file", file_upload);
            $.ajax({
              url: 'https://dasawisma.pkk.makassarkota.go.id/app/core/imageUpload',
              type: 'post',
              data: form_data,
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              success: function(json) {
                $(".image-upload-browse[data-id='" + data_id + "']").html("Pilih Gambar");
                if (json.success != true) {
                  $(".file-dir[data-id='" + data_id + "']").val("");
                  $(".file-name[data-id='" + data_id + "']").val("");
                  $(".btn-remove-file[data-id='" + data_id + "']").hide();
                  showToast("error", json.msg);
                } else {
                  if (json.select != false) {
                    $(".file-dir[data-id='" + data_id + "']").val(json.file_dir);
                    $(".file-name[data-id='" + data_id + "']").val(json.file_name);
                    if ($(".file-name[data-id='" + data_id + "']").val() != "") {
                      $(".btn-remove-file[data-id='" + data_id + "']").show();
                    }
                  }
                  //console.log(json.msg);
                }
              }
            });
          },

          MIME_TYPE,
          QUALITY);
      };
      // sampai disini
    });

    function calculateSize(img, maxWidth, maxHeight) {
      let width = img.width;
      let height = img.height;

      // calculate the width and height, constraining the proportions
      if (width > height) {
        if (width > maxWidth) {
          height = Math.round(height * maxWidth / width);
          width = maxWidth;
        }
      } else {
        if (height > maxHeight) {
          width = Math.round(width * maxHeight / height);
          height = maxHeight;
        }
      }
      return [width, height];
    }




    //upload single document
    $('.document-upload-browse').on('click', function() {
      var data_id = $(this).data('id');
      var file = $(".document-upload-default[data-id='" + data_id + "']");
      file.focus().trigger('click');
    });

    $('.document-upload-default').on('change', function() {
      var data_id = $(this).data('id');
      $(".document-upload-browse[data-id='" + data_id + "']").html(`<div class="spinner-border-custom spinner-border text-light" role="status"">
                                     <span class="sr-only">Loading...</span>
                                        </div>`);
      var file_data = $(".document-upload-default[data-id='" + data_id + "']").prop("files")[0];
      var form_data = new FormData();
      form_data.append("file", file_data);
      $.ajax({
        url: 'https://dasawisma.pkk.makassarkota.go.id/app/core/documentUpload',
        type: 'post',
        data: form_data,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(json) {
          $(".document-upload-browse[data-id='" + data_id + "']").html("Select File");
          if (json.success != true) {
            $(".file-dir[data-id='" + data_id + "']").val("");
            $(".file-name[data-id='" + data_id + "']").val("");
            $(".btn-remove-file[data-id='" + data_id + "']").hide();
            showToast("error", json.msg);
          } else {
            if (json.select != false) {
              $(".file-dir[data-id='" + data_id + "']").val(json.file_dir);
              $(".file-name[data-id='" + data_id + "']").val(json.file_name);
              if ($(".file-name[data-id='" + data_id + "']").val() != "") {
                $(".btn-remove-file[data-id='" + data_id + "']").show();
              }
            }
            //console.log(json.msg);
          }
        }
      });
    });



  });
</script>

</body>

</html>