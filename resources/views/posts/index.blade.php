@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                        <a class="btn btn-primary" href="{{ route('posts.create') }}" style="display: inline;float: right">NEW POST</a>
                    </div>

                    <div class="card-body">
                        @foreach ($posts as $post)

                            <div class="card mb-4">
                                <div class="card-header">
                                    <h2 class="is-4">
                                        <a href="/posts/{{ $post->id }}">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    {{ $post->body }}
                                </div>
                                <div class="card-footer">
                                    {{$post->created_at->timezone(session('timezone'))}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
