@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">لیست رویداد ها</h1>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body ">
                        <table id="example2" class="table table-bordered text-dark table-responsive text-center table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>تصویر رویداد </th>
                                <th>نام رویداد </th>
                                <th>فرمت رویداد </th>
                                <th>نام بازی </th>
                                <th>توضیح رویداد </th>
                                <th>هزینه ورودی</th>
                                <th>ظرفیت شروع</th>
                                <th>جایزه نفر اول</th>
                                <th>جایزه نفر دوم</th>
                                <th>جایزه نفر سوم</th>
                                <th>جایزه نفر چهارم</th>
                                <th> امتیاز نفر اول </th>
                                <th>امتیاز نفر دوم </th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش دسته</th>
                                <th>حذف دسته</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($events as $event)
                                <tr>
                                    <th>{{$event->id}}</th>
                                    <th><img src="{{$event->image}}" width="100px" height="auto" alt="{{$event->name}}"></th>
                                    <th>{{$event->cupName}}</th>
                                    <th>{{\App\EventCat::find($event->category_id)->name}}</th>
{{--                                    <th>{{ \App\EventCat::find($event->category_id)}}</th>--}}
                                    <th>{{$event->gameName}}</th>
                                    <th>{{strip_tags($event->gameDescription)}}</th>
                                    <th>{{$event->entryFee}} تیکت </th>
                                    <th>{{$event->capacity}} نفر </th>
                                    <th>{{$event->fPrize}} تیکت </th>
                                    <th>{{$event->sPrize}} تیکت </th>
                                    <th>{{$event->tPrize}}@if($event->tPrize==null) 0 @endif تیکت </th>
                                    <th>{{$event->foPrize}}@if($event->tPrize==null) 0 @endif تیکت </th>
                                    <th>{{$event->fRankPrize}} امتیاز </th>
                                    <th>{{$event->sRankPrize}} امتیاز </th>
                                    <th>{{$event->created_at}}</th>
                                    <td>{{$event->updated_at}}</td>

                                    <th>
                                        <form action="{{route('EditEvent',$event->id)}}" method="get">
                                            <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button>
                                        </form>
                                    </th>

                                    <th>
                                        <form action="{{route('DeleteEvent',$event->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </th>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection