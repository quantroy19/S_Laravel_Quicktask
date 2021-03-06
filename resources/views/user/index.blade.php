@extends('layouts.main')
@section('content')
    <h3>{{ __('titles.list_user') }}</h3>
    <table class="table table-hover">
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('titles.username') }}</th>
            <th>{{ __('titles.full_name') }}</th>
            <th>{{ __('titles.first_name') }}</th>
            <th>{{ __('titles.last_name') }}</th>
            <th>{{ __('titles.email') }}</th>
            <th>{{ __('titles.office') }}</th>
            <th>{{ __('titles.admin') }}</th>
            <th>{{ __('titles.active') }}</th>
            <th>
                <a class="btn btn-sm btn-primary" href="{{ route('users.create') }}">
                    {{ __('titles.add_user') }}
                </a>
            </th>
        </tr>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="#">{{ $user->username }}</a></td>
                    <td>{{ $user->fullName }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->office->name }}</td>
                    <td>{{ $user->showIsAdmin }}</td>
                    <td>{{ $user->showIsActive }}</td>
                    <td class="d-inline-flex">
                        <a href="{{ route('users.edit', $user->id) }}"
                            class="btn btn-sm btn-warning">{{ __('titles.edit') }}</a>
                        &nbsp;
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
