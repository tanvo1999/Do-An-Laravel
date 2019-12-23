@extends('layout')

    @section('js')
    <!-- third party js -->
    <!-- third party js ends -->
    <!-- Sweet Alerts js -->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
    <!-- Datatables init -->
    @if(!isset($capNhat))
    @elseif ($capNhat == 1)
        <script>
            swal.fire("Cập nhật thất bại!","" , "error")
        </script>
    @endif
    @endsection
    @section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    @endsection

    @section('main-content')
      <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body" dir="ltr">
                    <h4 class="header-title mb-4">Bar Chart</h4>
                    <div class="bar-container" style="width: 100%;height: 300px;">
                        <svg class="britechart bar-chart" width="513.890625" height="300">
                            <g class="container-group" transform="translate(65, 10)">
                                <g class="grid-lines-group">
                                    <line class="horizontal-grid-line" x1="0" x2="436.890625" y1="228" y2="228"></line>
                                    <line class="horizontal-grid-line" x1="0" x2="436.890625" y1="187" y2="187"></line>
                                    <line class="horizontal-grid-line" x1="0" x2="436.890625" y1="145" y2="145"></line>
                                    <line class="horizontal-grid-line" x1="0" x2="436.890625" y1="104" y2="104"></line>
                                    <line class="horizontal-grid-line" x1="0" x2="436.890625" y1="62" y2="62"></line>
                                    <line class="horizontal-grid-line" x1="0" x2="436.890625" y1="21" y2="21"></line>
                                    <line class="extended-x-line" x1="0" x2="436.890625" y1="270" y2="270"></line>
                                </g>
                                    <g class="chart-group">
                                        <rect class="bar" x="30" y="183" width="29" height="87" fill="#56c2d6"></rect>
                                        <rect class="bar" x="88" y="62" width="29" height="208" fill="#56c2d6"></rect>
                                        <rect class="bar" x="146" y="104" width="29" height="166" fill="#56c2d6"></rect>
                                        <rect class="bar" x="204" y="42" width="29" height="228" fill="#56c2d6"></rect>
                                        <rect class="bar" x="262" y="0" width="29" height="270" fill="#56c2d6"></rect>
                                        <rect class="bar" x="320" y="83" width="29" height="187" fill="#56c2d6"></rect>
                                        <rect class="bar" x="378" y="125" width="29" height="145" fill="#56c2d6"></rect>
                                    </g>
                                    <g class="x-axis-group axis" transform="translate(0, 270)" fill="none" font-size="10" font-family="sans-serif" text-anchor="middle"><g class="x-axis-label">
                                        
                                    </g>
                                    <path class="domain" stroke="#000" d="M0.5,6V0.5H437.390625V6"></path>
                                    <g class="tick" opacity="1" transform="translate(44.5,0)">
                                        <line stroke="#000" y2="6"></line>
                                        <text fill="#000" y="9" dy="0.71em">Mon</text>
                                    </g>
                                        <g class="tick" opacity="1" transform="translate(102.5,0)">
                                            <line stroke="#000" y2="6"></line>
                                            <text fill="#000" y="9" dy="0.71em">Tue</text>
                                        </g>
                                        <g class="tick" opacity="1" transform="translate(160.5,0)">
                                            <line stroke="#000" y2="6"></line>
                                            <text fill="#000" y="9" dy="0.71em">Wed</text>
                                        </g>
                                        <g class="tick" opacity="1" transform="translate(218.5,0)">
                                            <line stroke="#000" y2="6"></line>
                                            <text fill="#000" y="9" dy="0.71em">Thu</text>
                                        </g>
                                        <g class="tick" opacity="1" transform="translate(276.5,0)">
                                            <line stroke="#000" y2="6"></line>
                                            <text fill="#000" y="9" dy="0.71em">Fri</text>
                                        </g>
                                            <g class="tick" opacity="1" transform="translate(334.5,0)">
                                                <line stroke="#000" y2="6"></line>
                                                <text fill="#000" y="9" dy="0.71em">Sat</text>
                                            </g>
                                            <g class="tick" opacity="1" transform="translate(392.5,0)">
                                                <line stroke="#000" y2="6"></line>
                                                <text fill="#000" y="9" dy="0.71em">Sun</text>
                                            </g>
                                        </g>
                                        <g transform="translate(-10, 0)" class="y-axis-group axis" fill="none" font-size="10" font-family="sans-serif" text-anchor="end">
                                            <g class="y-axis-label"></g>
                                            <path class="domain" stroke="#000" d="M-6,270.5H0.5V0.5H-6"></path>
                                            <g class="tick" opacity="1" transform="translate(0,270.5)">
                                                <line stroke="#000" x2="-6"></line>
                                                <text fill="#000" x="-9" dy="0.32em">
                                                    <tspan x="0" dy="0.32em">0</tspan></text>
                                            </g>
                                            <g class="tick" opacity="1" transform="translate(0,228.5)">
                                                <line stroke="#000" x2="-6"></line>
                                                <text fill="#000" x="-9" dy="0.32em">
                                                    <tspan x="0" dy="0.32em">1,000</tspan></text>
                                            </g><g class="tick" opacity="1" transform="translate(0,187.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">2,000</tspan></text></g><g class="tick" opacity="1" transform="translate(0,145.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">3,000</tspan></text></g><g class="tick" opacity="1" transform="translate(0,104.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">4,000</tspan></text></g><g class="tick" opacity="1" transform="translate(0,62.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">5,000</tspan></text></g><g class="tick" opacity="1" transform="translate(0,21.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">6,000</tspan></text></g></g><g class="metadata-group"><g class="britechart britechart-mini-tooltip" width="100" height="100" style="visibility: hidden;"><g class="tooltip-container-group" transform="translate( 12, 12)"><g class="tooltip-group"><g class="tooltip-text select-disable"><rect class="tooltip-background" width="100" height="100" rx="1" ry="1" y="-12" x="-12" style="fill: rgb(255, 255, 255); stroke: rgb(210, 214, 223); stroke-width: 1; pointer-events: none; opacity: 0.9;"></rect></g></g></g></g></g></g></svg></div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->


                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body" dir="ltr">
                                <h4 class="header-title mb-4">Horizontal Bar Chart</h4>
                                <div class="bar-container-horizontal" style="width: 100%;height: 300px;"><svg class="britechart bar-chart" width="513.890625" height="300"><g class="container-group" transform="translate(60, 10)"><g class="grid-lines-group"><line class="vertical-grid-line" y1="0" y2="270" x1="105" x2="105"></line><line class="vertical-grid-line" y1="0" y2="270" x1="209" x2="209"></line><line class="vertical-grid-line" y1="0" y2="270" x1="314" x2="314"></line><line class="vertical-grid-line" y1="0" y2="270" x1="418" x2="418"></line><line class="extended-y-line" y1="0" y2="270" x1="0" x2="0"></line></g><g class="chart-group"><rect class="bar" y="232" x="0" height="34" width="110" fill="#f8cc6b"></rect><rect class="bar" y="194" x="0" height="34" width="261" fill="#675db7"></rect><rect class="bar" y="156" x="0" height="34" width="209" fill="#56c2d6"></rect><rect class="bar" y="118" x="0" height="34" width="288" fill="#f0643b"></rect><rect class="bar" y="80" x="0" height="34" width="340" fill="#e3eaef"></rect><rect class="bar" y="42" x="0" height="34" width="235" fill="#f672a7"></rect><rect class="bar" y="4" x="0" height="34" width="183" fill="#4a81d4"></rect></g><g class="x-axis-group axis" transform="translate(0, 270)" fill="none" font-size="10" font-family="sans-serif" text-anchor="middle"><g class="x-axis-label"></g><path class="domain" stroke="#000" d="M0.5,6V0.5H442.390625V6"></path><g class="tick" opacity="1" transform="translate(0.5,0)"><line stroke="#000" y2="-270"></line><text fill="#000" y="3" dy="0.71em">0</text></g><g class="tick" opacity="1" transform="translate(105.5,0)"><line stroke="#000" y2="-270"></line><text fill="#000" y="3" dy="0.71em">2,000</text></g><g class="tick" opacity="1" transform="translate(209.5,0)"><line stroke="#000" y2="-270"></line><text fill="#000" y="3" dy="0.71em">4,000</text></g><g class="tick" opacity="1" transform="translate(314.5,0)"><line stroke="#000" y2="-270"></line><text fill="#000" y="3" dy="0.71em">6,000</text></g><g class="tick" opacity="1" transform="translate(418.5,0)"><line stroke="#000" y2="-270"></line><text fill="#000" y="3" dy="0.71em">8,000</text></g></g><g transform="translate(-10, 0)" class="y-axis-group axis" fill="none" font-size="10" font-family="sans-serif" text-anchor="end"><g class="y-axis-label"></g><path class="domain" stroke="#000" d="M-6,270.5H0.5V0.5H-6"></path><g class="tick" opacity="1" transform="translate(0,249.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Mon</tspan></text></g><g class="tick" opacity="1" transform="translate(0,211.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Tue</tspan></text></g><g class="tick" opacity="1" transform="translate(0,173.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Wed</tspan></text></g><g class="tick" opacity="1" transform="translate(0,135.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Thu</tspan></text></g><g class="tick" opacity="1" transform="translate(0,97.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Fri</tspan></text></g><g class="tick" opacity="1" transform="translate(0,59.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Sat</tspan></text></g><g class="tick" opacity="1" transform="translate(0,21.5)"><line stroke="#000" x2="-6"></line><text fill="#000" x="-9" dy="0.32em"><tspan x="0" dy="0.32em">Sun</tspan></text></g></g><g class="metadata-group"><g class="percentage-label-group"><text class="percentage-label" x="190" y="25.5" font-size="12px">3500</text><text class="percentage-label" x="242" y="63.5" font-size="12px">4500</text><text class="percentage-label" x="347" y="101.5" font-size="12px">6500</text><text class="percentage-label" x="295" y="139.5" font-size="12px">5500</text><text class="percentage-label" x="216" y="177.5" font-size="12px">4000</text><text class="percentage-label" x="268" y="215.5" font-size="12px">5000</text><text class="percentage-label" x="117" y="253.5" font-size="12px">2100</text></g></g></g></svg></div>
                            </div>
                            <!-- end card body -->
                        </div>
                      <!--   end card -->
                     </div>
                    <!-- end col -->
                     </div>
        
    @endsection