@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                        <a class="btn btn-primary" href="{{ route('posts.create') }}"
                           style="display: inline;float: right">NEW POST</a>
                    </div>

                    <div class="card-body">
                        <article class="content">
                            <h1 class="title is-1">
                                {{ $post->title }}
                            </h1>

                            <div class="content">
                                {{ $post->body }}
                            </div>
                        </article>

                        <p>
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-danger">Edit</a>
                            <a href="/posts" class="btn btn-primary" style="float: right">Back</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
