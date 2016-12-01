<table class="table table-responsive" id="articles-table">
    <thead>
        <th>Title</th>
        <th>Keywords</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->title !!}</td>
            <td>{!! $article->keywords !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a href="{!! route('backend.articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>