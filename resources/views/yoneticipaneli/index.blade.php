@extends('sablon.master')
@push('content')
<section class="row">
    <div class="col-sm-12">
        <section class="row">
            <div class="col-md-12 col-lg-12">
                <div class="jumbotron">
                    <h1 class="mb-4">Merhaba, Hoş Geldiniz!</h1>

                    <p class="lead">Bugün ki mali durumunuz nedir acaba, öğrenmek isterim ?</p>

                    <p>Yeni Gelir - Gider işlemleri için burayı ziyaret ettiğinizi umuyorum hadi işlem yapalım ;)</p>

                    <p class="lead"><a class="btn btn-primary btn-lg mt-2" href="{{route('gelir.create')}}" role="button">GELİR EKLE</a> <a class="btn btn-primary btn-lg mt-2" href="{{route('gider.create')}}" role="button">GİDER EKLE</a></p>
                </div>


                <div class="row">
                <div class="col-md-6 col-lg-6">
                <div class="card mb-4">
                    <div class="card-block">
                        <h3 class="card-title">Gelir Özeti</h3>

                        <h6 class="card-subtitle mb-2 text-muted">grafiksel olarak gelir tablonuz</h6>

                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="card mb-4">
                        <div class="card-block">
                            <h3 class="card-title">Gider  Özeti</h3>

                            <h6 class="card-subtitle mb-2 text-muted">grafiksel olarak gider tablonuz</h6>

                            <div class="canvas-wrapper">
                                <canvas class="main-chart" id="line-chart2" height="200" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>


        </section>
        <section class="row">
            <div class="col-12 mt-1 mb-4">Düzenleyen: <a href="https://www.burakbesli.com.tr">Burak Beşli</a></div>
        </section>
    </div>
</section>
@endpush

@push('js')
    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="asset/dist/js/bootstrap.min.js"></script>
    <script src="asset/js/chart.min.js"></script>

    <script src="asset/js/easypiechart.js"></script>
    <script src="asset/js/easypiechart-data.js"></script>
    <script src="asset/js/bootstrap-datepicker.js"></script>
    <script src="asset/js/custom.js"></script>

    <script>

          var lineChartData = {
            labels : [@foreach($gelirChart as $k => $v) "{{date('Y-m-d',strtotime($k))}}", @endforeach],
            datasets : [
                {
                    label: "Gelir",
                    fillColor : "rgba(128,130,228,0.6)",
                    strokeColor : "rgba(128,130,228,1)",
                    pointColor : "rgba(128,130,228,1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(128,130,228,1)",
                    data : [@foreach($gelirChart as $k => $v) {{$v}}, @endforeach]
                }
            ]

        };

          var lineChartData2 = {
              labels : [@foreach($giderChart as $k => $v) "{{date('Y-m-d',strtotime($k))}}", @endforeach],
              datasets : [
                  {
                      label: "Gelir",
                      fillColor : "rgba(128,130,228,0.6)",
                      strokeColor : "rgba(128,130,228,1)",
                      pointColor : "rgba(128,130,228,1)",
                      pointStrokeColor : "#fff",
                      pointHighlightFill : "#fff",
                      pointHighlightStroke : "rgba(128,130,228,1)",
                      data : [@foreach($giderChart as $k => $v) {{$v}}, @endforeach]
                  }
              ]

          };

        window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
            var chart2 = document.getElementById("line-chart2").getContext("2d");
            window.myLine = new Chart(chart2).Line(lineChartData2, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };



    </script>

@endpush