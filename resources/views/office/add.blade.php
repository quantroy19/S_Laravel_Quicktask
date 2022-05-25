 @extends('layouts.main')
 @section('content')
     <h3>{{ __('Add Office') }}</h3><br>
     <form action="{{ route('offices.store') }}" method="post" autocomplete="off">
         @csrf
         <div class="form-group">
             <label for="username">{{ __('Office name') }}</label>
             <input type="text" class="form-control" id="username" name="name">
             @error('name')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>&nbsp;
             <input type="submit" class="btn btn-primary" value="{{ __('Save') }}">
         </div>
     </form>
 @endsection
