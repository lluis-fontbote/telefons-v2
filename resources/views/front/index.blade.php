@extends('front.plantilla')

@section('content')
<div class="container mx-auto space-y-16">
    <section class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
        <div class="w-full mx-auto space-y-4 text-center mb-8">
            <h1 class="text-4xl font-bold leading-tight md:text-5xl">¿Qué es ListaSpam y cómo saber quién me llama?</h1>
        </div>
        <div class="text-coolGray-800">
            <p class="mb-3">ListaSpam.com es un servicio gratuito en el que no es necesario registrarse destinado a realizar búsquedas de teléfono inversas, es decir, no buscar el teléfono de una empresa en particular, sino buscar a quién realmente pertenece un número de teléfono en concreto, descubrir cuales son sus verdaderas intenciones y cómo detener sus llamadas si es necesario.</p>
            <p class="mb-3">Somos el mejor directorio de empresas de telemarketing y spam en España y Latinoamérica, con más de 1 millón números de spam telefónico en más de 30 países identificados.</p>
            <p class="mb-3">Más de 600.000 usuarios ya disfrutan nuestra app de bloqueo de llamadas con la que podrás proteger tu teléfono de forma automática de los teléfonos spam que detectamos. ¡Descárgatela gratuitamente y protege tu móvil desde hoy mismo!</p>
            <p class="mb-3">Antes de contestar o devolver cualquier llamada a números de teléfono desconocidos o sospechosos, siempre recomendamos la búsqueda en nuestra web o app de móvil, para saber en todo momento quién te llama y qué se esconde detrás de esa llamada.</p>
            <p class="mb-3">En nuestros 9 años de existencia, hemos identificado innumerables estafas telefónicas, ahorrando miles y miles de euros a nuestros usuarios.</p>
            <p class="mb-3">Simplemente dinos qué número te llama, cuéntanos tu experiencia con ese teléfono tan molesto y nosotros te decimos quién es y cómo hacer que deje de llamarte. ¡Así de fácil! Y lo más importante... ¡GRATIS!</p>
        </div>
    </section>
    <section>
        <span class="block mb-2 text-xs font-medium tracking-widest uppercase lg:text-center text-violet-600">També s'han queixat</span>
        <h2 class="text-5xl font-bold lg:text-center text-coolGray-900">Darrers números denunciats</h2>
        <div class="grid gap-6 my-16 lg:grid-cols-3">

            <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-violet-600 text-coolGray-50">
                    <i class="fas fa-phone-volume"></i>&nbsp;694 43 17 28
                </div>
                <p class="text-2xl font-semibold">
                   "Unos pesados llaman cada día"
                </p>
                <div class="flex flex-row">
                    <div style="width:48%;">
                        Espanya
                    </div>
                    <div style="width:48%;">
                        Fa 1 minut
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-violet-600 text-coolGray-50">977 34 63 22</div>
                <p class="text-2xl font-semibold">
                   "Estafa, se hacen pasar por Endesa"
                </p>
                <div class="flex flex-row">
                    <div style="width:48%;">
                        Tarragona
                    </div>
                    <div style="width:48%;">
                        Fa 3 minuts
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-violet-600 text-coolGray-50">694 43 17 28</div>
                <p class="text-2xl font-semibold">
                   "Mensaje de texto:BBVAEstimado Cliente, le informamos que su cuenta ha sido actualizada correctamente..."
                </p>
                <div class="flex flex-row">
                    <div style="width:48%;">
                        Espanya
                    </div>
                    <div style="width:48%;">
                        Fa 2 minuts
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <span class="block mb-2 text-xs font-medium tracking-widest uppercase lg:text-center text-violet-600">Vés bloquejant-los</span>
        <h2 class="text-5xl font-bold lg:text-center text-coolGray-900">Top spam</h2>
        <div class="grid gap-6 my-16 lg:grid-cols-3">

            <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-red-600 text-coolGray-50">
                    <i class="fas fa-exclamation-triangle"></i>&nbsp;694 43 17 28</div>
                <p class="text-2xl font-semibold">
                   "Unos pesados llaman cada día"
                </p>
                <div class="flex flex-row">
                    <div style="width:48%;">
                        Espanya
                    </div>
                    <div style="width:48%;">
                        543 denúncies
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-red-600 text-coolGray-50">
                    <i class="fas fa-exclamation-triangle"></i>&nbsp;977 34 63 22</div>
                <p class="text-2xl font-semibold">
                   "Estafa, se hacen pasar por Endesa"
                </p>
                <div class="flex flex-row">
                    <div style="width:48%;">
                        Albacete
                    </div>
                    <div style="width:48%;">
                        437 denúncies
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-red-600 text-coolGray-50">694 43 17 28</div>
                <p class="text-2xl font-semibold">
                   "Mensaje de texto:BBVAEstimado Cliente, le informamos que su cuenta ha sido actualizada correctamente..."
                </p>
                <div class="flex flex-row">
                    <div style="width:48%;">
                        Espanya
                    </div>
                    <div style="width:48%;">
                        412 denúncies
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="grid gap-6 lg:grid-cols-2">
        <img src="https://source.unsplash.com/random/360x480" alt="" class="object-cover w-full rounded-md max-h-96 bg-coolGray-500">
        <div class="flex flex-col items-center w-full p-6 space-y-8 rounded-md lg:h-full lg:p-8 bg-coolGray-50">
            <img src="https://source.unsplash.com/random/100x100" alt="" class="object-cover w-20 h-20 rounded-full bg-coolGray-500">
            <blockquote class="max-w-lg text-lg italic font-medium text-center">"Et, dignissimos obcaecati. Recusandae praesentium doloribus vitae? Rem unde atque mollitia!"</blockquote>
            <div class="text-center text-coolGray-600">
                <p>Leroy Jenkins</p>
                <p>CEO of Company Co.</p>
            </div>
            <div class="flex space-x-2">
                <button type="button" aria-label="Page 1" class="w-2 h-2 rounded-full bg-coolGray-900"></button>
                <button type="button" aria-label="Page 2" class="w-2 h-2 rounded-full bg-coolGray-400"></button>
                <button type="button" aria-label="Page 3" class="w-2 h-2 rounded-full bg-coolGray-400"></button>
                <button type="button" aria-label="Page 4" class="w-2 h-2 rounded-full bg-coolGray-400"></button>
            </div>
        </div>
        <div class="p-8 space-y-8 rounded-md lg:col-span-full lg:py-12 bg-coolGray-50">
            <h2 class="text-5xl font-bold text-coolGray-900">Create with us</h2>
            <p class="text-coolGray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt facilis quod accusantium beatae cum nam adipisci reiciendis omnis possimus error quo animi voluptas magni, at incidunt. Nulla ex at ullam corporis quidem adipisci vitae, perferendis dolorem libero minus atque tenetur enim pariatur cupiditate commodi in beatae, ipsa eligendi? Quis, saepe.</p>
        </div>
    </section>
    <section>
        <div class="grid gap-6 lg:grid-cols-3">
            <div class="overflow-hidden rounded lg:flex lg:col-span-3">
                <img src="https://source.unsplash.com/random/485x365" alt="" class="object-cover w-full h-auto max-h-96 bg-coolGray-500">
                <div class="p-6 space-y-6 lg:p-8 md:flex md:flex-col bg-coolGray-50">
                    <span class="self-start px-3 py-1 text-sm rounded-full bg-violet-600 text-coolGray-50">Business</span>
                    <h2 class="text-3xl font-bold md:flex-1">Curating a workplace that inspires team movement</h2>
                    <div>
                        <p class="text-coolGray-600">November 30, 2020</p>
                        <p class="text-coolGray-600">By Leroy Jenkins</p>
                    </div>
                </div>
            </div>
            <div class="p-6 rounded lg:p-8 lg:py-12 bg-coolGray-50">
                <h3 class="inline font-medium text-coolGray-900">Panel-based blocks.</h3>
                <p class="inline">Flexible panels that are perfect for building functional layouts.</p>
            </div>
            <div class="p-6 rounded lg:p-8 lg:py-12 bg-coolGray-50">
                <h3 class="inline font-medium text-coolGray-900">Responsive design.</h3>
                <p class="inline">Panels look great no matter the device.</p>
            </div>
            <div class="p-6 rounded lg:p-8 lg:py-12 bg-coolGray-50">
                <h3 class="inline font-medium text-coolGray-900">Premium support.</h3>
                <p class="inline">Join over 50 000 satisfied customers who use our templates.</p>
            </div>
        </div>
    </section> --}}
    {{-- <section>
        <div class="container p-6 py-20 mx-auto rounded lg:px-8 bg-coolGray-50">
            <h2 class="text-5xl font-bold text-center">Our team is here to help you.</h2>
            <div class="flex justify-center p-4">
                <a href="#">Meet our crew &gt;</a>
            </div>
            <img src="https://source.unsplash.com/random/360x240" alt="" class="object-cover w-full h-auto mt-8 rounded max-h-96 bg-coolGray-500">
        </div>
    </section> --}}
</div>
@endsection
