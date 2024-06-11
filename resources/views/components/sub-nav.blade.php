@props(['tabs'])

<ul class="nav nav-tabs border-b-2 mb-4" id="reportTab" role="tablist">
    @foreach($tabs as $tab)
        <li class="nav-item" role="presentation">
            <a class="nav-link @if($loop->first) active @endif text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 transition-colors duration-200"
               id="{{ $tab['id'] }}-tab" data-toggle="tab" href="#{{ $tab['id'] }}" role="tab"
               aria-controls="{{ $tab['id'] }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                {{ $tab['name'] }}
            </a>
        </li>
    @endforeach
</ul>
<div class="tab-content" id="reportTabContent">
    @foreach($tabs as $tab)
        <div class="tab-pane fade @if($loop->first) show active @endif p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md" id="{{ $tab['id'] }}" role="tabpanel" aria-labelledby="{{ $tab['id'] }}-tab">
            @include($tab['view'])
        </div>
    @endforeach
</div>
