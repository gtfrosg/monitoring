@extends('main')
@section('content')
  <form method="POST" action="/mesas/store">
    @csrf
    @include('mesas.partials.form')
  </form>
@endsection
