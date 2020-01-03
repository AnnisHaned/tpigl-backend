@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            @if(Auth::user()->type==0)
                            <a class="nav-item nav-link" href="/home">Profil</a>
                            <a class="nav-item nav-link" href="/modifgroupe">Modifier Groupe</a>
                            @endif
                            @if(Auth::user()->type==1)
                            <a class="nav-item nav-link" href="/home">Profil</a>
                            <a class="nav-item nav-link" href="/groupe">Groupe</a>
                            <a class="nav-item nav-link" href="/notes">Notes</a>
                            @endif
                            @if(Auth::user()->type==2)
                            <a class="nav-item nav-link" href="/home">Profil</a>
                            <a class="nav-item nav-link" href="/modifnotes">Modifier Notes</a>
                            @endif
                          </div>
                        </div>
                      </nav>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                      <main class="py-4">
                        @yield('content1')
                    </main> 
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>




@endsection