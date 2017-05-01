@extends('layouts.master')

@section('title')
    People Talk - Dashboard
@stop

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form method="post" action="{{ route('post.create') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control" name="body" id="body" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people says...</h3></header>
            <article class="post">
                <p>Lorem Ipsum</p>
                <div class="info">
                    Posted by Username on 01 May 2017
                </div>
                <div class="interaction">
                    <a href="#">Like</a> | 
                    <a href="#">Dislike</a> | 
                    <a href="#">Edit</a> | 
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@stop

