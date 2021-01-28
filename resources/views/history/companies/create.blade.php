<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex">
                    <a href="{{ route('companies.index') }}" class="text-indigo-600 hover:text-indigo-900">
                        <img src="{{ asset('img/back.svg') }}" alt="{{ __('history.back') }}" title="{{ __('history.back') }}" width="22">
                    </a>
                    <h3 class="ml-3 text-gray-700 text-3xl font-medium">{{ __('history.createCompany') }}</h3>
                </div>

                <div class="flex bg-white rounded p-5 mt-4">
                    <form method="POST" action="{{ route('companies.store') }}" class="grid grid-cols-3 container">
                        @csrf

                        <div class="pr-2 pl-2">
                            <x-jet-label for="name" value="{{ __('history.name') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="email" value="{{ __('history.email') }}" />
                            <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="addres" value="{{ __('history.address') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus required />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="phone" value="{{ __('history.phone') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="phone1" :value="old('phone1')"  autofocus required />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="phone" value="{{ __('history.phone') }} 2" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="phone2" :value="old('phone2')" autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="contact" value="{{ __('history.contact') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" autofocus required />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="nit" value="{{ __('history.nit') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="nit" :value="old('nit')" autofocus required />
                        </div>

                        <div class="flex items-center mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('history.save') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
