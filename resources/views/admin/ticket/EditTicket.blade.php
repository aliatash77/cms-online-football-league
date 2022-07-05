@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">ویرایش تیکت</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('UpdateTicket',$ticket->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            تصویر تیکت :
                            <span class="star">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$ticket->image}}"  class="form-control imageUploader" id="thumb_image" name="image">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="value" class="form-control" value="{{$ticket->value}}" required>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" value="{{$ticket->price}}" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">ویرایش تیکت </button>
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