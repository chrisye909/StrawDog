@extends('layouts.frontend')

@section('css')
<link href="//cdn.bootcss.com/highlight.js/9.7.0/styles/solarized-light.min.css" rel="stylesheet">
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="article col-md-8 col-md-offset-2">
            <br>
            <span>
                <i class="fa fa-key" aria-hidden="true"></i> {!! $article->keywords !!}
            </span>
            <span class="pull-right">
                <i class="fa fa-clock-o" aria-hidden="true"></i> {!! $article->created_at !!}
            </span>
            <div class="clearfix"></div>
            <hr class="article-border">
            <div class="article-text">
                <p>
                    {!! Markdown::convertToHtml($article->text) !!}
                </p>
            </div>
            <hr class="article-border">
            <br>
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
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.bootcss.com/highlight.js/9.7.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
    $(document).ready(function() {
      $('pre').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    });
</script>
@endsection