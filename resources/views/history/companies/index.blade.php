<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 overflow-hidden shadow-xl sm:rounded-lg">
                <h3 class="text-gray-700 text-3xl font-medium">{{ __('history.companyManagement') }}</h3>
                <div class="flex">
                    <a href="{{ route('companies.create') }}" class="text-white bg-indigo-600 rounded p-3 mt-3 mb-3 hover:bg-indigo-900">{{ __('history.createCompany') }}</a>
                </div>

                <div class="align-middle inline-block max-w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
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
                                        {{ __('history.phone') }}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('history.contact') }}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @foreach($companies as $key => $company)
                                    <tr class="{{ $company->deleted_at ? 'bg-red-50' : ''}}">
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                <div class="ml-4">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">{{ $key + 1 }}</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $company->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $company->email }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:m:s', $company->updated_at)->format('Y-m-d') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:m:s', $company->created_at)->format('Y-m-d') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $company->address }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $company->phone1 }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $company->phone2 }}</div>
                                        </td>
                                        @can('delete company')
                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a href="{{ route('companies.edit',$company->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('history.edit') }}</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                @if(!$company->deleted_at)
                                                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="deleteForm" id="deleteForm-{{ $company->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="deletebtn text-red-600 hover:text-red-900">
                                                            {{ __('history.delete') }}
                                                        </button>
                                                    </form>
                                                @else
                                                    <a class='text-red-600' href="{{ route('restorecompany', $company->id) }}">{{ __('history.restore') }}</a>
                                                @endif
                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $companies->appends(\Request::except('page'))->render() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
