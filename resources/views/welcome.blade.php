@extends('layouts.frontend')

@section('keywords')
<meta name="keywords" content="稻草狗,博客,strawdog">
@endsection

@section('description')
<meta name="description" content="稻草狗的个人博客">
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="jumbotron" style="background-color: white;">
                <?php $motto = App\Models\Motto::all()->random() ?>
                <h2>{!! $motto->content !!}</h2>
                <h2 class="pull-right" style="margin-top: 0px;"><small> -- {!! $motto->source !!}</small></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="article-block">
                @foreach($articles as $article)
                <div class="article-piece">
                    <h3>
                        <a href="{!! route('article.show',$article->id) !!}">{!! $article->title !!}</a>
                    </h3>
                    <p class="article-summary">{!! $article->summary !!}</p>
                    <span>
                        <i class="fa fa-key" aria-hidden="true"></i> {!! $article->keywords !!}
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> {!! $article->created_at !!}
                    </span>
                    <div class="clearfix"></div>
                    <hr class="article-border">
                </div>
                @endforeach
                <div class="article-paginate">{!! $articles->links() !!}</div>
            </div>
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