@extends('main')
@section('content')
@forelse($salas as $sala)
@include('salas.partials.fields')
<br>
@empty
    Não retornaram nenhum status
@endforelse
@endsection
