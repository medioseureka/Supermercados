<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
            <h3 class="text-gray-700 text-3xl font-medium">{{ __('history.userManagement') }}</h3>
                <div class="flex">
                    <a href="{{ route('users.create') }}" class="text-white bg-indigo-600 rounded p-3 mt-3 mb-3 hover:bg-indigo-900">{{ __('history.createUser') }}</a>
                </div>

                <div class="align-middle inline-block max-w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full table">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    No.
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    @sortablelink('name', __('history.name')) 
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    @sortablelink('email', __('history.email'))
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    @sortablelink('updated_at', __('history.edited_at'))
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    @sortablelink('created_at', __('history.created_at'))
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('history.address') }}
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('history.phone') }}
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('history.role') }}
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    @sortablelink('signature', __('history.signature'))
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach($users as $key => $user)
                                <tr class="{{ $user->deleted_at ? 'bg-red-50' : ''}}">
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">{{ $key + 1 }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:m:s', $user->updated_at)->format('Y-m-d') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:m:s', $user->created_at)->format('Y-m-d') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->address }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->phone }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $user->roles[0]->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        @if($user->signature)
                                            <div class="text-sm leading-5 text-gray-900">Si</div>
                                        @else
                                            <div class="text-sm leading-5 text-gray-900">No</div>
                                        @endif
                                    </td>
                                    @can('delete users')
                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="#" class="text-green-600 hover:green-red-900">{{ __('history.add_signature') }}</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <a href="{{ route('users.edit',$user->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('history.edit') }}</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            @if(!$user->deleted_at)
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="deleteForm" id="deleteForm-{{ $user->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="deletebtn text-red-600 hover:text-red-900">
                                                        {{ __('history.delete') }}
                                                    </button>
                                                </form>
                                            @else
                                                <a class='text-red-600' href="{{ route('restoreuser', $user->id) }}">{{ __('history.restore') }}</a>
                                            @endif
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $users->appends(\Request::except('page'))->render() !!}
                </div>
        </div>
    </div>
</div>
</x-app-layout>

