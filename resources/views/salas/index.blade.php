@extends('main')
@section('content')
  @forelse ($salas as $sala)
    @include('salas.partials.fields')
  @empty
    Não há salas cadastradas.
  @endforelse
@endsection