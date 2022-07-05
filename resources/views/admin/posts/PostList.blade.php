@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">لیست اخبار</h1>
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
                                <th>تصویر خبر</th>
                                <th>نام خبر</th>
                                <th>توضیح کوتاه خبر</th>
                                <th>دسته ی خبر</th>
                                <th>توضیح خبر</th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش دسته</th>
                                <th>حذف دسته</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->id}}</th>
                                    <th><img src="{{$post->image}}" width="100px" height="auto" alt="{{$post->name}}"></th>
                                    <th>{{$post->name}}</th>
                                    <th>{{$post->shortd}}</th>
                                    <th>{{$post->category_id}}</th>
                                    <th>{{$post->description}}</th>
                                    <th>{{$post->created_at}}</th>
                                    <td>{{$post->updated_at}}</td>

                                    <th>
                                        <form action="{{route('Editpost',$post->id)}}" method="get">
                                            <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button>
                                        </form>
                                    </th>

                                    <th>
                                        <form action="{{route('postDelete',$post->id)}}" method="post">
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