@extends('main')
@section('content')
  <form method="POST" action="/equipamentos">
    @csrf
    @include('equipamentos.partials.form')
  </form>
@endsection