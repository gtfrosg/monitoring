@extends('main')
@section('content')
  <form method="POST" action="/mesas/update/{{ $mesa->id }}">
    @csrf
    @method('patch')
    @include('mesas.partials.form')
  </form>
@endsection
