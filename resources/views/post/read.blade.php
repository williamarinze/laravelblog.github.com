@extends('layouts.master')

@section('title')
    Allpro Blog 
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">
                    <div class="blog-post" style="border:groove;padding:20px;border-radius:10px; height:360px; " >
                        <h2 class="blog-post-title">{{ $post->title }}</h2>
                        <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} by <a href="#">{{ $post->name }}</a></i></small></p>

                        <p>{{ $post->description }}</p>
                    </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->
            <div>
         <h3>Comments</h3>
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>
            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection