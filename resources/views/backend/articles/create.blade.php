@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Article
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'backend.articles.store', 'class' => 'form-horizontal']) !!}

                        @include('backend.articles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
