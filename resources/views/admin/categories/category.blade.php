@extends('admin.layout')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">افزودن دسته بندی جدید</h1>
    </div>
    <!-- end Page Heading -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('StoreCategory')}}" method="post">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="نام دسته بندی">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="parent_id" class="form-control">

                                <option value="">بدون دسته بندی پدر</option>

                                @foreach($categories as $category)

                                    <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success btn-block">افزودن دسته بندی</button>
                </form>
            </div>
        </div>
    </div>


@endsection