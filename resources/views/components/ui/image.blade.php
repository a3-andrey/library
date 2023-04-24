@props(['photo' => false, 'label','name'])

<label class="block">
    <span class="text-gray-700">{{ $label }}</span>
    @if ($photo)
    <img
        src="{{ $photo->temporaryUrl() }}"
        class="h-auto
        max-w-sm
        rounded-lg
         shadow-none
         transition-shadow
         duration-300
         ease-in-out
         hover:shadow-lg
         hover:shadow-black/30"
        alt="" />
    @endif
    <input wire:model="{{ $name }}"
           type="file"
           name="title"
           class="block w-full mt-1 rounded-md"
           value="{{ old($name) }}"
    />
</label>
@error($name)
<div class="text-sm text-red-600">{{ $message }}</div>
@enderror
