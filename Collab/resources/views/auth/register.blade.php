@extends('layouts.app')

@section('content')

<div class="container registerFormContainer">
    <div class="row h-100">
        <div class="col-sm-12 registerFormContainer__block">
            <div class="registerFormContainer__block__holdBlock">
                {{-- <form method="POST" action="{{ route('register') }}"> --}}
                <form method="POST" action="/register">
                    <input type="hidden" name="role" value="{{$data['account_type']}}">
                    @csrf
                    <div class="form-group">
                        <label for="InputName">Name</label>
                        <input id="name" type="text" id="InputName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputInstitutionName">Institution Name</label>
                        <input id="institution_name" type="text" id="InputInstitutionName" class="form-control @error('institution_name') is-invalid @enderror" name="institution_name" value="{{ old('institution_name') }}" required autocomplete="institution_name" autofocus>
                        @error('institution_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <?php if(isset($data)){

                        if($data['account_type'] == 'Professor'){
                            ?>
                            <div class="form-group">
                                <label for="InputDesignation">Designation</label>
                                <input id="InputDesignation" type="text" id="InputDesignation" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus>
                                @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <?php
                        }else{

                        }
                    } ?>
                    <div class="form-group">
                        <label for="InputEmail">Email address</label>
                        <input id="InputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input id="InputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputPasswordConfirm">Confirm Password</label>
                        <input id="InputPasswordConfirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                    </div>
                    <button type="submit" class="registerFormContainer__block__holdBlock--submit">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
