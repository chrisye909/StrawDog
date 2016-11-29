@extends('layouts.frontend')

@section('css')
<style type="text/css">
</style>
@endsection
    <style type="text/css">
        .article-block-border {
            border-bottom: 1px dashed gray;
        }
    </style>
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="jumbotron" style="background-color: white;">
                <h2>Keep it simple, keep it stupied!</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach($articles as $article)
            <div class="article-block">
                <h3><a href="{!! route('article.show',$article->id) !!}">{!! $article['title'] !!}</a></h3>
                <p>{!! $article['summary'] !!}</p>
                <p>{!! $article['created_at'] !!}</p>
                <hr class="article-block-border">
            </div>
            @endforeach
        </div>
        <div class="col-md-4 visible-md-block visible-lg-block">
            <div class="panel-body" style="padding-top: 0px;">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="thumbnail">
                            <img src="img/b.jpg" alt="Uma Thurman">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a target="_blank" href="http://weibo.com/yjx306866027">
                                            <img src="img/sina.png" style="height:25px;width:30px">
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a target="_blank" href="https://github.com/chrisye909">
                                        <img src="img/github.png" style="height:25px;width:25px">
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="mailto:yjx909@sina.com">
                                        <img src="img/mail.png" style="height:25px;width:25px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection