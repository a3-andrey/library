<label class="block">
    <span class="text-gray-700">{{ $label }}</span>
    <input wire:model="{{ $name }}"
           type="text"
           name="title"
           class="block w-full mt-1 rounded-md"
           placeholder="{{ $placeholder }}"
           value="{{ old($name) }}"
    />
</label>
@error('title')
<div class="text-sm text-red-600">{{ $message }}</div>
@enderror
