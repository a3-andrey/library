<label class="block">
    <span class="text-gray-700">{{ $label }}</span>
    <textarea class="block w-full mt-1 rounded-md" name="content" rows="3">{{ old('description') }}</textarea>
</label>
@error('description')
<div class="text-sm text-red-600">{{ $message }}</div>
@enderror
