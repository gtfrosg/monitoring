@extends('main')
@section('content')
  <form method="POST" action="/equipamentos/store">
    @csrf
    @include('equipamentos.partials.form')
  </form>
@endsection
