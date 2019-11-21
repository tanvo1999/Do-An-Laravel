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
    <!-- @if(session('success'))
        <script>
            swal.fire("{{ session('success') }}","" , "success")
        </script>
    @endif
    @if(session('error'))
        <script>
            swal.fire("{{ session('error') }}","" , "error")
        </script>
    @endif -->
     <!-- Datatables init -->
    <!-- <script src="{{asset('assets/js/pages/datatables.init.js') }}"></script> -->
    <script type="text/javascript">
    $(document).ready(function() {
        $("#cau-hinh-app-datatable").DataTable({
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
	<h1>Danh sách cấu hình app</h1>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                    <button data-toggle="modal" data-target="#ThemMoi" class="btn btn-info waves-effect waves-light">
                                        <i class="mdi mdi-content-save-all"></i> Thêm cấu hình App
                                    </button>
                            </div>
                            <!-- <div class="col-sm-12 col-md-6" style="text-align: right;">
                                    <a href="{{route('cau-hinh-app.thung-rac')}}" class="btn btn-info waves-effect waves-light">
                                        <i class="mdi mdi-content-save-all"></i> Thùng rác 
                                    </a>
                            </div> -->
                        </div>
                        <br/>
                        <table id="cau-hinh-app-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cơ hội sai</th>
                                    <th>Thời gian trả lời</th>
                                    <th></th>                                 
                                </tr>
                            </thead>

                             @if(count($errors) > 0)
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }}<br/>
                             @endforeach
                            </div>
                            @endif

                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>

                            @endif
                            
                            <tbody>
                                @foreach($cauHinhApp as $CauHinhApp)
                                    <tr>
                                        <td>{{ $CauHinhApp->id }}</td>
                                        <td>{{ $CauHinhApp->co_hoi_sai }}</td>
                                        <td>{{ $CauHinhApp->thoi_gian_tra_loi }}</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#CapNhat{{$CauHinhApp->id}}" type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-pen"></i></button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="CapNhat{{$CauHinhApp->id}}" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title">Cập nhật cấu hình app</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{ route('cau-hinh-app.xl-cap-nhat',$CauHinhApp->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Cơ hội sai</label>
                                                    <input type="text" class="form-control" value="{{ $CauHinhApp->co_hoi_sai }}" 
                                                    id="co_hoi_sai" name="co_hoi_sai">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Điểm</label>
                                                    <input type="text" class="form-control" value="{{ $CauHinhApp->thoi_gian_tra_loi }}"
                                                    id="thoi_gian_tra_loi" name="thoi_gian_tra_loi">
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
        <!-- Modal -->
        <div class="modal fade" id="ThemMoi" role="dialog">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Thêm mới cấu hình app</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('cau-hinh-app.xl-them-moi') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="co_hoi_sai">Cơ hội sai</label>
                            <input type="text" class="form-control" 
                            id="co_hoi_sai" name="co_hoi_sai" placeholder="Cơ hội sai">
                        </div>
                        <div class="form-group">
                            <label for="thoi_gian_tra_loi">Thời gian trả lời</label>
                            <input type="text" class="form-control" 
                            id="thoi_gian_tra_loi" name="thoi_gian_tra_loi" placeholder="Thời gian trả lời">
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
                        $url = 'cau-hinh-app/xoa/'+$id;
                        open($url,"_self") 
                    }
                })
            };
            function capNhat($id){
                $url = 'cau-hinh-app/cap-nhat/'+$id;
                open($url,"_self");
            }
        </script>
	@endsection