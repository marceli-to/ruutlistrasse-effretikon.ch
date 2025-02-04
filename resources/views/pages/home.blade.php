@extends('app')
@section('seo_title', 'Wohnen im schönen Zürcher Oberland')
@section('seo_description', 'An Toplage direkt beim Bahnhof Effretikon an der Brandrietstrasse / Rütlistrasse entsteht per Herbst / Winter 2026 ein attraktives Neubauprojekt mit modernen 2.5- bis 5.5-Zimmerwohnungen und wenige Gewerbeflächen bis ca. 260 m2')
@section('content')

<x-layout.section class="bg-white !p-0">
  <x-media.image 
    :image="'ruetlistrasse-effretikon-visualisierung'" 
    :alt="'Visualisierung'" />
</x-layout.section>

<x-layout.section class="bg-white">
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

<x-layout.section class="bg-sky text-graphite">
  <x-layout.inner>
    <h2 class="text-navy">Kontaktformular</h2>
    @livewire('create-inquiry')
  </x-layout.inner>
</x-layout.section>

@endsection