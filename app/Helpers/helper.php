<?php

if (! function_exists('addErrorClass')) {

    function addErrorClass($has_error)
    {
        return $has_error ? 'is-invalid form-control' : 'form-control';
    }
}
