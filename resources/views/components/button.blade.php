<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-secondary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-secondary active:bg-secondary focus:outline-none focus:border-secondary focus:ring ring-secondary disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>