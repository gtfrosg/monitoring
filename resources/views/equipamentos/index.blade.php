@extends('main')
@section('content')
  @forelse($equipamentos as $equipamento)
    @include('equipamentos.partials.fields')
    <br>
    @empty
      Não retornaram nemhum registro de sala
  @endforelse
@endsection
