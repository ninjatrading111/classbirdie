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
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-info panel-colorful">
                    <div class="pad-all text-center">
                        <img alt="Profile Picture" class="img-md img-circle mar-btm"
                            src="{{ asset('img/profile-photos/2.png') }}">
                        <p class="text-lg text-semibold">All the Active User</p>
                        <span class="text-3x text-thin">{{ $output['payment'] }}</span>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Look all weekly by one eye</h3>
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
                        <h3 class="panel-title">Look monthly by one eye</h3>
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
