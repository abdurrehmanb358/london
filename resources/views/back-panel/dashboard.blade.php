<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.tiny.cloud/1/riwb7ogf2u9s08e36xaba8oas76xy16nzjlm9iktibe62vx5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image" href="./assets/img/favicon.png">

  <title>Admin</title>

  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet">

  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is an easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA, and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body>
  <div class="container-fluid py-4" style="margin-top:-32px;">
    <div class="row">
      <div class="col-lg-3">
        {{-- Include your sidebar content here --}}
        @include('layouts.sidebar')
      </div>
      <div class="col-lg-9">
        {{-- Include your top bar content here --}}
        @include('layouts.topbar')

        <div class="container-fluid py-4">
          @yield('content')
        </div>

        <div class="row">
          <div class="col-lg-7 position-relative z-index-2">
            <div class="card card-plain mb-4">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-lg-6">
                    <!-- Your content here -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="fixed-plugin">
          <!-- Plugin content here -->
        </div>

        <!-- Core JS Files -->
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
        <script>
          tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
              { value: 'First.Name', title: 'First Name' },
              { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
          });
        </script>
      </div>
    </div>
  </div>

  



</body>

</html>
