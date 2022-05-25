 @extends('layouts.main')
 @section('content')
     <h3>{{ __('Edit Office') }}</h3><br>
     <form method="POST" action="{{ route('offices.update', $office->id) }}" autocomplete="off">
         @csrf
         @method('PUT')

         <div class="form-group ">
             <label for="name">{{ __('Office Name') }}</label>
             <input type="text" class="form-control" id="name" name="name" value="{{ __($office->name) }}">
             @error('name')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="">
             <button type="button" class="btn btn-sm btn-secondary">{{ __('Close') }}</button>
             &nbsp;
             <input type="submit" class="btn btn-sm btn-primary" value="{{ __('Save') }}">
         </div>
     </form>
 @endsection
