@extends('layout')

@section('js')
<!-- third party js -->
<script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
<!-- third party js ends -->
@if(session('success'))
    <script>
        swal.fire("{{ session('success') }}","" , "success")
    </script>
@endif
 <!-- Datatables init -->
<!-- <script src="{{asset('assets/js/pages/datatables.init.js') }}"></script> -->
<script type="text/javascript">
$(document).ready(function() {
    $("#linh-vuc-datatable").DataTable({
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    });
});
</script>
@endsection

@section('css')
<!-- third party css -->
<link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection

@section('main-content')
<h1>Danh sách gói credit</h1>
	<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <button data-toggle="modal" data-target="#ThemMoi" class="btn btn-info waves-effect waves-light">
                                <i class="mdi mdi-content-save-all"></i> Thêm gói credit 
                            </button>
                        </div>
                        <div class="col-sm-12 col-md-6" style="text-align: right;">
                                <a href="{{route('goi-credit.thung-rac')}}" class="btn btn-info waves-effect waves-light">
                                    <i class="mdi mdi-content-save-all"></i> Thùng rác 
                                </a>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <table id="linh-vuc-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên gói credit</th>
                                <th>Credit</th>
                                <th>Số tiền</th>
                                <th></th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($goiCredit as $GoiCredit)
                                <tr>
                                    <td>{{ $GoiCredit->id }}</td>
                                    <td>{{ $GoiCredit->ten_goi }}</td>
                                    <td>{{ $GoiCredit->credit }}</td>
                                    <td>{{ $GoiCredit->so_tien }}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#CapNhat{{$GoiCredit->id}}" type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-pen"></i></button>
                                        <button onclick="Xoa({{$GoiCredit->id}})" type="button" class="btn btn-danger waves-effect waves-light"><i class=" mdi mdi-delete"></i></button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="CapNhat{{$GoiCredit->id}}" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title">Cập nhật gói credit</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="{{ route('goi-credit.xl-cap-nhat',$GoiCredit->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tên gói</label>
                                                <input type="text" class="form-control" value="{{ $GoiCredit->ten_goi }}" 
                                                id="ten_goi" name="ten_goi">
                                                <label for="exampleInputEmail1">Credit</label>
                                                <input type="number" class="form-control" value="{{ $GoiCredit->credit }}" 
                                                id="credit" name="credit">
                                                <label for="exampleInputEmail1">Số tiền</label>
                                                <input type="number" class="form-control" value="{{ $GoiCredit->so_tien }}" 
                                                id="so_tien" name="so_tien">
                                            </div>
                                        <button type="submit" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-content-save" ></i> Lưu</button>
                                        
                                        </form>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: aliceblue; color: #6c757d;">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

    <div class="modal fade" id="ThemMoi" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Thêm mới gói credit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form action="{{ route('goi-credit.them-moi') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên gói</label>
                    <input type="text" class="form-control" id="ten_goi" name="ten_goi">
                    <label for="exampleInputEmail1">Credit</label>
                    <input type="number" class="form-control" id="credit" name="credit">
                    <label for="exampleInputEmail1">Số tiền</label>
                    <input type="number" class="form-control" id="so_tien" name="so_tien">
                </div>
            <button type="submit" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-content-save" ></i> Lưu</button>
            
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: aliceblue; color: #6c757d;">Close</button>
            </div>
        </div>
        </div>
    </div>

    <script>
        function Xoa($id) {
            Swal.fire({
                title: 'Bạn có Muốn Xóa Không?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok. Xóa nó!',
                cancelButtonText:'Không'
                }).then((result) => {
                if (result.value) {
                    $url = 'goi-credit/xoa/'+$id;
                    open($url,"_self") 
                }
            })
        };
        function capNhat($id){
            $url = 'goi-credit/cap-nhat/'+$id;
            open($url,"_self");
        }
    </script>
@endsection