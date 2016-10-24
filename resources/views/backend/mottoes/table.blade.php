<table class="table table-responsive" id="mottoes-table">
    <thead>
        <th>Content</th>
        <th>Source</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($mottoes as $motto)
        <tr>
            <td>{!! $motto->content !!}</td>
            <td>{!! $motto->source !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.mottoes.destroy', $motto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.mottoes.show', [$motto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.mottoes.edit', [$motto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>