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
    <!-- third party js ends -->

     <!-- Datatables init -->
    <!-- <script src="{{asset('assets/js/pages/datatables.init.js') }}"></script> -->
    @endsection

    @section('css')
    <!-- third party css -->
    <link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    @endsection

	@section('main-content')
	<h1>Danh sách cấu hình điểm câu hỏi</h1>
		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                 <!--        <h4 class="header-title">Danh Sách điểm câu hỏi</h4> -->
                        <a href="{{route('cau-hinh-diem-cau-hoi.them-moi')}}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-content-save-all"></i> Thêm cấu hình điểm câu hỏi
                        </a>
                        
                        <br/>
                        <br/>
                        <br/>
                        <table id="cau-hinh-diem-cau-hoi-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Thứ tự</th>
                                    <th>Diểm</th> 
                                    <th></th>                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($diemCauHoi as $DiemCauHoi)
                                    <tr>
                                        <td>{{ $DiemCauHoi->id }}</td>
                                        <td>{{ $DiemCauHoi->thu_tu }}</td>
                                        <td>{{ $DiemCauHoi->diem }}</td>
                                        <td>
                                            <!-- <button type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-pen"></i></button> -->
                                            <a type="" class="btn btn-info waves-effect waves-light" href="cau-hinh-diem-cau-hoi/sua/{{$DiemCauHoi->id}}"><i class="mdi mdi-pen"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
                </div>
	@endsection