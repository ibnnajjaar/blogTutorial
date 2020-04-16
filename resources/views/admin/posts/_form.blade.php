<div class="card">
    <div class="card-header">
        {{ Route::is('posts.edit') ? 'Update' : 'Create New' }} Post
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @php
                        $selected_title = isset($post) ? $post->title : old('title');
                    @endphp
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', $selected_title, ['class' => addErrorClass($errors->has('title')), 'placeholder' => 'Post Title']) !!}
                    @include('includes.admin.error', ['field_name' => 'name'])
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @php
                        $selected_content = isset($post) ? $post->content : old('content');
                    @endphp
                    {!! Form::label('content', 'Content') !!}
                    <div class="quill-editor">

                    </div>
                    {!! Form::textarea('content', $selected_content, ['class' => addErrorClass($errors->has('content')) . ' quill-editor', 'placeholder' => 'Post body', 'rows' => 10]) !!}
{{--                    @include('includes.admin.error', ['field_name' => 'name'])--}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @php
                        $categories = App\Category::all()->pluck('name', 'id');
                        $selected_category = isset($post) ? $post->category_id : old('category');
                    @endphp
                    {!! Form::label('category', 'Category') !!}
                    {!! Form::select('category', $categories, $selected_category, ['class' => addErrorClass($errors->has('category')), 'placeholder' => 'Select a category']) !!}
                    @include('includes.admin.error', ['field_name' => 'category'])
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    @php
                        $tags = App\Tag::all()->pluck('name', 'id');
                        $selected_tags = isset($post) ? $post->tags()->pluck('id') : old('tags');
                    @endphp
                    {!! Form::label('tags[]', 'Tags') !!}
                    {!! Form::select('tags[]', $tags, $selected_tags, ['class' => addErrorClass($errors->has('tags')), 'multiple' => 'multiple']) !!}
                    @include('includes.admin.error', ['field_name' => 'tags'])
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <div class="form-group">
            {!! Form::submit(Route::is('admin.posts.edit') ? 'Update Post' : 'Save Post', ['class' => 'btn btn-sm btn-success']) !!}
        </div>
    </div>
</div>
