@extends('admins.app')

  @section('content')
    <div class="container-fluid">

    <div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<p class="lead">{!! $post->content !!}</p>

		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Url:</label>
					{{-- <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p> --}}
				</dl>

				<dl class="dl-horizontal">
					<label>Category:</label>
					<p>
						{{ $post->category->name }}
					</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{{-- {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!} --}}
					</div>
					<div class="col-sm-6">

						{{-- {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!} --}}

						<form method="post" action="{{route('news.destroy', $post->id)}} " >
							{{ csrf_field() }}
							@method('DELETE')
							<input type="submit" name="" value="删除" class="btn btn-danger btn-block">
							
						</form>
						<form method="post" action="{{route('news.edit', $post->id)}} " >
							{{ csrf_field() }}
							@method('GET')
							<input type="submit" class="btn btn-success btn-block" value="编辑">
						</form>
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{{-- {{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
 --}}					</div>
				</div>

			</div>
		</div>
	</div>


  </div>
  <!-- End of Main Content -->
@endsection