<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="text-gray-700 text-3xl font-medium">{{ __('history.editUser') }}</h3>
                    <div class="flex">
                        <a href="{{ route('companies.index') }}" class="text-indigo-600 hover:text-indigo-900">{{ __('history.back') }}</a>
                    </div>

                <div class="flex bg-white rounded p-5 mt-4">
                        <form method="POST" action="{{ route('users.update', $user->id) }}" class="grid grid-cols-3 container">
                            @csrf
                            @method('PATCH')

                            <div class="pr-2 pl-2">
                                <x-jet-label for="name" value="{{ __('history.name') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="email" value="{{ __('history.email') }}" />
                                <x-jet-input class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="email" value="{{ __('history.address') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="address" value="{{ $user->address }}" autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="phone" value="{{ __('history.phone') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="phone" value="{{ $user->phone }}" required autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="email" value="{{ __('history.company') }}" />
                                <select name="company_id" class="form-input rounded shadow-sm block mt-1 w-full" required>
                                    @foreach($companies as $company)
                                        @if($user->company_id == $company->id)
                                            <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                                        @else
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="email" value="{{ __('history.role') }}" />
                                <select name="role_id" class="block mt-1 w-full form-input rounded shadow-sm" required>
                                    @foreach($roles as $role)
                                        @if(isset($user->roles[0]) && $user->roles[0]->name == $role->name)
                                            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                        @else
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endif
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
    </div>
</x-app-layout>
