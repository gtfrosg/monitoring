@extends('main')
@section('content')
@forelse($status as $statu)
@include('status.partials.fields')
<br>
@empty
    Não retornaram nenhum status
@endforelse
@endsection
