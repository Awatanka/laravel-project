@props(['name', 'label', 'type' => 'text', 'placeholder' => '', 'rows' => 3])

<div class="mb-6">
    <label for="{{ $name }}" class="inline-block text-lg mb-2">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea class="border border-gray-200 rounded p-2 w-full" name="{{ $name }}" rows="{{ $rows }}"
            placeholder="{{ $placeholder }}">{{ old($name) }}</textarea>
    @else
        <input type="{{ $type }}" class="border border-gray-300 rounded p-2 w-full" name="{{ $name }}"
            placeholder="{{ $placeholder }}" value="{{ old($name) }}">
    @endif

    @error($name)
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
