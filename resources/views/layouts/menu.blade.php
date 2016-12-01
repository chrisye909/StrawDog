<li class="{{ Request::is('backend/articles*') ? 'active' : '' }}">
    <a href="{!! route('backend.articles.index') !!}"><i class="fa fa-edit"></i><span>Articles</span></a>
</li>

<li class="{{ Request::is('backend/mottoes*') ? 'active' : '' }}">
    <a href="{!! route('backend.mottoes.index') !!}"><i class="fa fa-book" aria-hidden="true"></i><span>Mottoes</span></a>
</li>
