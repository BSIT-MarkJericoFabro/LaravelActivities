@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/posts">Back</a> <br><br>
            
            <div class="card">       
                <div class="card-body">
                    Title : {{ $post->Title }} <br>
                    Description : {{ $post->Description }} <br>
                    Created At : {{ $post->created_at }} <br>
                    @if ($post->img != '')
                    Image:

                        <img src="{{ URL::asset('/storage/img/'.$post->img) }} " alt="{{ $post->img }}" style="width:100px; height:100px;"/>
                    @endif

                    @include('/posts/comments')
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
