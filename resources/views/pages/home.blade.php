@extends('app')
@section('seo_title', 'Wohnen im schönen Zürcher Oberland')
@section('seo_description', 'An der Pfaffbergstrasse in Pfäffikon ZH werden ab dem Sommer 2024 zwei moderne Mehrfamilienhäuser, in grüner Umgebung, mit je acht Eigentumswohnungen realisiert – drei im Erdgeschoss, drei im Obergeschoss und zwei im Attikageschoss. Es entstehen 3.5- und 4.5-Zimmerwohnungen, ideal für Paare an ruhiger Lage.')
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
      <p>An Toplage direkt beim Bahnhof Effretikon an der Brandrietstrasse / Rütlistrasse entsteht per Herbst 2026 ein attraktives Neubauprojekt mit modernen 2.5- bis 5.5-Zimmerwohnungen und wenige Gewerbeflächen bis ca. 300 m2.</p>
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