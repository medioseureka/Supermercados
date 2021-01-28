@section('datatables')
<script src="{{ asset('js/history/deletebtn.js') }}"></script>
@endsection

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex">
                    <a href="{{ route('companies.index') }}" class="text-indigo-600 hover:text-indigo-900">
                        <img src="{{ asset('img/back.svg') }}" alt="{{ __('history.back') }}" title="{{ __('history.back') }}" width="22">
                    </a>
                    <h3 class="text-gray-700 text-3xl font-medium">{{ __('history.editUser') }}</h3>
                </div>

                    <div class="flex bg-white rounded p-5 mt-4">
                        <form method="POST" action="{{ route('companies.update', $company->id) }}" class="grid grid-cols-3 container">
                            @csrf
                            @method('PATCH')

                            <div class="pr-2 pl-2">
                                <x-jet-label for="name" value="{{ __('history.name') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="name" value="{{ $company->name }}" required autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="email" value="{{ __('history.email') }}" />
                                <x-jet-input class="block mt-1 w-full" type="email" name="email" value="{{ $company->email }}" required autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="email" value="{{ __('history.address') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="address" value="{{ $company->address }}" autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="phone" value="{{ __('history.phone') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="phone1" value="{{ $company->phone1 }}" required autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="phone" value="{{ __('history.phone') }} 2" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="phone2" value="{{ $company->phone2 }}" autofocus />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="contact" value="{{ __('history.contact') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="contact" value="{{ $company->contact }}" autofocus required />
                            </div>
                            <div class="pr-2 pl-2">
                                <x-jet-label for="nit" value="{{ __('history.nit') }}" />
                                <x-jet-input class="block mt-1 w-full" type="text" name="nit" value="{{ $company->nit }}" autofocus required />
                            </div>
                            <div class="flex items-center mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('history.save') }}
                                </x-jet-button>
                                <button
                                    type="button"
                                    data-translated="{{ __('history.areyousure') }}"
                                    data-text="{{ __('history.delete') }}"
                                    class="deletebtn inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-800 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150 ml-4"
                                    id="{{ $company->id }}">
                                        {{ __('history.delete') }}
                                </button>
                            </div>
                        </form>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="deleteForm" id="deleteForm-{{ $company->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>

