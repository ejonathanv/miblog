@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-200 rounded-md shadow-sm border-gray-300 focus:border-gray-300 focus:ring focus:ring-gray-300 focus:ring-opacity-50']) !!}>
