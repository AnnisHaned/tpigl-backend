@extends('layouts.app2')

@section('content1')

<h5>    Liste des étudiants du groupe {{Auth::user()->groupe}}<h5>
    <hr/>    

<table class="table table-condensed">
    <thead>
      <tr>
        <th>Nom et Prénom</th>
        <th>Adresse électronique</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        @if( $user->groupe==Auth::user()->groupe)
      <tr>
        <td>{{ $user->name}} </td>
        <td>{{ $user->email}}</td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
@endsection