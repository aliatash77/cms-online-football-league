@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">لیست دسته‌بندی ها</h1>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body ">
                        <table id="example2" class="table table-bordered text-dark table-responsive text-center table-hover">
                            <thead>
                            <tr>
                                <th>شماره دسته بندی</th>
                                <th>نام دسته بندی</th>
                                <th>نام پدر دسته بندی</th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش دسته</th>
                                <th>حذف دسته</th>

                            </tr>
                            </thead>
                            <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <th>{{$category->id}}</th>
                                        <th>{{$category->name}}</th>
                                        <th>{{$category->parent_id}}</th>
                                        <td>{{$category->created_at}}</td>
                                        <td>{{$category->updated_at}}</td>
                                        <th>
                                            <form action="{{route('EditCategory',$category->id)}}" method="get">
                                                <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button></th>
                                            </form>
                                        <th>
                                            <form action="{{route('DeleteCategory',$category->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button></th>
                                             </form>
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