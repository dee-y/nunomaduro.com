<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ $image }}">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $title }}</div>
        <p class="text-grey-darker text-base">
            {{ $body }}
        </p>
    </div>
    <div class="px-6 py-4">
        @foreach ($tags as $tag)
            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#{{ $tag }}</span>
        @endforeach
    </div>
</div>
