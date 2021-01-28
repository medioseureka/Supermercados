<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex">
                    <a href="{{ route('roles.index') }}" class="text-indigo-600 hover:text-indigo-900">
                        <img src="{{ asset('img/back.svg') }}" alt="{{ __('history.back') }}" title="{{ __('history.back') }}" width="22">
                    </a>
                    <h3 class="text-gray-700 text-3xl font-medium">{{ __('history.editRole') }}</h3>
                </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {{ __('history.errors') }}
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="flex bg-white rounded p-5 mt-4">
                        <form method="POST" action="{{ route('roles.update', $role->id) }}">
                            @csrf
                            @method('PATCH')

                            <div>
                                <x-jet-label for="email" value="{{ __('history.name') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="$role->name" required autofocus />
                            </div>

                            <div class="block mt-4">
                                <h4 class="text-gray-700 font-medium mb-4">{{ __('history.permissions') }}</h4>
                                @foreach($permission as $value)
                                    <label for="{{ $value->name }}" class="mb-2 flex items-center">
                                        @if(in_array($value->id, $rolePermissions))
                                            <input type="checkbox" id="{{ $value->name }}" checked class="form-checkbox" value="{{ $value->id }}" name="permission[]">
                                        @else
                                            <input type="checkbox" id="{{ $value->name }}" class="form-checkbox" value="{{ $value->id }}" name="permission[]">
                                        @endif
                                        <span class="ml-2 text-sm text-gray-600">{{ $value->name }}</span>
                                    </label>
                                @endforeach
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

