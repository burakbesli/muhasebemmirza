<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MuhasebemMirza KAyıt</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/css/form-elements.css">
    <link rel="stylesheet" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/css/style.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <link rel="shortcut icon" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="//{{@$_SERVER['HTTP_HOST']}}/login-assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>MuhasebemMirza</strong> Kayıt</h1>
                    <div class="description">
                        <p>
                            Basit bir şekilde gelir - gider tablosu uygulanmış Laravel ile tasarlanmış altyapıdır.
                            <a href="https://www.burakbesli.com.tr"><strong>Burak BEŞLİ</strong></a> tarafından geliştirilmiştir.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Lütfen Bilgilerinizi Giriniz</h3>
                            <p>email adresi, adınız ve şifreniz</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Adınız</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Adresiniz</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Şifreniz</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Şifreniz Tekrar</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <button type="submit" class="btn">Kayıt Ol!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
<script src="//{{@$_SERVER['HTTP_HOST']}}/login-assets/js/jquery-1.11.1.min.js"></script>
<script src="//{{@$_SERVER['HTTP_HOST']}}/login-assets/bootstrap/js/bootstrap.min.js"></script>
<script src="//{{@$_SERVER['HTTP_HOST']}}/login-assets/js/jquery.backstretch.min.js"></script>
<script src="//{{@$_SERVER['HTTP_HOST']}}/login-assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="//{{@$_SERVER['HTTP_HOST']}}/login-assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>