@extends('front.plantilla')

@section('content')
<article class="max-w-2xl px-6 py-24 mx-auto space-y-12 bg-coolGray-100 text-coolGray-900">
	<div class="w-full mx-auto space-y-4 text-center">
		<p class="text-xs font-bold tracking-wider uppercase text-red-600">Denunciat {{ $phone->reports_count }} vegades</p>
		<h1 class="text-4xl font-bold leading-tight md:text-5xl">{{$title}}</h1>
		{{-- <p class="text-sm text-coolGray-600">by
			<a href="#" target="_blank" rel="noopener noreferrer" class="underline text-violet-600">
				<span itemprop="name">Leroy Jenkins</span>
			</a>on
			<time datetime="2021-02-12 15:34:18-0200">Feb 12th 2021</time>
		</p> --}}
	</div>

	<div>

		<section class="rounded-b-lg  mt-4 ">
	
			<form action="{{ route('report.store') }}" accept-charset="UTF-8" method="post">
				@csrf
				<input type="hidden" name="phone_id" value="{{ $phone->id }}">
				<label for="informer">Nom</label><br>
				<input type="text" name="informer" class="focus:shadow-outline text-2xl mb-4"><br>
				<label for="comment">Escriu aquí el motiu de la denuncia</label><br>
				<textarea 
					name="comment" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl"
					placeholder="Ask questions here." cols="6" rows="6" id="comment_content" spellcheck="false">
				</textarea>
				<button class="font-bold py-2 px-4 w-full bg-gray-900 text-lg text-white shadow-md rounded-lg ">Comment</button>
			</form>
	
			<div id="task-comments" class="pt-4">
				@isset($phone->reports)
					@foreach ($phone->reports as $report)
						@isset($report->comment)
							<!--     comment-->
						<div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
							<div class="flex flex-row justify-center mr-2">
									{{-- <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4"
									src="{{ isset($comment->author->profile_photo_path) ? $comment->author->profile_photo_path : 'https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png'}}"> --}}
									<h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $report->informer }}</h3>
								
								{{-- <div style="width: 50%;">Data: {{ $comment->created_at }}</div> --}}
							</div>
	
							<p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $report->comment }}</p>
	
							{{-- @if (auth()->user()->is_admin) 
								<form action="{{ route('report.destroy') }}" method="POST">
									@csrf
									@method('delete')
									<input type="hidden" name="report_id" value="{{ $report->id }}">
									<button class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
								</form>
							@endif --}}
						</div>
						<!--  comment end-->
						@endisset
					@endforeach
				@endisset
			</div>
		</section>
	
	</div>	
    
</article>
@endsection