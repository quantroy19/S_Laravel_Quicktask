 @extends('layouts.main')
 @section('content')
     <h3>{{ __('titles.edit_office') }}</h3><br>
     <form method="POST" action="{{ route('offices.update', $office->id) }}" autocomplete="off">
         @csrf
         @method('PUT')

         <div class="form-group ">
             <label for="name">{{ __('titles.office_name') }}</label>
             <input type="text" class="form-control" id="name" name="name" value="{{ __($office->name) }}">
             @error('name')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="">
             <button type="button" class="btn btn-sm btn-secondary">{{ __('titles.close') }}</button>
             &nbsp;
             <input type="submit" class="btn btn-sm btn-primary" value="{{ __('titles.save') }}">
         </div>
     </form>
 @endsection
