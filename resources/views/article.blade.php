@extends('layouts.frontend')

@section('keywords')
<meta name="keywords" content="{!! str_replace(' ', ',', $article->keywords) !!}">
@endsection

@section('description')
<meta name="description" content="{!! $article->summary !!}">
@endsection

@section('css')
<link href="//cdn.bootcss.com/highlight.js/9.7.0/styles/solarized-light.min.css" rel="stylesheet">
@endsection

@section('main')
<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="article col-md-8">
            <div class="text-muted">
                <span>
                    <i class="fa fa-key" aria-hidden="true"></i> {!! $article->keywords !!}
                </span>
                <span class="pull-right">
                    <i class="fa fa-clock-o" aria-hidden="true"></i> {!! $article->formated_created_at !!}
                </span>
            </div>
            <div class="clearfix"></div>
            <hr class="article-border">
            <div class="article-text">
                {!! Markdown::convertToHtml($article->text) !!}
            </div>
            <hr class="article-border">
        </div>
        @include('sidebar')
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.bootcss.com/highlight.js/9.7.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.article-text pre').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    });
</script>
@endsection