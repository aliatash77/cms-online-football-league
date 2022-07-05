@extends('client.accountLay')
@section('account')

<div class="nk-main">

    <div class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image op-4">
            <img src="{{asset('assets/images/resolt1.jpeg')}}" alt="p4game" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">



                    <div class="nk-header-text">

                        <div class="nk-gap-2"></div>

                        <h1 class="nk-title display-4">ثبت نتیجه</h1>

                        <div class="nk-gap-2"></div>

                        @if($cups->sabt == 0)
                        <h4>{{Auth::user()->name}} ({{'گل زده'}})   -   ({{'گل خورده'}}) {{ $rival->name}}</h4>

                        <button  class="nk-btn nk-btn-lg" data-toggle="modal" data-target=".slacker-modal">
                            <span class="icon ion-ios-football"></span>
                            <span>برای وارد کردن نتیجه کلیک کنید</span>
                        </button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        @else
                            <h4>{{Auth::user()->name}} ({{$cups->userG}})   -   ({{$cups->rivalG}}) {{ $rival->name}}</h4>
                        @if($cups->status==0)
                            <button class="nk-btn nk-btn-lg" data-toggle="modal" data-target="#acceptModal">
                            <span class="icon ion-ios-gear"></span>
                            <span>تایید نتیجه</span>
                        </button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="nk-btn nk-btn-lg" id="ee" data-toggle="modal" data-target="#etrazModal">
                            <span class="icon ion-xbox"></span>
                            <span>اعتراض نتیجه</span>
                        </button>
                        @endif
                        @endif
                        @if($cups->status==1)
                            <h4 class="text-success">وضعیت : نتیجه تایید شده</h4>
                        @endif
                        @if($cups->status==2)
                            <h4 class="text-danger">وضعیت : اعتراض زده شده</h4>
                        @endif
                        <div class="nk-gap-2"></div>

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <img src="" alt="" class="nk-plain-video">
                            </div>
                        </div>

                        <div class="nk-gap-4"></div>

                    </div>


                </div>
            </div>
        </div>

    </div>

</div>








{{--  modal      --}}

<div class="modal fade text-black" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> اخطار! </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">از نتیجه ی وارد شده اطمینان دارید؟</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">بزار یه چک کنم!</button>
                <form action="{{route('accept',$cups->id)}}" method="get">
                    <button class="btn btn-primary">بله</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade text-dark" id="etrazModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اخطار مهم!!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"> در صورت هرگونه ایراد در اعتراض شما, طبق قوانین p4cup جریمه خواهید شد.</div>
            <div class="modal-body"> در صورتی که به نتیحه وارد شذه توسط حریف خود اعتراض دارید, ابتدا اعتراض را ثبت کنید سپس:
                <br>
                    ۱.شناسه مسابقه : <span class="text-danger bg-gray-3">{{$cups->matchKey}}</span>
                <br>  ۲.عکس و فیلم مسابقه<br>
                 را به تلگرام پشتیبانی ارسال کنید.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">بیخیال</button>
                <form action="{{route('etraz',$cups->id)}}" method="get">

                    <button class="btn btn-primary">ثبت</button>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="modal fade in slacker-modal">
    <div class="modal-dialog modal-slacker mx-auto w-100">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <button type="button" class="close mx-auto" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <form action="{{route('StoreResult',$cups->id)}}" method="post">

@csrf
                    <div class="row">
                        <div class="col-md-5  col-5 text-center">

                            <img class="img-circle" alt="140x140" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" style="width: 60%; height: 60%;">
                            <h2>{{Auth::user()->name}}</h2>
                            <input type="text" name="userG" class="input-group-text input-group-prepend text-dark-1 " placeholder="تعداد گل ">

                        </div><h3 class="mt-50">vs</h3>
                        <div class="col-md-5  col-5  text-center">
                            <img class="img-circle" alt="140x140" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" style="width: 60%; height: 60%;">
                            <h2>{{ $rival->name}}</h2>
                            <input type="text" name="rivalG" class="input-group-text input-group-prepend text-dark-1 " placeholder="تعداد گل ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mt-25">
                            <button class="btn btn-block btn-circle btn-primary"> ثبت نتیجه</button>
                        </div>
                    </div>

                </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</div>

{{--  end modal    --}}

{{--<div class="modal fade in slacker-modal-accept">--}}
{{--    <div class="modal-dialog modal-slacker mx-auto  w-100">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="close mx-auto" data-dismiss="modal" aria-hidden="true">×</button>--}}

{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form action="">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-5 col-5 text-center">--}}

{{--                            <img class="img-circle" alt="140x140" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" style="width: 60%; height: 60%;">--}}
{{--                            <h2 class="text-black">ali</h2>--}}
{{--                           <h3 class="text-black ">3</h3>--}}

{{--                        </div><h3 class="mt-50 text-black">vs</h3>--}}
{{--                        <div class="col-md-5 col-5  text-center">--}}
{{--                            <img class="img-circle" alt="140x140" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNDAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjcwIiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE0MHgxNDA8L3RleHQ+PC9zdmc+" style="width: 60%; height: 60%;">--}}
{{--                            <h2 class="text-black">hassan</h2>--}}
{{--                            <h3 class="text-black">2</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-10 mt-25">--}}
{{--                            <button name="acceptResult" class="btn btn-block btn-circle btn-primary "> تایید نتیجه</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-10 mt-25">--}}
{{--                            <button type="button" class="btn btn-block btn-circle btn-danger" data-toggle="modal" data-target=".slacker-modal-var">  !!!VAR </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div><!-- /.modal-content -->--}}
{{--        </div><!-- /.modal-dialog -->--}}
{{--    </div>--}}
{{--</div>--}}



<div class="modal fade in slacker-modal-var bg-warning">
    <div class="modal-dialog modal-slacker mx-auto w-100">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close mx-auto" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">
                <form action="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-12">
                                <div class="alert alert-danger">
                                    <h2>اخطار!</h2>
                                    <p>در صورتی که اعتراض شما ثابت نشود "۴" تیکت از دست میدهید و نتیجه ۳ بر صفر به نفع رقیب شما تمام میشود.</p>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input inner-body" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">فیلم بازی را ارسال کنید</label>
                                </div>
                                <br><br>
                            </div>

                        </div>

                        <div class="input-group">
                            <textarea  name="var"  cols="40" rows="4" placeholder="مورد اعتراض خود را وارد کنید(اجباری)" required></textarea>
                        </div>
                        <div class="col-md-10 col-12 mt-10">
                            <button class="btn btn-block btn-warning">ثبت اعتراض</button>
                        </div>
                    </div>

                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>


<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endsection
