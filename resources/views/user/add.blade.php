 @extends('layouts.main')
 @section('content')
     <h3>{{ __('Add User') }}</h3><br>
     <form action="{{ route('users.store') }}" method="post" autocomplete="off">
         @csrf
         <div class="form-group">
             <label for="username">{{ __('titles.username') }}</label>
             <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
             @error('username')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="form-group">
             <label for="password">{{ __('titles.password') }}</label>
             <input type="password" class="form-control" id="password" name="password">
             @error('password')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="form-group">
             <label for="firsr_name">{{ __('titles.first_name') }}</label>
             <input type="text" class="form-control" id="firsr_name" name="first_name" value="{{ old('first_name') }}">
             @error('first_name')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="form-group">
             <label for="last_name">{{ __('titles.last_name') }}</label>
             <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
             @error('last_name')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="form-group">
             <label for="email">{{ __('titles.email') }}</label>
             <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
             @error('email')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="form-group">
             <label for="office">{{ __('Office') }}</label>
             <select id="office" name="office_id" class="form-control">
                 @foreach ($offices as $office)
                     <option value="{{ $office->id }}">{{ $office->name }}</option>
                 @endforeach
             </select>
         </div>
         <label class="" for="isAdmin">
             {{ __('Admin') }}
         </label>
         <input class="mr-3" type="checkbox" value="1" id="isAdmin" name="isAdmin">
         <label class="" for="isActive">
             {{ __('Active') }}
         </label>
         <input class="" type="checkbox" value="1" id="isActive" name="isActive">
         <div class="">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button> &nbsp;
             <input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
         </div>
     </form>
 @endsection
