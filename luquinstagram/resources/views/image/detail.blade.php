@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			@include('includes.message')

			<div class="card pub_image pub_image_detail">
				<div class="card-header">
					@if($image->user->image)
						<div class="container-avatar">
							<img src="{{ route('user.avatar',['filename'=>$image->user->image]) }}" class="avatar" />
						</div>
					@endif

					<div class="data-user">
						{{ $image->user->name . ' ' . $image->user->surname . ' | @' . $image->user->nick }}
					</div>
				</div>

				<div class="card-body">
					<div class="image-container image-detail">
						<img src="{{ route('image.file',['filename' => $image->image_path]) }}">
					</div>
					<div class="likes">
						<?php $user_like = false; ?>
						@foreach($image->likes as $like)
							@if($like->user->id == Auth::user()->id)
								<?php $user_like = true; ?>
							@endif
						@endforeach
						@if($user_like)
							<img src="{{ asset('images/heart-red.png') }}" class="btn-dislike" data-id="{{ $image->id }}" />
						@else
							<img src="{{ asset('images/heart-gray.png') }}" class="btn-like"  data-id="{{ $image->id }}"/>
						@endif
						<span class="likes-count">{{ count($image->likes) }}</span>
					</div>
					<div class="description">
						<span class="nickname">{{ '@' . $image->user->nick }}</span>
						<span class="nickname">{{ '| ' . \FormatTime::LongTimeFilter($image->created_at) }}</span>
						<p>
							{{ $image->description }}
						</p>
					</div>

					@if(Auth::user() && Auth::user()->id == $image->user->id)
						<div class="actions">
							<a href="{{ route('image.edit', ['id' => $image->id]) }}" class="btn btn-sm btn-primary">Actualizar</a>
							<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">
								Borrar
							</button>
						</div>
					@endif

					<!-- The Modal -->
					<div class="modal" id="myModal">
					  <div class="modal-dialog">
					    <div class="modal-content">

					      <!-- Modal Header -->
					      <div class="modal-header">
					        <h4 class="modal-title">¿Está seguro?</h4>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>

					      <!-- Modal body -->
					      <div class="modal-body">
					        ¿Deseas borrar definitivamente la imagen?
					      </div>

					      <!-- Modal footer -->
					      <div class="modal-footer">
					        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
					        <a href="{{ route('image.delete', ['id' => $image->id]) }}" class="btn btn-danger">Borrar definitivamente</a>
					      </div>

					    </div>
					  </div>
					</div>

					<div class="comments">
						<h2>Comentarios ({{ count($image->comments) }})</h2>

						@foreach($image->comments as $comment)
							<div class="comment">
								<span class="nickname">{{ '@' . $comment->user->nick }}</span>
								<span class="nickname">{{ '| ' . \FormatTime::LongTimeFilter($comment->created_at) }}</span>
								<p>
									{{ $comment->content }}
									@if(Auth::check() && (Auth::user()->id == $comment->user_id || $comment->image->user_id == Auth::user()->id))
										<br />
										<a href="{{ route('comments.delete', ['id' => $comment->id]) }}" class="btn btn-sm btn-danger">Borrar comentario</a>
									@endif
								</p>
							</div>	
						@endforeach
						<form method="POST" action="{{ route('comments.save') }}">
							@csrf

							<input type="hidden" name="image_id" value="{{ $image->id }}" />
							<p>
								<textarea class="form-control {{ $errors->first('content') ? 'is-invalid' : '' }}" name="content"></textarea>
								@if ($errors->has('content'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('content') }}</strong>
									</span>
								@endif
							</p>
							<button type="submit" class="btn btn-success">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
