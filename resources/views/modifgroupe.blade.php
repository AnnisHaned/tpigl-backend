@extends('layouts.app2')

@section('content1')
<table class="table table-condensed">
    <thead>
        <tr>
          <th>Matricule</th>
          <th>Nom et Prénom</th>
          <th>Groupe</th>
        </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          @if($user->type==1)
          <tr>
          <form method="POST" action="{{route('sauverg')}}">
            @csrf
            <td><input name="userid" value="{{ $user->id}}" style="display:none">{{ $user->id}}</td>
            <td><label> {{ $user->name}} </label></td>
            <td>
               <select class="form-control" type="text" name="groupe">
                   <option class="form-control" value="1" @if($user->groupe==1) selected @endif>1</option>
                   <option class="form-control" value="2" @if($user->groupe==2) selected @endif>2</option>
                   <option class="form-control" value="3" @if($user->groupe==3) selected @endif>3</option>
               </select>
            </td> 
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