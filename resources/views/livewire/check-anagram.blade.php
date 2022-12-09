<div class="grid place-items-center min-h-screen bg-green-400 text-green-900">
    <div class="container p-20 shadow  bg-green-200 rounded">
        <div class="grid grid-cols-2 space-x-20 ">
            <div>
                <label for="email" class="block text-sm font-medium uppercase">needle</label>
                <div class="mt-1">
                    <input type="text"
                           wire:model="needle"
                           class="p-5 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm"
                           placeholder="type a word">
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium uppercase">haystack</label>
                <div class="mt-1">
                    <input wire:model="haystack"
                           type="text"
                           class="p-5 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm"
                           placeholder="type a word">
                </div>
            </div>
        </div>
        <div class="w-full grid place-items-center pt-10">
            @if($haystack && $needle)
                <p>
                    The string is {{ !$matches ? 'not' : ''  }} an anagram
                </p>
            @else
                <p>
                    Populate both fields to test the string
                </p>
            @endif
        </div>
    </div>
</div>
