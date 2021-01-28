<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="text-gray-700 text-3xl font-medium">{{ __('history.roleManagement') }}</h3>
                    <div class="flex">
                        <a href="{{ route('roles.create') }}" class="text-white bg-indigo-600 rounded p-3 mt-3 mb-3 hover:bg-indigo-900">{{ __('history.createRole') }}</a>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        No.
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('history.name') }}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @foreach($roles as $key => $role)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">{{ $key + 1 }}</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $role->name}}</div>
                                            <div class="text-sm leading-5 text-gray-500">{{ $role->guard }}</div>
                                        </td>
                                        @role('super-admin')
                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="{{ route('roles.edit',$role->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('history.edit') }}</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="#" class="text-red-600 hover:text-red-900">{{ __('history.delete') }}</a>
                                            </td>
                                        @endrole
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div><!---->
</x-app-layout>

