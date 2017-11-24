@extends('sablon.master')
@push('content')
    <section class="row">
        <div class="col-sm-12">
            <section class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-block">
                            <h3 class="card-title">Gider Listesi</h3>
                            <div class="dropdown card-title-btn-container">
                                <a href="{{route('gider.create')}}"><button class="btn btn btn-primary" type="button"><em class="fa fa-plus"></em> GİDER EKLE</button></a>
                            </div>
                            <div class="table-responsive">

                                <table id="example" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Gider Adı</th>
                                        <th>Gider Tutarı</th>
                                        <th>İşlem Tarihi</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Gider Adı</th>
                                        <th>Gider Tutarı</th>
                                        <th>İşlem Tarihi</th>
                                        <th>Sil</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($listele as $l)
                                        @php
                                            $tarih = $l->created_at;
                                            $tarih = strtotime($tarih);
                                            $tarih = date('Y-m-d', $tarih);
                                        @endphp
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$l->gider_adi}}</td>
                                            <td>{{$l->gider_tutari}} ₺</td>
                                            <td>{{$tarih}}</td>
                                            <td>

                                                {!! Form::open(['route' => ['gider.destroy','id' => $l->id], 'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-link" type="submit"><em class="fa fa-plus"></em> GİDER SİL</button>
                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
    <script src="asset/js/chart-data.js"></script>
    <script src="asset/js/easypiechart.js"></script>
    <script src="asset/js/easypiechart-data.js"></script>
    <script src="asset/js/bootstrap-datepicker.js"></script>
    <script src="asset/js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.4.2/r-2.2.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.4.2/r-2.2.0/datatables.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#example').DataTable({
                "language":{
                    "url":"//cdn.datatables.net/plug-ins/1.10.16/i18n/Turkish.json"
                }
            });
        } );

        window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };
    </script>

@endpush