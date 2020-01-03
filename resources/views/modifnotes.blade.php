@extends('layouts.app2')

@section('content1')


    <table class="table table-condensed">
    <thead>
        <tr>
          <th>Matricule</th>
          <th>Nom et Prénom</th>
          <th>Notes</th>
        </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          @if($user->type==1)
          <tr>
          <form method="POST" action="{{route('sauver')}}">
            @csrf
            <td><input name="userid" value="{{ $user->id}}" style="display:none">{{ $user->id}}</td>
            <td><label> {{ $user->name}} </label></td>
           <td><input class="form-control" type="text" name="notes" value="@if(Auth::user()->module==2){{$user->note2}} @endif @if(Auth::user()->module==1){{$user->note1}} @endif @if(Auth::user()->module==3){{$user->note3}} @endif"></td> 
        <td>
             <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Valider') }}
                </button>
            </div>
        </td> 
    </form>
</tr> 
@endif
@endforeach
      </tbody>
    </table>
    

@endsection