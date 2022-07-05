@extends('client.accountLay')
@section('account')



        <div class="row vertical-gap">
            <div class="col-md-12">
                <div class="nk-box-3 bg-dark-1">
                    <h2 class="nk-title h3 text-center">ویرایش اطلاعات کاربری</h2>
                    <div class="nk-gap-1"></div>

                    <!-- START: Form 1 -->
                    <form action="{{route('UpdateProfile',$user->id)}}" method="post" class="nk-form nk-form-ajax">
                        {{csrf_field()}}
                        @include('errors')
                        <input type="text" class="form-control required" name="name" value="{{$user->name}}">
                        <div class="nk-gap"></div>
                        <input type="email" class="form-control required" value="{{$user->email}}" name="email">
                        <div class="nk-gap"></div>
                        <input type="text" class="form-control required" value="{{$user->psnId}}" @if($user->psnId==null) placeholder="آیدی PSN دستگاه خود را وارد کنید..." @endif name="psnId">
                        <div class="nk-gap"></div>
                        <input type="text" class="form-control required" value="{{$user->city}}" @if($user->city==null) placeholder="شهر خود را وارد کنید..." @endif name="city">
                        <div class="nk-gap"></div>
                        <input type="text" class="form-control required" value="{{$user->mobile}}" @if($user->mobile==null) placeholder="شماره موبایل خود را وارد کنید..." @endif name="mobile">
                        <div class="nk-gap"></div>

                        <div class="nk-gap"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn nk-btn-lg link-effect-4 btn-block">ارسال اطلاعات</button>
                    </form>
                    <!-- END: Form 1 -->

                </div>
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="nk-gap-1"></div>



    <div class="nk-gap-4"></div>
    <div class="nk-gap-4"></div>
    </div>


@endsection
