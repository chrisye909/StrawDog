<!-- Id Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <div class="form-control">{!! $motto->id !!}</div>
</div>

<!-- Content Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    <div class="form-control">{!! $motto->content !!}</div>
</div>

<!-- Source Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('source', 'Source:') !!}
    <div class="form-control">{!! $motto->source !!}</div>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <div class="form-control">{!! $motto->created_at !!}</div>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-offset-3 col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <div class="form-control">{!! $motto->updated_at !!}</div>
</div>

<div class="form-group col-sm-offset-3 col-sm-6">
    <a href="{!! route('backend.mottoes.edit', [$motto->id]) !!}" class='btn btn-default'><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a href="{!! route('backend.mottoes.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
</div>