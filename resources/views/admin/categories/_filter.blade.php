{!! Form::open(['action' => 'Admin\CategoryController@index', 'method' => 'GET']) !!}
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @php
                    $selected_search = isset($search) ? $search : old('search');
                @endphp
                {!! Form::label('search', 'Search') !!}
                {!! Form::text('search', $selected_search, ['class' => addErrorClass($errors->has('search')), 'placeholder' => 'Search by Name & Slug']) !!}
                @include('includes.admin.error', ['field_name' => 'search'])
            </div>
        </div>
    </div>
    {!! Form::submit('Filter', ['class' => 'btn btn-sm btn-success']) !!}
    <a href="{{ action('Admin\CategoryController@index') }}" class="btn btn-sm btn-outline-dark">Clear</a>
</div>
{!! Form::close() !!}
