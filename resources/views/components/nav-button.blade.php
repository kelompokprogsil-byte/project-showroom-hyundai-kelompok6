<button {{ $attributes->class([
    'w-full lg:w-auto hover:cursor-pointer text-sm flex items-center justify-between hover:text-gray-100 hover:bg-gray-900 active:text-gray-100 active:bg-gray-900 lg:hover:bg-gray-900 lg:hover:text-white px-8 py-7 font-normal lg:transition lg:duration-200',
    $activeBut ? 'bg-gray-900 text-[var(--bg-primary)] lg:text-gray-100' : 'text-[var(--bg-primary)] lg:text-white'
  ]) }}>{{ $slot }}</button>