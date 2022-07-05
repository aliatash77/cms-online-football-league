@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">افزودن رویداد جدید</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('storeEvent')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            تصویر اصلی رویداد :
                            <span class="star">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="برای ارسال تصویر اصلی رویداد کلیک نمایید"  class="form-control imageUploader" id="thumb_image" name="image">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین نام رویداد</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="cupName" class="form-control" placeholder="نام رویداد*" required>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین بازی مسابقه</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="gameName" class="form-control" placeholder="نام بازی مورد نظر را وارد کنید(مثال:pes20)" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین هزینه ی ورودی مسابقه</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="number" name="entryFee" class="form-control" placeholder="هزینه مورد نظر برای ورود به مسابقه را وارد کنید" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین ظرفیت مسابقه</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="number" name="capacity" class="form-control" placeholder="ظرفیت مورد نظر برای شروع به مسابقه را وارد کنید" required>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span><h3 class="alert alert-danger">تعیین فرمت مسابقه(دسته بندی مسابقه)</h3></span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="category_id" class="form-control" required>

                                    <option value=""> انتخاب نوع مسابقه </option>
                                    @foreach($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger">دسته بندی مسابقه را به دقت انتخاب کنید!!</div>

                    <div class="col-md-2">
                        <div class="form-group">
                           <span><h3>تعیین جوایز</h3></span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" name="fPrize" class="form-control" placeholder="جایزه نفر اول " required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" name="sPrize" class="form-control" placeholder="جایزه نفر دوم" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="tPrize" class="form-control" placeholder="جایزه نفر سوم (غیر اجباری)" >
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="foPrize" class="form-control" placeholder="جایزه چهارم (غیر اجباری)" >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین امتیاز برنده</h3></span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="fRankPrize" class="form-control" placeholder="امتیاز نفر اول (غیر اجباری)" >
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="sRankPrize" class="form-control" placeholder="امتیاز نفر دوم (غیر اجباری)" required>
                        </div>
                    </div>



                    <div>
                        <div class="form-group">
                            <label for="gameDescription">توضیجات رویداد</label>
                            <textarea id="my_id" name="gameDescription"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">افزودن رویداد جدید</button>
                </form>
            </div>
        </div>
    </div>


    <!-- /.content-wrapper -->
@endsection
@section('links')

    <script src="{{asset('/admin/tinymce/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/js/lib3.js')}}"></script>

@endsection
