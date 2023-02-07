@extends('frontlayout')

@section('content')
		<div class="row" style="margin-top:140px; margin-bottom: 60px;">
        
			<div class="col-md-12">
				@if(Session::has('success'))
					<p class="text-success">{{session('success')}}</p>
				@endif
				@for ($i = 0; $i < sizeof($posts); $i++)
				<!-- {{ $posts[$i]->id }} -->
					<h5 style ="text-align:center;  font-size: 35px; font-weight: bold; margin-bottom: 20px;" >
						{{ $posts[$i]->title}}
					</h5>
					<div class="card">
						<h5 class="card-header">
						{{ $posts[$i]->name}}<span style="margin-left: 803px !important;">{{ $posts[$i]->created_at}}</span>
						</h5>
						<a href="{{url('blog_desc/'.$posts[$i]->slug)}}">
						<img src="{{asset('imgs/full/'. $posts[$i]->full_img)}}" class="card-img-top" alt="{{$posts[$i]->title}}"></a>
						<div class="card-body">
						
							<p class="card-footer" >
							{!! $posts[$i]->detail !!}
						</p>
						</div>
						<div class="card-footer">
						<h5 >{{ $posts[$i]->title }} </h5> 
						</div>
					</div>
				@endfor
				
			</div>
            
			</div>
		</div>
@endsection('content')