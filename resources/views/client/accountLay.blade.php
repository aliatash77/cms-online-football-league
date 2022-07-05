@extends('client.layout')
@section('content')

    <div class="nk-box ">
        <div class="container">
            <div class="nk-gap-5"></div>

            <h1 class="nk-title">حساب کاربری</h1>



            <div class="nk-gap-4"></div>
        </div>
    </div>
    <!-- END: Header Title -->
    <div class="container bg-dark">

        <div class="row">
            <div class="col-lg-3">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                    <div class="nk-store-account-links">
                        <ul>
                            <li class="mt-4 d-block"><h4>پنل کاربری</h4></li>
                            <li><a href="{{route('cellTicket')}}">فروش تیکت</a></li>
                            <li><a href="{{route('profile',Auth::user()->id)}}">اطلاعات کاربری</a></li>
                             <li><a href="#">جدول کاپ فعال</a></li>
                            <li><a href="{{route('logout')}}">خروج</a></li>
                        </ul>
                    </div>
                </aside>
                <!-- END: Sidebar -->
            </div>

            <div class="col-md-9 ">

            @yield('account')

            </div>

        </div>

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>


@endsection
