@extends('layouts.main')
@section('content')
    <h3>{{ __('List office') }}</h3>
    <table class="table table-hover">
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('Office Name') }}</th>
            <th>{{ __('Created At') }}</th>
            <th>{{ __('Updated At') }}</th>
            <th>
                <a class="btn btn-sm btn-primary" href="{{ route('offices.create') }}">
                    {{ __('Add office') }}
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
                            class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                        &nbsp;
                        <form action="{{ route('offices.destroy', $office->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">{{ __('Remove') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
