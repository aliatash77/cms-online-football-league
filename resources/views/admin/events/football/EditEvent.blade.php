@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">افزودن رویداد جدید</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('UpdateEvent',$event->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            تصویر اصلی رویداد :
                            <span class="star">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="برای ارسال تصویر اصلی رویداد کلیک نمایید"  value="{{$event->image}}" class="form-control imageUploader" id="thumb_image" name="image">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین نام رویداد</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="cupName" value="{{$event->cupName}}" class="form-control" placeholder="نام رویداد*" required>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین بازی مسابقه</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="gameName" value="{{$event->gameName}}" class="form-control" placeholder="نام بازی مورد نظر را وارد کنید(مثال:pes20)" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین هزینه ی ورودی مسابقه</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="number" name="entryFee" value="{{$event->entryFee}}" class="form-control" placeholder="هزینه مورد نظر برای ورود به مسابقه را وارد کنید" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین ظرفیت مسابقه</h3></span>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="number" name="capacity"  value="{{$event->capacity}}" class="form-control" placeholder="ظرفیت مورد نظر برای شروع به مسابقه را وارد کنید" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین فرمت مسابقه</h3></span>
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
                                        <option value="{{$cat->id}}"@if($event->category_id==$cat->id) selected @endif>{{$cat->name}}</option>
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
                            <input type="number" name="fPrize" class="form-control" value="{{$event->fPrize}}" placeholder="جایزه نفر اول " required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" name="sPrize" class="form-control" value="{{$event->sPrize}}" placeholder="جایزه نفر دوم" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="tPrize" class="form-control" value="{{$event->tPrize}}" @if($event->tPrize==null) placeholder="جایزه نفر سوم (غیر اجباری)" @endif >
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="foPrize" class="form-control" value="{{$event->foPrize}}" @if($event->foPrize==null) placeholder="جایزه چهارم (غیر اجباری)" @endif >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <span><h3>تعیین امتیاز برنده</h3></span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="fRankPrize" value="{{$event->fRankPrize}}" class="form-control" @if($event->fRankPrize==null) placeholder="امتیاز نفر اول (غیر اجباری)" @endif >
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="sRankPrize" value="{{$event->sRankPrize}}" class="form-control" @if($event->sRankPrize==null) placeholder="امتیاز نفر دوم (غیر اجباری)" @endif required>
                        </div>
                    </div>



                    <div>
                        <div class="form-group">
                            <label for="gameDescription">توضیجات رویداد</label>
                            <textarea id="my_id" name="gameDescription">{{$event->gameDescription}}</textarea>
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
