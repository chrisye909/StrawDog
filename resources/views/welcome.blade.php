@extends('layouts.frontend')

@section('keywords')
<meta name="keywords" content="稻草狗,博客,strawdog">
@endsection

@section('description')
<meta name="description" content="稻草狗的个人博客">
@endsection

@section('main')
<div class="container">
    @include('motto')
    <div class="row">
        <div class="col-md-8">
            <div class="article-block">
                @foreach($articles as $article)
                <div class="article-piece">
                    <h3>
                        <a href="{!! route('article.show',$article->id) !!}">{!! $article->title !!}</a>
                    </h3>
                    <p class="article-summary">{!! $article->summary !!}</p>
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
                </div>
                @endforeach
                <div class="article-paginate">{!! $articles->links() !!}</div>
            </div>
        </div>
        @include('sidebar')
    </div>
</div>
@endsection