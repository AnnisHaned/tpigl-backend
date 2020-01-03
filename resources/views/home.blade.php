@extends('layouts.app2')

@section('content1')
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    @if(Auth::user()->type==0)
    <h5>Connecté en tant qu'administrateur<h5>
    @else
    <div class="row">
        <div class="col-md-6">
            <label>Matricule</label>
        </div>
        <div class="col-md-6">
            <p>{{Auth::user()->id}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Nom et Prénom</label>
        </div>
        <div class="col-md-6">
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Email</label>
        </div>
        <div class="col-md-6">
            <p>{{Auth::user()->email}}</p>
        </div>
    </div>
    @if(Auth::user()->type==1)
    <div class="row">
        <div class="col-md-6">
            <label>Groupe</label>
        </div>
        <div class="col-md-6">
            <p>{{Auth::user()->groupe}}</p>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-6">
            <label>Module</label>
        </div>
        <div class="col-md-6">
            <p>
                @if(Auth::user()->module==1) IGL @endif
                @if(Auth::user()->module==2) SYC @endif
                @if(Auth::user()->module==3) THP @endif
            </p>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <label>Profession</label>
        </div>
        <div class="col-md-6">
            <p>@if(Auth::user()->type==1)Etudiant à l'ESI @endif @if(Auth::user()->type==2)Enseignant à l'ESI @endif</p>
        </div>
    </div>
    @endif
</div>
@endsection
