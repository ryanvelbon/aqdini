@props(['options' => [], 'selected' => null, 'name'])

<select {{ $attributes->merge(['class' => 'rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) }} name="{{ $name }}">
    <option value="">-- Select --</option>
    @foreach ($options as $option)
        <option value="{{ $option['id'] }}" {{ $selected == $option['id'] ? 'selected' : '' }}>{{ $option['name'] }}</option>
    @endforeach
</select>