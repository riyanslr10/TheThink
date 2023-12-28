<div class="flex justify-center mt-8">
    <ul class="flex list-none">

        {{-- Previous Page Link --}}
        @if ($posts->onFirstPage())
            <li class="px-2 py-1 mr-1 text-gray-500 rounded-md cursor-not-allowed">
                <span>Previous</span>
            </li>
        @else
            <li class="px-2 py-1 mr-1 text-blue-500 bg-blue-100 rounded-md cursor-pointer"
                wire:click="previousPage">
                <span>Previous</span>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($posts->hasMorePages())
            <li class="px-2 py-1 mr-1 text-blue-500 bg-blue-100 rounded-md cursor-pointer"
                wire:click="nextPage">
                <span>Next</span>
            </li>
        @else
            <li class="px-2 py-1 mr-1 text-gray-500 rounded-md cursor-not-allowed">
                <span>Next</span>
            </li>
        @endif
        
    </ul>
</div>
