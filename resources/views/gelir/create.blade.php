@extends('sablon.master')
@push('content')
    <section class="row">
        <div class="col-sm-12">
            <section class="row">

                <div class="col-sm-12 col-md-12">
                    <div class="card mb-4">
                        <div class="card-block">
                            <h3 class="card-title">Gelir Ekleme</h3>



                            <h6 class="card-subtitle mb-2 text-muted">BU BÖLÜMDEN FİNANSAL GELİR EKLEYEBİLİRSİNİZ.</h6>

                            <form class="form-horizontal" action="{{route('gelir.store')}}" method="post">
                                {{ csrf_field() }}
                                <fieldset>
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="col-12 control-label no-padding" for="name">Gelir Adı</label>

                                        <div class="col-12 no-padding">
                                            <input id="gelir_adi" name="gelir_adi" type="text" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Email input-->
                                    <div class="form-group">
                                        <label class="col-12 control-label no-padding" for="email">Gelir Tutarı</label>

                                        <div class="col-12 no-padding">
                                            <input id="gelir_tutari" name="gelir_tutari" type="number"  class="form-control" required>
                                        </div>
                                    </div>


                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-12 widget-right no-padding">
                                            <button type="submit" class="btn btn-primary btn-md float-right">GELİR Ekle</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
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
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/dist/js/bootstrap.min.js"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/chart.min.js"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/chart-data.js"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/easypiechart.js"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/easypiechart-data.js"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/bootstrap-datepicker.js"></script>
    <script src="//{{@$_SERVER['HTTP_HOST']}}/asset/js/custom.js"></script>


@endpush