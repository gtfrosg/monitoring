@extends('main')
@section('content')
  @forelse ($equipamentos as $equipamento)
    @include('equipamentos.partials.fields')
  @empty
    Não há equipamentos cadastrados
  @endforelse
@endsection