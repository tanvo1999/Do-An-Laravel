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
    @if(session('error'))
        <script>
            swal.fire("{{ session('error') }}","" , "error")
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
	<h1>Danh sách câu Hỏi</h1>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                    <a href="{{route('cau-hoi.them-moi')}}" class="btn btn-info waves-effect waves-light">
                                        <i class="mdi mdi-content-save-all"></i> Thêm câu hỏi 
                                    </a>
                            </div>
                            <div class="col-sm-12 col-md-6" style="text-align: right;">
                                    <a href="{{route('cau-hoi.thung-rac')}}" class="btn btn-info waves-effect waves-light">
                                        <i class="mdi mdi-content-save-all"></i> Thùng rác 
                                    </a>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <table id="linh-vuc-datatable" class="table dt-responsive nowrap">
                            
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

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="width:400px;">Nội dung</th>
                                    <th style="padding-right:100px;">Lĩnh vực</th> 
                                    <th>Phương án A</th> 
                                    <th>Phương án B</th>
                                    <th>Phương án C</th> 
                                    <th>Phương án D</th> 
                                    <th>Đáp án</th> 
                                    <th></th>                                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cauHoi as $CauHoi)
                                    <tr>
                                        <td>{{ $CauHoi->id }}</td>
                                        <td>{{ $CauHoi->noi_dung }}</td>
                                        <td>{{ $CauHoi->linhVuc->ten_linh_vuc }}</td>
                                        <td>{{ $CauHoi->phuong_an_a }}</td>
                                        <td>{{ $CauHoi->phuong_an_b }}</td>
                                        <td>{{ $CauHoi->phuong_an_c }}</td>
                                        <td>{{ $CauHoi->phuong_an_d }}</td>
                                        <td>{{ $CauHoi->dap_an }}</td>
                                        <td>
                                            <button onclick="capNhat({{$CauHoi->id}})" type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-pen"></i></button>
                                            <button onclick="Xoa({{$CauHoi->id}})" type="button" class="btn btn-danger waves-effect waves-light"><i class=" mdi mdi-delete"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
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
                        $url = 'cau-hoi/xoa/'+$id;
                        open($url,"_self") 
                    }
                })
            };
            function capNhat($id){
                $url = 'cau-hoi/cap-nhat/'+$id;
                open($url,"_self");
            }
        </script>
	@endsection