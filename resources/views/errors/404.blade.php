@extends('kullanici.template')
@section('content')
<div class='container'>
	<div class='jumbotron text-center margin-alt'>
		<h1>404</h1>
		<h2>Aradıgınız Sayfa Bulunamadı!!!</h2>
		
       <a href="{{route('kullanici.anasayfa')}}" class="btn btn-primary">Anasayfaya Dön</a>
	</div>

</div>

@endsection()