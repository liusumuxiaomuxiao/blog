@extends('layouts.blog.list')
@section('list_content')
@foreach ($musics as $music)
  <div class="post-preview">
    <p> {{ $music->name }}</p>
    <audio src="{{ $music->url }}" controls="controls">
      Your browser does not support the audio element.
    </audio>
    <p class="post-meta">Posted on {{ $music->created_at->format('F j, Y') }}</p>
  </div>
  <hr>
@endforeach
{{ $musics->links() }}
@endsection
