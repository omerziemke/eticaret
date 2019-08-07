@extends('kullanici.template')

@section('title','Oturum Aç')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 oturum-mt">
                <div class="panel panel-default">
                    <div class="panel-heading">Oturum Aç</div>
                    <div class="panel-body">
                        

                        <form class="form-horizontal" role="form" method="POST" action="{{route('kullanici.oturumac')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sifre" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="sifre" type="password" class="form-control" name="sifre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="benihatirla" checked> Beni hatırla
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Giriş yap
                                    </button>
                                    <a href="{{route('kullanici.kaydol')}}"><button type="button" class="btn btn-primary">
                                        Kaydol
                                    </button></a>
                                  {{--   <a class="btn btn-link" href="{{ route('kullanici.sifre_form') }}">
                                        Şifremi Unuttum
                                    </a>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
