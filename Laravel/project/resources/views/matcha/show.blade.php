@extends('layouts.app')

@section('content')
<h4>{{ $matcha->title }}</h4>
<p>{{ $matcha->content }}</p>
<a href="{{ route('matcha.index') }}" class="btn btn-default">Kembali</a>
@endsection