@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">لیست تیکت ها</h1>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body ">
                        <table id="example2" class="table table-bordered text-dark text-center table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>تصویر تیکت</th>
                                <th>ارزش تیکت</th>
                                <th>قیمت تیکت</th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش دسته</th>
                                <th>حذف دسته</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tickets as $ticket)
                                <tr>
                                    <th>{{$ticket->id}}</th>
                                    <th><img src="{{$ticket->image}}" width="100px" height="auto" alt="{{$ticket->name}}"></th>
                                    <th>{{$ticket->value}} امتیاز </th>
                                    <th>{{number_format($ticket->price)}} تومان </th>
                                    <th>{{$ticket->created_at}}</th>
                                    <td>{{$ticket->updated_at}}</td>

                                    <th>
                                        <form action="{{route('EditTicket',$ticket->id)}}" method="get">
                                            <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button>
                                        </form>
                                    </th>

                                    <th>
                                        <form action="{{route('DeleteTicket',$ticket->id)}}" method="post">
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