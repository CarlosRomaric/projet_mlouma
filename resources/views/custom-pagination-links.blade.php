
   {{-- 
   @if ($paginator->hasPages())
    <nav role="navigation" aria-label="Page navigation example">
  
        <ul class="list-style-none flex float-end" name="menu">
            @if ($paginator->onFirstPage())
                <span class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 pointer-events-none"><</span>
            @else
                <button wire:click="gotoPage(1)" wire:loading.attr="disabled" class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-green-900 hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-white"><</button>
            @endif

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li>
                    @if ($i == $paginator->currentPage())
                        <span class="relative block rounded-full bg-green-900 px-3 py-1.5 text-sm text-white transition-all duration-300 dark:text-neutral-400">{{ $i }}</span>
                    @else
                        <button wire:click="gotoPage({{ $i }})" wire:loading.attr="disabled" class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-green-900 hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-white">{{ $i }}</button>
                    @endif
                </li>
            @endfor

            @if ($paginator->onLastPage())
                <span class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm font-bold text-neutral-600 transition-all duration-300 pointer-events-none">
                  >
                </span>
            @else
                <button wire:click="gotoPage({{ $paginator->lastPage() }})" wire:loading.attr="disabled" class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm font-bold text-neutral-600 transition-all duration-300 hover:bg-green-900 hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-white">
                    >
                </button>
            @endif
        </ul>
    </nav>
    @endif
   --}}

   @if ($paginator->hasPages())
    <nav role="navigation" aria-label="Page navigation example">
        <ul class="list-style-none flex float-end" name="menu">
            @if ($paginator->onFirstPage())
                <span class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 pointer-events-none"><</span>
            @else
                <button wire:click="gotoPage(1)" wire:loading.attr="disabled" class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-green-900 hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-white"><</button>
            @endif

            @php
                $dotsAdded = false;
            @endphp

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                @if ($i <= 5 || $i > $paginator->lastPage() - 5 || $i == $paginator->currentPage() || ($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1))
                    <li>
                        @if ($i == $paginator->currentPage())
                            <span class="relative block rounded-full bg-green-900 px-3 py-1.5 text-sm text-white transition-all duration-300 dark:text-neutral-400">{{ $i }}</span>
                        @else
                            <button wire:click="gotoPage({{ $i }})" wire:loading.attr="disabled" class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-green-900 hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-white">{{ $i }}</button>
                        @endif
                    </li>
                @elseif (!$dotsAdded)
                    <li>
                        <span class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 pointer-events-none">...</span>
                    </li>
                    @php
                        $dotsAdded = true;
                    @endphp
                @endif
            @endfor

            @if ($paginator->onLastPage())
                <span class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm font-bold text-neutral-600 transition-all duration-300 pointer-events-none">></span>
            @else
                <button wire:click="gotoPage({{ $paginator->lastPage() }})" wire:loading.attr="disabled" class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm font-bold text-neutral-600 transition-all duration-300 hover:bg-green-900 hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-white">></button>
            @endif
        </ul>
    </nav>
@endif
