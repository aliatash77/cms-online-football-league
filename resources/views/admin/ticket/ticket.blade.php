@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">افزودن خبر جدید</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('StoreTicket')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            نماد تیکت :
                            <span class="star">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="برای ارسال تصویر تیکت کلیک نمایید"  class="form-control imageUploader" id="thumb_image" name="image">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="value" class="form-control" placeholder="ارزش تیکت" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" placeholder="قیمت تیکت" required>
                        </div>
                    </div>




                    <button type="submit" class="btn btn-success btn-block">افزودن تیکت جدید</button>
                </form>
            </div>
        </div>
    </div>


    <!-- /.content-wrapper -->
@endsection
@section('links')

    <script src="{{asset('/admin/tinymce/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/js/ticketImage.js')}}"></script>

@endsection
