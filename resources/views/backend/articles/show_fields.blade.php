<!-- Id Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <div class="form-control">{!! $article->id !!}</div>
</div>

<!-- Title Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    <div class="form-control">{!! $article->title !!}</div>
</div>

<!-- Text Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('text', 'Text:') !!}
    <div class="panel panel-default">
        <div class="panel-body">
            {!! Markdown::convertToHtml($article->text) !!}
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <div class="form-control">{!! $article->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <div class="form-control">{!! $article->updated_at !!}</div>
</div>

<div class="form-group col-sm-offset-3 col-sm-6">
    <a href="{!! route('backend.articles.edit', [$article->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a href="{!! route('backend.articles.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
</div>