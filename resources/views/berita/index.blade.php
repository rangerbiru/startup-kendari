@extends('template')
@section('content')
    <h1>Berita</h1>
    <p>
      {{$data}}
      @if ($cek)
          benar
      @else
        Salah
      @endif
    </p>
@endsection

@section('page')
    Berita
@endsection