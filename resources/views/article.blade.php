@extends('layouts.frontend')

@section('main')
<div class="container">
    <div class="row">
        <div class="article col-md-8 col-md-offset-2">
            <br>
            <span class="pull-right">
                <span>
                    <i class="fa fa-key" aria-hidden="true"></i> {!! $article->keywords !!}
                </span>
                <span>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> {!! $article->created_at !!}
                </span>
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