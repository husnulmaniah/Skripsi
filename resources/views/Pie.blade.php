@extends('layout.master')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row col-12 col-md-12 col-lg-12">
                <div id="piechart" class="col-12 col-md-12 col-lg-12">
                    {{-- <canvas id="piechart"></canvas> --}}
                </div>
                
            </div>
            <div class="row col-12 col-md-12 col-lg-12 mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Layanan Donor Darah Terpercaya</h4>
                        </div>
                        <div class="card-body">
                            <p>Mendonor Darah membuat sebuah perbedaan besar
                                untuk hidup orang banyak. kami membutuhkan
                                kalian semua karena setetes darah kalian dapat
                                membantu orang lain untuk tetap hidup
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
   
@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart("piechart", {
            chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '<h5><b>Diagram Jumlah Darah yang tersedia di <br>UTD PMI SULTENG</b></h5>'
        },
        tooltip: {
            pointFormat: '{series.name}: <br>{point.percentage:.1f} Kantong</br>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Jumlah Darah',
            colorByPoint: true,
            data: [{
                name: 'A+',
                y: 10
            }, {
                name: 'A-',
                y: 11
            }, {
                name: 'B+',
                y: 20
            }, {
                name: 'B-',
                y: 15
            }, {
                name: 'O+',
                y: 9
            }, {
                name: 'O-',
                y: 8
            },{
                name: 'AB+',
                y: 12
            },{
                name: 'AB-',
                y: 8
            }]
        }]
    });
    
</script>
@endsection