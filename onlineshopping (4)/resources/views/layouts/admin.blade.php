


{{--صفحه قالب ادمین سری قبل--}}



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link href="{{asset('css/bootstrap.css')}} " rel="stylesheet">


    <script src="{{asset('js/Jquery.min.js')}}"></script>

<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">


</head>
<body>


<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">پنل ادمین</a>

    <ul class="navbar-nav px-3">

            <a class="nav-link"  href="#">Profile</a>

        <a class="nav-link"  href="/admin/products">Dashboard</a>
            <a class="nav-link"  href="/">خانه</a>

    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">

                        <a class="nav-link active" href="/admin/index">
                            <span data-feather="home"></span>
                            بررسی کلی <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="/admin/createProductForm">
                            <span data-feather="file"></span>
                            افزودن
                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            ویرایش
                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="/admin/users">
                            <span data-feather="users"></span>
                            کاربران
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminGetCategories') }}">
                            <span data-feather="categories"></span>
                            دسته بندی ها
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminAddCategories') }}">
                            <span data-feather="add-category"></span>
                            افزودن دسته بندی
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminGetBrands') }}">
                            <span data-feather="categories"></span>
                            برند ها
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminAddBrands') }}">
                            <span data-feather="add-category"></span>
                            افزودن برند ها
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.coupon') }}">
                            <span data-feather="add-category"></span>
                            کد تخفیف
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.orders') }}">
                            <span data-feather="add-category"></span>
                            orders
                        </a>
                    </li>

                </ul>

               <ul class="nav flex-column mb-2">

                </ul>
            </div>
        </nav>
            </div>





    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" dir="rtl">

            <h1 class="h2" dir="rtl">داشبورد</h1>
            <div class="btn-toolbar mb-2 mb-md-0">


            </div>
        </div>


        @yield('body')
    </div>



<script src="{{asset('js/bootstrap.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>--}}
</body>
</html>

<style>

</style>
{{--تا اینجا--}}
