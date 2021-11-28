@extends('front.plantilla')

@section('content')
<div class="container mx-auto space-y-16">
    <section class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
        <div class="w-full mx-auto space-y-4 text-center mb-8">
            <h1 class="text-4xl font-bold leading-tight md:text-5xl">Què és Qui dimonis truca?</h1>
        </div>
        <div class="text-coolGray-800">
            <p class="mb-3">Qui dimonis truca és un servei gratuït en què no cal registrar-se destinat a fer cerques de telèfon inverses, és a dir, no cercar el telèfon d'una empresa en particular, sinó cercar a qui realment pertany un número de telèfon en concret, descobrir quines són les seves veritables intencions i com aturar les trucades si cal.</p>
            <p class="mb-3">Som el millor directori d'empreses de telemàrqueting i spam a Espanya i Llatinoamèrica, amb més d'1 milió números d'spam telefònic a més de 30 països identificats.</p>
            <p class="mb-3">Més de 600.000 usuaris ja gaudeixen la nostra app de bloqueig de trucades amb què podràs protegir el teu telèfon de forma automàtica dels telèfons spam que detectem. Descarrega-te-la gratuïtament i protegeix el teu mòbil des d'avui mateix!</p>
            <p class="mb-3">Abans de contestar o tornar qualsevol trucada a números de telèfon desconeguts o sospitosos, sempre recomanem la cerca a la nostra web o app de mòbil, per saber en tot moment qui et truca i què s'amaga darrere d'aquesta trucada.</p>
            <p class="mb-3">Als nostres 9 anys d'existència, hem identificat innombrables estafes telefòniques, estalviant milers i milers d'euros als nostres usuaris.</p>
            <p class="mb-3">Simplement digues quin número et truca, explica'ns la teva experiència amb aquest telèfon tan molest i nosaltres et diem qui és i com fer que deixi de trucar-te. Així de fàcil! I el més important... GRATIS!</p>
        </div>
    </section>
    <section>
        <span class="block mb-2 text-xs font-medium tracking-widest uppercase lg:text-center text-violet-600">També s'han queixat</span>
        <h2 class="text-5xl font-bold lg:text-center text-coolGray-900">Darrers números denunciats</h2>
        <div class="grid gap-6 my-16 lg:grid-cols-3">

            @foreach ($lastReported as $phone)
                    <a href="{{ route('phone.show', $phone->id) }}">
                        <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                            <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-violet-600 text-coolGray-50">
                                <i class="fas fa-phone-volume"></i>&nbsp;{{ $phone->number }}
                            </div>
                            <p class="text-2xl font-semibold">
                            {{ $phone->reports->first()->comment ? $phone->reports->first()->comment : ''}}
                            </p>
                            <div class="flex flex-row">
                                <div style="width:48%;">
                                    {{ $phone->country }}
                                </div>
                                <div style="width:48%;">
                                {{ $phone->reports->first()->created_at }}
                                </div>
                            </div>
                        </div>
                    </a>
            @endforeach

        </div>
    </section>
    <section>
        <span class="block mb-2 text-xs font-medium tracking-widest uppercase lg:text-center text-red-600">Vés bloquejant-los</span>
        <h2 class="text-5xl font-bold lg:text-center text-coolGray-900">Top spam</h2>
        <div class="grid gap-6 my-16 lg:grid-cols-3">

            @foreach ($topReported as $phone)
                    <a href="{{ route('phone.show', $phone->id) }}">
                        <div class="flex flex-col p-8 space-y-4 rounded-md bg-coolGray-50">
                            <div class="flex items-center justify-center flex-shrink-0 w-2/3 h-12 text-xl font-bold rounded-full bg-red-600 text-coolGray-50">
                                <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $phone->number }}
                            </div>
                            <p class="text-2xl font-semibold">
                            {{ $phone->reports->first()->comment ? $phone->reports->first()->comment : ''}}
                            </p>
                            <div class="flex flex-row">
                                <div style="width:48%;">
                                    {{ $phone->country }}
                                </div>
                                <div style="width:48%;">
                                {{ $phone->reports_count }} denúncies
                                </div>
                            </div>
                        </div>
                    </a>
            @endforeach
        </div>
    </section>
</div>
@endsection
