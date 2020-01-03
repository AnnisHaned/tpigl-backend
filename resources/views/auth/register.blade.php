@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div name="div1" id="div1" class="form-group row">
                            <label for="groupe" class="col-md-4 col-form-label text-md-right">{{ __('Groupe') }}</label>

                            <div class="col-md-6">
                                <select id="groupe" name="groupe" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                  </select>
                            </div>
                        </div>

                        <div name="div2" id="div2" class="form-group row" style="display:none">
                            <label for="module" class="col-md-4 col-form-label text-md-right">{{ __('Module') }}</label>

                            <div class="col-md-6">
                                <select id="module" name="module" class="form-control">
                                    <option value="1">IGL</option>
                                    <option value="2">SYC</option>
                                    <option value="3">THP</option>
                                  </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Fonction') }}</label>

                            <div class="col-md-6">
                                <select id="type" name="type" onchange="change()" class="form-control">
                                    <option value="1">Etudiant</option>
                                    <option value="2">Enseignant</option>
                                  </select>
                            </div>
                        </div>
                        <script>
                            function change(){
                                if(document.getElementById("type").value==1)
                                {
                                    document.getElementById("div1").style.display="";
                                    document.getElementById("div2").style.display="none";
                                }
                                else 
                                {
                                    document.getElementById("div2").style.display="";
                                    document.getElementById("div1").style.display="none";
                                }
                            }
                           
                        </script>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
