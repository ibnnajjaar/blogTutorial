<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="row">
            {!! Form::open(['action' => 'Web\HomeController@index', 'method' => 'GET', 'class' => 'input-group mb-4']) !!}
            @php
                $selected_search = $search ?? old('search');
            @endphp
            {!! Form::text('search', $selected_search, ['class' => addErrorClass($errors->has('search')), 'placeholder' => 'Search...']) !!}
            <span class="input-group-btn">
                {!! Form::submit('Search', ['class' => 'btn btn-dark']) !!}
            </span>
            {!! Form::close() !!}
        </div>
    </div>
</div>
