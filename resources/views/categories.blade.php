@extends('layouts.main')

@section('title')
    Categories
@endsection

@section('content')
    <div>
        @forelse ($categories as $category)
            <div><a href = '{{ route('categories::news', ['cat_id' => $category->id]) }}'>{{ $category->title }}</a></div>
        @empty
            <div>No categories</div>
        @endforelse
    </div>
@endsection





