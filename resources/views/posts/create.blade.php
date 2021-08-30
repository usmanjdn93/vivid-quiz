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

                        <h1 class="title is-1">Create a new Post</h1>

                        <form method="POST" action="/posts">
                            @include ('posts.form')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
