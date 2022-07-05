@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">افزودن محصول جدید</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('storeIndex')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            تصویر اصلی صفحه :
                            <span class="star">1920*1357</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="برای ارسال تصویر اصلی صفحه کلیک نمایید"  class="form-control imageUploader" id="thumb_image" name="IndexImage">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="PageId" class="form-control" >

                                     <option value="">انتخاب صفحه</option>
                                @foreach($pages as $page)

                                    <option value="{{$page->id}}">{{$page->pageName}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>

{{--                    <div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="description">توضیجات محصول</label>--}}
{{--                            <textarea id="my_id" name="description"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-success btn-block">افزودن عکس جدید</button>
                </form>
            </div>
        </div>
    </div>


    <!-- /.content-wrapper -->
@endsection
@section('links')

    <script src="{{asset('/admin/tinymce/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/js/lib2.js')}}"></script>

@endsection
