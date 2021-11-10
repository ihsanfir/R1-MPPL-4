@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('heading_1') DASHBOARD @endsection
@section('dashboard') active @endsection
@section('content')

    <div class="row">
        <div class="col-lg-6">
        <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h1 class="card-title">Incomes</h1>
                </div>
              </div>
              <div class="card-body">
                <div class="position-relative mb-4">
                  <canvas id="incomes-chart" height="200"></canvas>
                </div>

              </div>
            </div>
        </div>

        <div class="col-lg-6">
        <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Expanses</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="position-relative mb-4">
                  <canvas id="expanses-chart" height="200"></canvas>
                </div>

              </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    //ini di pake buat di taro yg kata kemaren tuh, income ama expanses buat price, label buat bulan"nya
    var incomes = {!! json_encode($incomes, JSON_HEX_TAG) !!}
    var expanses = {!! json_encode($expanses, JSON_HEX_TAG) !!}
    var label = {!! json_encode($label, JSON_HEX_TAG) !!}

    $(function () {
        'use strict'

        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        var mode      = 'index'
        var intersect = true

        var $incomesChart = $('#incomes-chart')
        var incomesChart  = new Chart($incomesChart, {
            data   : {
            labels  : label,
            //['JAN', 'FEB', 'MAR', 'APR', 'MAY ','JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [{
                type                : 'line',
                data                : incomes,
                backgroundColor     : 'transparent',
                borderColor         : '#007bff',
                pointBorderColor    : '#007bff',
                pointBackgroundColor: '#007bff',
                fill                : false
                // pointHoverBackgroundColor: '#007bff',
                // pointHoverBorderColor    : '#007bff'
            }]
            },
            options: {
            maintainAspectRatio: false,
            tooltips           : {
                mode     : mode,
                intersect: intersect
            },
            hover              : {
                mode     : mode,
                intersect: intersect
            },
            legend             : {
                display: false
            },
            scales             : {
                yAxes: [{
                // display: false,
                gridLines: {
                    display      : true,
                    lineWidth    : '4px',
                    color        : 'rgba(0, 0, 0, .2)',
                    zeroLineColor: 'transparent'
                },
                ticks    : $.extend({
                    beginAtZero : true,
                    suggestedMax: 200
                }, ticksStyle)
                }],
                xAxes: [{
                display  : true,
                gridLines: {
                    display: false
                },
                ticks    : ticksStyle
                }]
            }
            }
        })

        var $expansesChart = $('#expanses-chart')
        var expansesChart  = new Chart($expansesChart, {
            data   : {
            labels  : label,
            datasets: [{
                type                : 'line',
                data                : expanses,
                backgroundColor     : 'transparent',
                borderColor         : '#007bff',
                pointBorderColor    : '#007bff',
                pointBackgroundColor: '#007bff',
                fill                : false
                // pointHoverBackgroundColor: '#007bff',
                // pointHoverBorderColor    : '#007bff'
            }]
            },
            options: {
            maintainAspectRatio: false,
            tooltips           : {
                mode     : mode,
                intersect: intersect
            },
            hover              : {
                mode     : mode,
                intersect: intersect
            },
            legend             : {
                display: false
            },
            scales             : {
                yAxes: [{
                // display: false,
                gridLines: {
                    display      : true,
                    lineWidth    : '4px',
                    color        : 'rgba(0, 0, 0, .2)',
                    zeroLineColor: 'transparent'
                },
                ticks    : $.extend({
                    beginAtZero : true,
                    suggestedMax: 200
                }, ticksStyle)
                }],
                xAxes: [{
                display  : true,
                gridLines: {
                    display: false
                },
                ticks    : ticksStyle
                }]
            }
            }
        })
    })
</script>
@endsection