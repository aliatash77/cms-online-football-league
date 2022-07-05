@extends('client.accountLay')
@section('account')



<div class="row">

    <div class="container">

        <div class="col-md-12">

            <div class="">

                <div class="widget "
                     id="widget76"
                     data-scroll="0">



                        <div class="widget-toolbar">

                        <div class="week-selector">
                            <label>انتخاب هفته :</label>
                            <select data-type="week-select" name="week">




                                @for($h = 1;$h<= count($jadvals)-1 ;$h++ )

                                        <option value="{{$h}}">هفته {{$h}}</option>

                                @endfor

                            </select>


                        </div>
                    </div>


                    <div class="widget-content md-padding">
                        <div class="custom-scroll-area">
                            <div class="custom-scroll-area--fixtures">

                                <div class="league-table fixtures-list-static" data-identity="76">
                                    <table id="baziha" class="table table-hover table-active table-striped">
                                        <thead>
                                        <tr>
                                            <th class="header color-6" colspan="10">
                                                لیگ برتر ایران
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>


                                        <tr>
                                            <td class="sub-header" colspan="10">
                                                پنجشنبه 2 مرداد 1399                            </td>
                                        </tr>



                                        @if(!empty($cups))


                                            @foreach($cups as $cup)





                                        <tr>

                                            <td class="text-left matchtime">
                                                @if(Auth::user()->id == $cup->id_mizban || Auth::user()->id == $cup->id_mihman)

                                                <a href="{{route('resultRegister',$cup->id)}}" title="انجام بازی">برای انجام این مسابقه کلیک کنید <i class="fa fa-play-circle-o" width="11" height="11" src="" border=0></i>
                                                </a>
                                                @endif
                                            </td>
                                            <td class="text-left">

                                                <a href="#" target="_blank">
                                                    {{\App\User::select('name')->where('id',$cup->id_mizban)->first()}}</a>
                                            </td>
                                            <td class="text-center sm-padding text-nowrap league-table--match-result">
                                                <p>
                                                    {{$cup->userG  -  $cup->rivalG}}
                                                </p>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" target="_blank">{{ \App\User::select('name')->where('id',$cup->id_mihman)->first()}}</a></a>
                                            </td>
                                        </tr>







                                        </tbody>

                                        @endforeach

                                        @endif

                                    </table>
                                </div>
                            </div>
                            <div class="custom-scroll-area--league-table">
                            </div>
                        </div>
                        <div class="clr"></div>
                        <a class="widget--more-link" target="_blank" href="/table/جدول-ليگ-برتر-ایران-98-99" title="مشاهده جدول کامل ليگ برتر (98-99) لیگ برتر ایران">مشاهده جدول کامل لیگ برتر ایران</a>

                       </div>

                    <div class="box-footer"></div>
                </div>

                <div class="ad-container row-fluid"



                     data-adposition="12">
                </div>                <div id="pos-article-display-3546"></div>


                <div class="widget "
                     id="widget13"
                     data-scroll="0">
                    <div class="widget-header " style="">
                        <h1>جدول لیگ فعال</h1>
                    </div>
                    <br>

                    <div class="widget-content md-padding">
                        <div class="custom-scroll-area">
                            <div class="custom-scroll-area--fixtures">
                            </div>
                            <div class="custom-scroll-area--league-table">

                                <div class="league-table league-table-static" data-identity="13">
                                    <table class="table table-hover table-active table-striped">
                                        <thead>

                                        <tr class="sub-header">
                                            <td></td>
                                            <td class="text-center">تیم</td>
                                            <td class="text-center">تفاضل</td>
                                            <td class="text-center">گل‌ زده</td>
                                            <td class="text-center">گل خورده</td>
                                            <td class="text-center">امتیاز</td>
                                        </tr>
                                        </thead>
                                        @php $i=0; @endphp
                                        @foreach($jadvals as $jadval)

                                            @php $i++ @endphp

                                            <tr class="">
                                                <td>{{$i}}</td>
                                                <td class="text-center">
                                                    <a href="#" target="_blank">{{$jadval->userName}}</a>
                                                </td>
                                                <td class="text-center">{{$jadval->tafazol}}</td>
                                                <td class="text-center">{{$jadval->g_zade}}</td>
                                                <td class="text-center">{{$jadval->g_khorde}}</td>
                                                <td class="text-center">{{$jadval->point}}</td>
                                            </tr>

                                        @endforeach

                                    </table>
                                </div>            </div>
                        </div>
                        <div class="clr"></div>
                        <a class="widget--more-link" target="_blank" href="/table/جدول-ليگ-برتر-ایران-98-99" title="مشاهده جدول کامل ليگ برتر (98-99) لیگ برتر ایران">مشاهده جدول کامل لیگ برترفوتبال  ایران</a>

                    </div>

                    <div class="box-footer"></div>
                </div>
                <div class="corona-wrapper" id="corona-wrapper"></div>

                <div class="ad-container row-fluid"



                     data-adposition="13">
                </div>

            </div>

        </div>

    </div>

</div>


@endsection
