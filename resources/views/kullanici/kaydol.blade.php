@extends('kullanici.template')

@section('title','Kaydol')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 oturum-mt">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Kaydol</b></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('kullanici.kaydol')}}">
                            {{csrf_field()}}
                            <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                                <label for="first_name" class="col-md-4 control-label">İsim</label>
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{old('first_name')}}" required autofocus>
                                    @if($errors->has('first_name'))
                                     <span class="help-block">
                                         <strong>{{$errors->first('first_name')}}</strong>
                                     </span>
                                    @endif
                                </div>
                            </div>

                              <div class="form-group {{$errors->has('last_name') ? 'has-error' : ''}}">
                                <label for="last_name" class="col-md-4 control-label">Soyisim</label>
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{old('last_name')}}" required autofocus>
                                    @if($errors->has('last_name'))
                                     <span class="help-block">
                                         <strong>{{$errors->first('last_name')}}</strong>
                                     </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirmation" class="col-md-4 control-label">Şifre (Tekrar)</label>
                                <div class="col-md-6">
                                    <input id="password-confirmation" type="password" class="form-control" name="password-confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Kaydol
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
