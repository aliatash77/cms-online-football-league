@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">ویرایش خبر </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('postUpdate',$post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            تصویر اصلی خبر :
                            <span class="star">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$post->image}}"  class="form-control imageUploader" id="thumb_image" name="image">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{$post->name}}" required>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="description">توضیجات کوتاه خبر</label>
                            <textarea id="my_id1" name="shortd">{{$post->shortd}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="category_id" class="form-control" required>

                                @foreach($categories as $category)

                                    <option value="{{$category->id}}"@if($post->category_id==$category->id) selected  @endif>{{$category->name}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div>
                        <div class="form-group">
                            <label for="postDescription">توضیجات خبر</label>
                            <textarea id="my_id" name="description">{{$post->description}}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">ویرایش خبر </button>
                </form>
            </div>
        </div>
    </div>

    <!-- /.content-wrapper -->
@endsection
@section('links')
    <script src="{{asset('/admin/tinymce/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/js/lib4.js')}}"></script>

@endsection
