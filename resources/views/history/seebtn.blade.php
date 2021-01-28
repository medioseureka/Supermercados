@if($deleted_at)
    <a class='text-red-600' href="{{ route('restorecompany', $id) }}">{{ __('history.restore') }}</a>
@else
    <a href="{{ route('companies.edit', $id) }}">{{ __('history.edit') }}</a>
@endif
