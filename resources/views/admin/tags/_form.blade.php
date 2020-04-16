<div class="card">
    <div class="card-header">
        {{ Route::is('tags.edit') ? 'Update' : 'Create New' }} Tag
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @php
                        $selected_name = isset($tag) ? $tag->name : old('name');
                    @endphp
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $selected_name, ['class' => addErrorClass($errors->has('name')), 'placeholder' => 'Tag name']) !!}
                    @include('includes.admin.error', ['field_name' => 'name'])
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @php
                        $selected_slug = isset($tag) ? $tag->slug : old('slug');
                    @endphp
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', $selected_slug, ['class' => addErrorClass($errors->has('slug')), 'placeholder' => 'Tag slug']) !!}
                    @include('includes.admin.error', ['field_name' => 'slug'])
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="form-group">
            {!! Form::submit(Route::is('tags.edit') ? 'Update Tag' : 'Save Tag', ['class' => 'btn btn-sm btn-success']) !!}
        </div>
    </div>
</div>
