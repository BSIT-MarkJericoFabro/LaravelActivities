@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn button btn-info" href="/posts">Back</a> <br><br>
            <div class="card">       
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form method="POST" action="/posts">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="Title" type="text" class="form-control" name="Title" value="{{ old('Title') }}" required  autofocus>        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('Description') is-invalid @enderror" name="Description" value="{{ old('Description') }}" required autocomplete="Description">
                                </textarea>    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Upload Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file @error('img') is-invalid @enderror" name="img" value="{{ old('img') }}" autocomplete="img">     
                            </div>

                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
