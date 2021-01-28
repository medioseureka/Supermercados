<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex">
                <a href="{{ route('users.index') }}" class="text-indigo-600 hover:text-indigo-900">
                    <img src="{{ asset('img/back.svg') }}" alt="{{ __('history.back') }}" title="{{ __('history.back') }}" width="22">
                </a>
                <h3 class="ml-3 text-gray-700 text-3xl font-medium">{{ __('history.createUser') }}</h3>
            </div>

                @if (count($errors) > 0)
                    <div class="mb-3 p-3 bg-red-200">
                        {{ __('history.errors') }}
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <div class="flex bg-white rounded p-5 mt-4">
                    <form method="POST" action="{{ route('users.store') }}" class="grid grid-cols-3 container">
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
                            <x-jet-label for="email" value="{{ __('history.address') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="phone" value="{{ __('history.phone') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="email" value="{{ __('history.password') }}" />
                            <x-jet-input class="block mt-1 w-full" type="password" name="password" :value="old('password')" required autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="email" value="{{ __('history.repassword') }}" />
                            <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" :value="old('repassword')" required autofocus />
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="email" value="{{ __('history.company') }}" />
                            <select name="company_id" class="form-input rounded shadow-sm block mt-1 w-full" required>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pr-2 pl-2">
                            <x-jet-label for="email" value="{{ __('history.role') }}" />
                            <select name="role_id" class="block mt-1 w-full form-input rounded shadow-sm" required>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
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
</div><!---->
</x-app-layout>

