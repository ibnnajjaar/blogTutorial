@php
    $field_name = $field_name ?? '';
@endphp
@if($errors->has($field_name))
    <div class="invalid-feedback">
        {{ $errors->first($field_name) }}
    </div>
@endif
