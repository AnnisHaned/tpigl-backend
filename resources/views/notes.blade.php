@extends('layouts.app2')

@section('content1')
<table class="table table-condensed">
    <thead>
      <tr>
        <th>Module</th>
        <th>Note</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> IGL </td>
        <td>{{ Auth::user()->note1}}</td>
      </tr>
      <tr>
        <td> SYC </td>
        <td>{{ Auth::user()->note2}}</td>
      </tr>
      <tr>
        <td> THP </td>
        <td>{{ Auth::user()->note3}}</td>
      </tr>
    </tbody>
  </table>
@endsection