<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Stribo - Admin Panel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">

    @include('admin.layouts.sidebar')
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Stribo</h3>
        </div>
a
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#ProductSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Контент</a>
                <ul class="collapse list-unstyled" id="ProductSubmenu">
                    <li>
                        <a href="{{ route('admin.categories') }}">Категории</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.products') }}">Продукты</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.costs') }}">Комплектующие</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services') }}">Услуги</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.uploads') }}">Загрузка</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#DateSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Учет</a>
                <ul class="collapse list-unstyled" id="DateSubmenu">
                    <li>
                        <a href="{{ route('admin.products') }}">Продукты</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#SettingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Учет</a>
                <ul class="collapse list-unstyled" id="SettingSubmenu">
                    <li>
                        <a href="{{ route('admin.products') }}">Настройки</a>
                    </li>
                </ul>
            </li>


        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>

            </div>
        </nav>

        <div class="page">
            @yield('content')
        </div>

    </div>

</div>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

</script>


</body>

</html>
