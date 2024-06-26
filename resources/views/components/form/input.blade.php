@props(['name', 'type' => 'text'])
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{$name}}">
        {{ucwords($name)}}
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
     id="{{$name}}" name="{{$name}}" type={{$type}} {{ $attributes(['value' => old($name)]) }}>
    {{-- <x-form.form-error name="{{$name}}"/> --}}
    <x-form.form-error name="{{$name}}"/>
</div>