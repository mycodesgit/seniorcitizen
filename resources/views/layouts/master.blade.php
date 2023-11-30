<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Senior Citizen Management | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free-v6/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('template/plugins/toastr/toastr.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('template/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('template/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- Logo  -->
    <link rel="shortcut icon" type="" href="{{ asset('template/img/default-logo.png') }}">

    <style>
        .nav-item{
            cursor: pointer !important;
        }
        .nav-link:hover{
            background-color: none !important;
        }
        .nav-header{
            color: #6c757d !important;
        }
        .sign-out {
            color: #fff !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-cog"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('template/img/default-logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Senior Citizen Management</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('template/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info" style="color: #bbb">
                        <a href="{{ route('profileRead') }}" class="d-block">{{auth()->user()->fname}} {{auth()->user()->mname}}. {{auth()->user()->lname}}</a>
                        <i class="fa fa-circle text-success" style="font-size: 8pt;"></i> {{auth()->user()->role}}
                    </div>
                </div>

                @include('control.sidebar')
                
            </div>
        </aside>

        @yield('body')
        
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <i>Developed by: <a href="https://www.facebook.com/profile.php?id=61550487001454" target="_blank">Systall Graphics</a> </i>
            </div>
            &copy; Senior Citizen Management. All rights reserved.
        </footer>
        
    </div>
    

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('template/plugins/toastr/toastr.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('template/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> 
    <script src="{{ asset('template/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

    <!-- jQuery Knob -->
    <script src="{{ asset('template/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- jquery-validation -->
    <script src="{{ asset('template/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('template/plugins/aos/akp.js') }}"></script>

    <script src="{{ asset('js/passValidation.js') }}"></script>
    <script src="{{ asset('js/citizenAddValidation.js') }}"></script>
    <script src="{{ asset('js/userAddValidation.js') }}"></script>

    <!-- alerts -->
    <script src="{{ asset('js/basic/userscript.js') }}"></script>

    <!-- dynamic dropdown -->
    <script src="{{ asset('js/form-script.js') }}"></script>


    <script>
        $(function () {

            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var femaleAge6069Count = $('#pieChart').data('female-age-60-69');
            var femaleAge7079Count = $('#pieChart').data('female-age-70-79');
            var femaleAge8089Count = $('#pieChart').data('female-age-80-89');
            var femaleAge9099Count = $('#pieChart').data('female-age-90-99');
            var femaleAge100109Count = $('#pieChart').data('female-age-100-109');
            var femaleAge110119Count = $('#pieChart').data('female-age-110-119');
            var femaleAge120129Count = $('#pieChart').data('female-age-120-129');
            var pieData = {
                labels: [
                    'Female Age Bracket 60-69',
                    'Female Age Bracket 70-79',
                    'Female Age Bracket 80-89',
                    'Female Age Bracket 90-99',
                    'Female Age Bracket 100-109',
                    'Female Age Bracket 110-119',
                    'Female Age Bracket 120-129',
                ],
                datasets: [
                    {
                        data: [femaleAge6069Count, femaleAge7079Count, femaleAge8089Count, femaleAge9099Count, femaleAge100109Count, femaleAge110119Count, femaleAge120129Count],
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#6c757d']
                    }
                ]
            }
            var pieOptions = {
                legend: {
                    display: false
                }
            }
            var pieChart = new Chart(pieChartCanvas, {
                type: 'doughnut',
                data: pieData,
                options: pieOptions
            });

            var pieChartCanvas = $('#pieChart1').get(0).getContext('2d')
            var maleAge6069Count = $('#pieChart1').data('male-age-60-69');
            var maleAge7079Count = $('#pieChart1').data('male-age-70-79');
            var maleAge8089Count = $('#pieChart1').data('male-age-80-89');
            var maleAge9099Count = $('#pieChart1').data('male-age-90-99');
            var maleAge100109Count = $('#pieChart1').data('male-age-100-109');
            var maleAge110119Count = $('#pieChart1').data('male-age-110-119');
            var maleAge120129Count = $('#pieChart1').data('male-age-120-129');
            var pieData = {
                labels: [
                    'Male Age Bracket 60-69',
                    'Male Age Bracket 70-79',
                    'Male Age Bracket 80-89',
                    'Male Age Bracket 90-99',
                    'Male Age Bracket 100-109',
                    'Male Age Bracket 110-119',
                    'Male Age Bracket 120-129',
                ],
                datasets: [
                    {
                        data: [maleAge6069Count, maleAge7079Count, maleAge8089Count, maleAge9099Count, maleAge100109Count, maleAge110119Count, maleAge120129Count],
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#6c757d']
                    }
                ]
            }
            var pieOptions = {
                legend: {
                    display: false
                }
            }
            var pieChart1 = new Chart(pieChartCanvas, {
                type: 'doughnut',
                data: pieData,
                options: pieOptions
            })
        });
    </script>

    <script>
        @if(Session::has('error'))
            toastr.options = {
                "closeButton":true,
                "progressBar":true,
                'positionClass': 'toast-bottom-right'
            }
            toastr.error("{{ session('error') }}")
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    'positionClass': 'toast-bottom-center'
                }
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

    <script>
        @if(Session::has('success'))
            toastr.options = {
                "closeButton":true,
                "progressBar":true,
                'positionClass': 'toast-bottom-right'
            }
            toastr.success("{{ session('success') }}")
        @endif
    </script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": true, 
                "autoWidth": true,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false, 
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
            $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
        });
    </script>
    <script>
        $('input[data-update], select[data-update]').on('change', function() {
            var data = $(this).data('update');
            var value = $(this).val();
            var model = $(this).data('model');
            var array = $(this).data('array');
            var age = "";

            if(data == "bday"){
                var selectedDate = value;
                var birthDate = new Date(selectedDate);
                var currentDate = new Date();
                var age = currentDate.getFullYear() - birthDate.getFullYear();

                if (
                    currentDate.getMonth() < birthDate.getMonth() ||
                    (currentDate.getMonth() === birthDate.getMonth() && currentDate.getDate() < birthDate.getDate())
                ) {
                    age--;
                }

                document.getElementById("age").value = age;

            }

            var cid = $(this).data('cid');

            $.ajax({
                url: '{{ route('MoreInfoUpdate') }}', 
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    data: data,
                    value: value,
                    model: model,
                    array: array,
                    cid: cid,
                    age: age,
                },
                success: function(response) {
                    if (response.success) {
                        console.log(response.success);
                    } else {
                        console.log(response.error);
                    }
                },
                error: function(xhr) {
                    console.log('An error occurred: ' + xhr.status + ' ' + xhr.statusText);
                }
            });
        });
        
    </script>
    <script>
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id="med_concernchk"]');

        // Add an event listener to each checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // If this checkbox is checked, uncheck the others
                if (this.checked) {
                    checkboxes.forEach(otherCheckbox => {
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    </script>

    <script>
        const checkboxes1 = document.querySelectorAll('input[type="checkbox"][id="camp_travel"]');

        // Add an event listener to each checkbox
        checkboxes1.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                // If this checkbox is checked, uncheck the others
                if (this.checked) {
                    checkboxes1.forEach(otherCheckbox => {
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    </script>

<script>
    const checkboxes2 = document.querySelectorAll('input[type="checkbox"][id="med_sched"]');

    // Add an event listener to each checkbox
    checkboxes2.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // If this checkbox is checked, uncheck the others
            if (this.checked) {
                checkboxes2.forEach(otherCheckbox => {
                    if (otherCheckbox !== this) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });
</script>


<script>
    const checkboxes3 = document.querySelectorAll('input[type="checkbox"][id="med_schedyes"]');

    // Add an event listener to each checkbox
    checkboxes3.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // If this checkbox is checked, uncheck the others
            if (this.checked) {
                checkboxes3.forEach(otherCheckbox => {
                    if (otherCheckbox !== this) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });
</script>

<script>
    var ss = "{{ route('checkTrial') }}";
</script>

{{-- <script>
function fetchData() {
    var localDateTime = new Date().toISOString().slice(0, 19).replace("T", " ");
    $.ajax({
        url: '{{ route('checkTrial') }}',
        type: 'GET',
        dataType: 'json', // Specify the expected data type
        success: function (response) {
            // console.log(response.message);
            if (response.message === 'expire') {
                window.location.href = "{{ route('access') }}";
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}
setInterval(fetchData, 1000);
</script> --}}
</body>
</html>