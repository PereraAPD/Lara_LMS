@props(['onclick', 'text', 'bgColor', 'textColor'])

<button type="button" onclick="{{ $onclick }}" class="inline-flex items-center px-4 py-2 bg-{{ $bgColor }} border border-transparent rounded-md font-semibold text-xs text-{{ $textColor }} uppercase tracking-widest hover:bg-{{ $bgColor }} focus:outline-none focus:border-indigo-700 focus:ring focus:ring-{{ $bgColor }}-200 active:bg-{{ $bgColor }} transition ease-in-out duration-150">{{ $text }}</button>
