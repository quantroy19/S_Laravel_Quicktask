 @extends('layouts.main')
 @section('content')
     <h3>{{ __('titles.add_office') }}</h3><br>
     <form action="{{ route('offices.store') }}" method="post" autocomplete="off">
         @csrf
         <div class="form-group">
             <label for="office_name">{{ __('titles.office_name') }}</label>
             <input type="text" class="form-control" id="office_name" name="name">
             @error('name')
                 <div class="text-danger">{{ $message }}</div>
             @enderror
         </div>
         <div class="">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('titles.close') }}</button>&nbsp;
             <input type="submit" class="btn btn-primary" value="{{ __('titles.save') }}">
         </div>
     </form>
 @endsection
