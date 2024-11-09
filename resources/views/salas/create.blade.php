@extends('main')
@section('content')
  <form method="POST" action="/salas">
    @csrf
    @include('salas.partials.form')
  </form>
@endsection

