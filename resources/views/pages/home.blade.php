@extends('app')
@section('seo_title', 'Wohnen im schönen Zürcher Oberland')
@section('seo_description', 'An Toplage direkt beim Bahnhof Effretikon an der Brandrietstrasse / Rütlistrasse entsteht per Herbst / Winter 2026 ein attraktives Neubauprojekt mit modernen 2.5- bis 5.5-Zimmerwohnungen und wenige Gewerbeflächen bis ca. 260 m2')
@section('content')

<x-layout.section class="bg-white !p-0 relative">
  <x-media.image 
    :image="'ruetlistrasse-effretikon-visualisierung'" 
    :alt="'Visualisierung'" />
    <x-icons.brand class="absolute z-20 left-10 top-10 md:top-40 md:left-40 w-160 h-auto md:w-[240px] xl:left-60 xl:top-60 xl:w-[320px] 2xl:w-[400px]" />
</x-layout.section>

<x-layout.section class="bg-creme">
  <x-layout.inner>
    <div class="max-w-3xl">
      <h1 class="max-w-xl">Ein neuer Lebensraum in Effretikon</h1>
      <h2 class="text-xl mb-5">Erstvermietung</h2>
      <p>An Toplage direkt beim Bahnhof Effretikon an der Brandrietstrasse / Rütlistrasse entsteht per Herbst / Winter 2026 ein attraktives Neubauprojekt mit modernen 2.5- bis 5.5-Zimmerwohnungen und wenige Gewerbeflächen bis ca. 260 m<sup>2</sup>.</p>
      <h3 class="mb-0">Sind Sie interessiert?</h3>
      <p>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet.<br>Bitte füllen Sie bei Interesse das Kontaktformular aus.      
    </div>
  </x-layout.inner>
</x-layout.section>

<x-layout.section class="bg-apricot text-bordeaux">
  <x-layout.inner>
    <h2 class="text-bordeaux max-w-xl">Einzigartigkeit Erleben – Ihr Zuhause, Ihr Leben!</h2>
    <h3 class="text-bordeaux">Erstvermietung Unique Living Effretikon</h3>
    <div class="max-w-3xl mb-16 lg:mb-20">An Toplage direkt beim Bahnhof Effretikon an der Brandrietstrasse 1,3,5 /  Rütlistrasse 7-17 entsteht per September und Oktober 2026 ein attraktives Neubauprojekt mit modernen 2.5- bis 5.5-Zimmerwohnungen, Atelierräumen und einer Gewerbefläche mit ca. 260 m<sup>2</sup>.</div>
    @livewire('create-inquiry')
    <div class="max-w-3xl mt-24 lg:mt-32">
      <p >Wie freuen uns auf den Vermarktungsstart!<br>Ihr RED-Team</p>
      <p>
        <img src="/media/img/logo-red-real-estate.png" alt="Logo RED Real Estate AG" class="block mb-10 lg:mb-15 w-100 h-auto" width="581" height="667" />
        <strong>RED Real Estate AG</strong><br>
        Seehofstrasse 4<br>
        8008 Zürich<br>
        Telefon <a href="tel:0432110400" target="_blank" aria-label="Telefon Nummer" class="hover:underline underline-offset-2 decoration-1">043 211 04 00</a><br>
        <a href="mailto:office@redrealestate.ch" target="_blank" aria-label="E-Mail Adresse" class="hover:underline underline-offset-2 decoration-1">office@redrealestate.ch</a>
      </p>
    </div>
  </x-layout.inner>
</x-layout.section>

@endsection