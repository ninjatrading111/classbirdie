@extends('layouts.admin')
@section('usercontent')

    <style>
        @media (min-width: 992px) {
            .row-eq-height {
                display: flex;
            }
        }
    </style>
    <div id="page-head">
        <div class="pad-all text-center"></div>
    </div>
    <div id="page-content">
        <h2>User Metrics</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-info panel-colorful">
                    <div class="pad-all text-center">
                        <img alt="Profile Picture" class="img-md img-circle mar-btm"
                            src="{{ asset('img/profile-photos/2.png') }}">
                        <p class="text-lg text-semibold">All the Active User</p>
                        <span class="text-3x text-thin">{{ $output['users'] }}</span>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success panel-colorful">
                    <div class="pad-all text-center">
                        <img alt="Profile Picture" class="img-md img-circle mar-btm"
                            src="{{ asset('img/profile-photos/2.png') }}">
                        <p class="text-lg text-semibold">All the Pending User</p>
                        <span class="text-3x text-thin">{{ $output['pending'] }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-heading">
                        {{-- <h3 class="panel-title">Look daily by one eye</h3> --}}
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-dark panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-3x text-thin">{{ $output['daily'] }}</span>
                                <p>Daily</p>
                                <i class="demo-psi-receipt-4 icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-dark panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-3x text-thin">{{ $output['weekly'] }}</span>
                                <p>Weekly</p>
                                <i class="demo-psi-receipt-4 icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-dark panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-3x text-thin">{{ $output['monthly'] }}</span>
                                <p>Monthly</p>
                                <i class="demo-psi-receipt-4 icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <h2>Subscription Metrics</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Active subscirption</h3>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-warning panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-3x text-thin">{{ $output['payment'] }}</span>
                                <p>Active Subscription</p>
                                <i class="demo-psi-receipt-4 icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-success panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-3x text-thin">{{ $output['weekly_pay'] }}</span>
                                <p>Weekly</p>
                                <i class="demo-psi-receipt-4 icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-info panel-colorful">
                            <div class="pad-all text-center">
                                <span class="text-3x text-thin">{{ $output['monthly_pay'] }}</span>
                                <p>Monthly</p>
                                <i class="demo-psi-receipt-4 icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('plugins/flot-charts/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.orderBars.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('js/demo/dashboard-2.js') }}"></script>
    @endpush
@endsection
