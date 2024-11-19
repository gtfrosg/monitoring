@extends('main')
@section('content')
  <form method="POST" action="/salas/store">
    @csrf
    @include('salas.partials.form')
  </form>
@endsection

