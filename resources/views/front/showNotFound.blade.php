@extends('front.plantilla')

@section('content')
<article class="max-w-2xl px-6 py-24 mx-auto space-y-12 bg-coolGray-100 text-coolGray-900">
	<div class="w-full mx-auto space-y-4 text-center">
		<p class="text-xs font-bold tracking-wider uppercase text-red-600">Aquest número encara no ha estat denunciat</p>
		<h1 class="text-4xl font-bold leading-tight md:text-5xl">Sigues el primer en denunciar el {{ $number }}!</h1>
		{{-- <p class="text-sm text-coolGray-600">by
			<a href="#" target="_blank" rel="noopener noreferrer" class="underline text-violet-600">
				<span itemprop="name">Leroy Jenkins</span>
			</a>on
			<time datetime="2021-02-12 15:34:18-0200">Feb 12th 2021</time>
		</p> --}}
	</div>

    <div>

        <section class="rounded-b-lg  mt-4 ">
    
            <form action="{{ route('phone.store') }}" accept-charset="UTF-8" method="post">
                @csrf
                <input type="hidden" name="number" value="{{ $number }}">
                <label for="informer">Nom</label><br>
                <input type="text" name="informer" class="focus:shadow-outline text-2xl mb-4"><br>
                <label for="comment">Escriu aquí el motiu de la denuncia</label><br>
                <textarea 
                    name="comment" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl"
                    placeholder="Ask questions here." cols="6" rows="6" id="comment_content" spellcheck="false">
                </textarea>
                <button class="font-bold py-2 px-4 w-full bg-gray-900 text-lg text-white shadow-md rounded-lg ">Comment</button>
            </form>

        </section>
    
    </div>
    
</article>
@endsection