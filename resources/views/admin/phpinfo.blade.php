<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PHPInfo') }}
        </div>
    </x-slot>
    <x-content>
        <div class="justify-center max-w-full box-content bg-purple-400 font-bold box-border border-2 border-black p-2">
            <ul class="list-disc mx-4">
                <li> {!! shell_exec('COMPOSER_HOME=/usr/local/bin /usr/local/bin/composer --version') !!}
                <li> {!! 'Node version '. shell_exec('node --version') !!}
                <li> {!! 'NPM version '. shell_exec('npm --version') !!}
                <li> {!! 'Yarn version '. shell_exec('yarn --version') !!}
            </ul>
        </div>
        {!! phpinfo(); !!}
    </x-content>
</x-app-layout>
