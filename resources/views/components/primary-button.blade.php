<button {{ $attributes->merge(['type' => 'submit',
'class' => 'inline-flex items-center px-4 py-2 bg-primary text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-seccondary focus:bg-light focus:text-black ctive:bg-black-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
