<div class="flex mt-6">
    <label class="flex items-center">
        <input type="{{ $type }}" class="form-checkbox" name="{{ $name }}"
            wire:model="{{ $name }}">
        <span class="ml-2"> I agree to the <span class="underline">privacy policy</span></span>
    </label>
    @error('terms')
        <p class="text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>
