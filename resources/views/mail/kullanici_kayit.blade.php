
<h1>{{config('app.name')}}</h1>
<p>Merhaba {{$users->name}} Kaydınız başarılı bir şekilde tamamlandı</p>
<p>Kaydinizi aktifleştirmek için
    <a href="{{ config('app.url') }}:8000/kullanici/aktiflestir/{{ $users->aktivasyon_anahtari }}">tıklayın</a>
    veya aşağıdaki bağlantıyı tarayıcınızda açınız  </p>
<p>
    {{ config('app.url') }}/kullanici/aktiflestir/{{ $users->aktivasyon_anahtari }}
</p> 