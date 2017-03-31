@extends('layouts.blog.list')
@section('list_content')
  @foreach ($journals as $journal)
    <div class="post-preview">
        <a href="{{ route('journals.show', $journal->id) }}">
            <h2 class="post-title">
                {{ $journal->title }}
            </h2>
        </a>
        <p class="post-meta">Posted on {{ $journal->created_at->format('F j, Y') }}</p>
    </div>
    <hr>
  @endforeach
  {{ $journals->links() }}
@endsection
