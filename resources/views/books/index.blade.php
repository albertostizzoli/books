@extends('layouts.app')

@section('title', ' All Books')

@section('content')

@foreach($books as $book)
<li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li>
@endforeach
@endsection
