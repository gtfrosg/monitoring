@extends('main')
@section('content')
  <form method="POST" action="/salas/{{ $sala->id }}">
    @csrf
    @method('patch')
    @include('salas.partials.form')
  </form>
@endsection