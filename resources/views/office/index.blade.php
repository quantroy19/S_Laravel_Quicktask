@extends('layouts.main')
@section('content')
    <h3>{{ __('titles.list_office') }}</h3>
    <table class="table table-hover">
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('titles.office_name') }}</th>
            <th>{{ __('titles.created_at') }}</th>
            <th>{{ __('titles.updated_at') }}</th>
            <th>
                <a class="btn btn-sm btn-primary" href="{{ route('offices.create') }}">
                    {{ __('titles.add_office') }}
                </a>
            </th>
        </tr>
        <tbody>
            @foreach ($offices as $office)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="#">{{ $office->name }}</a></td>
                    <td>{{ $office->created_at }}</td>
                    <td>{{ $office->updated_at }}</td>
                    <td class="d-inline-flex">
                        <a href="{{ route('offices.edit', $office->id) }}"
                            class="btn btn-sm btn-warning">{{ __('titles.edit') }}</a>
                        &nbsp;
                        <form action="{{ route('offices.destroy', $office->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">{{ __('titles.remove') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
