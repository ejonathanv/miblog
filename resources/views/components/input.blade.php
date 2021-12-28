@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-primary rounded-md shadow-sm border-secondary focus:border-secondary focus:ring focus:ring-secondary focus:ring-opacity-50']) !!}>
