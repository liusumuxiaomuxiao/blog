@extends('layouts.blog.list')
@section('list_content')
  @foreach ($tweets as $tweet)
    <div class="post-preview">
        <h3 class="post-subtitle">
            {{ $tweet->content }}
        </h3>
        <p class="post-meta">Posted on {{ $tweet->created_at->format('F j, Y') }}</p>
    </div>
    <hr>
  @endforeach
  {{ $tweets->links() }}
@endsection
