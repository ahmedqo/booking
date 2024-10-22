<ul class="flex flex-col gap-2">
    @foreach ($list as $text)
        <li class="flex flex-wrap items-center gap-2 text-lg text-x-black font-normal">
            <span class="block w-2 h-2 border border-x-x-black border-y-x-black rounded-full"></span>
            <span class="w-0 flex-1">
                {{ $text }}.
            </span>
        </li>
    @endforeach
</ul>
