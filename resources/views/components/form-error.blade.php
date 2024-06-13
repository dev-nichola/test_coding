@props(['key'])

@error($key)
<small class="block text-red-500">
    {{ $message }}
</small>
@enderror