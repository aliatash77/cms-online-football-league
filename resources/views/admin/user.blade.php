@extends('admin.layout')
@section('content')
    <div id="addModal" class="modal fade">

        <div class="container mt-5 bg-white modal-dialog">

            <div  class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">افزودن کاربر جدید</h4>
                </div>
                <div class="modal-body">
                    <form id="add-todo" method="post" action="{{ url('post-todo') }}">
            @csrf

                        <div class="form-group">
                            <label for="formGroupExampleInput">User name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">email</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Please enter email">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">mobile</label>
                            <input type="text" name="mobile" class="form-control" id="formGroupExampleInput" placeholder="Please enter mobile">
                            <span class="text-danger">{{ $errors->first('mobile') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">city</label>
                            <input type="text" name="city" class="form-control" id="formGroupExampleInput" placeholder="Please enter city">
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">PSN ID</label>
                            <input type="text" name="psnId" class="form-control" id="formGroupExampleInput" placeholder="Please enter PSN ID">
                            <span class="text-danger">{{ $errors->first('psnId') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">password</label>
                            <input type="password" name="password" class="form-control" id="formGroupExampleInput" placeholder="Please enter password">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">password confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput" placeholder="Please enter password confirmation">
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        </div>




                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="btn-send">send</button>
                        </div>

                    </form>
                </div>
            </div>
    </div>

    </div>

    <div class="container mt-4">
        <a href="{{ url('add-todo') }}" data-toggle="modal" data-target="#addModal" class="text-center btn btn-success mb-1">ساخت کاربر جدید</a>
        <table class="table table-bordered" id="laravel-datatable-crud">
            <thead>
            <tr>
                <th>Id</th>
                <th>نام‌کاربری</th>
                <th>ایمیل</th>
                <th>PSN ID</th>
                <th>شهر</th>
                <th>موبایل</th>
                <th>تیکت ها</th>
                <th>امتیاز</th>
                <th>تاریخ ثبت نام</th>
                <th>عملیات</th>
            </tr>
            </thead>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#laravel-datatable-crud').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('list') }}",
                    type: 'GET',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'psnId', name: 'psnId' },
                    { data: 'city', name: 'city' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'tickets', name: 'tickets' },
                    { data: 'rank', name: 'rank' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action' }
                ]
            });
        });

        $('body').on('click', '.deleteTodo', function () {

            var todo_id = $(this).data("id");
            if(confirm("Are You sure want to delete !"))
            {
                $.ajax({
                    type: "get",
                    url: "{{ url('delete-todo') }}"+'/'+todo_id,
                    success: function (data) {
                        var oTable = $('#laravel-datatable-crud').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
        });

    </script>


@endsection




