@extends('main')
@section('content')
  <form method="POST" action="/salas/update/{{ $sala->id }}">
    @csrf
    @method('patch')
    @include('salas.partials.form')
  </form>
@endsection
