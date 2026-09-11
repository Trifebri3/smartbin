<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-agronex-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-agronex-700 focus:bg-agronex-700 active:bg-agronex-900 focus:outline-none focus:ring-2 focus:ring-agronex-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm shadow-agronex-500/30']) }}>
    {{ $slot }}
</button>
