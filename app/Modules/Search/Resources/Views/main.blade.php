<div class="search">
    <form action="{{ route('search') }}" method="post">
        {{ csrf_field() }}
        <input class="search-input" type="text" placeholder="@lang('search::index.input_placeholder')" name="query" required minlength="3" value="{{ $query }}" maxlength="255">
        <button class="search-btn"></button>
    </form>
</div>



