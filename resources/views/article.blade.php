@extends('layouts.frontend')

@section('css')
<style type="text/css">
</style>
@endsection
    <style type="text/css">
    </style>
@section('main')
<div class="container">
    <div class="article">
        <h1>{!! $article->title !!}</h1>
        <div class="pull-right">
            <span class="glyphicon glyphicon-calendar" aria-hidden="true">{!! $article->created_at !!}</span>
        </div>
        <hr>
        <div class="text">
            <p>{!! $article->text !!}</p>
        </div>
    </div>
    <hr>
    <div class="row comment" style="padding-left: 13px;padding-right: 13px;">
        <div class="ds-thread" data-thread-key="{!! $article->id !!}" data-title="{!! $article->title !!}" data-url="{!! route('article.show',$article->id) !!}"></div>
        <script type="text/javascript">
        var duoshuoQuery = {short_name:"chrispace"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.unstable.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
        </script>
    </div>
</div>
@endsection