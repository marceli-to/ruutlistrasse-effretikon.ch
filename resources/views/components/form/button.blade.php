@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-navy rounded-sm font-basic-bold font-bold flex text-white uppercase py-10 px-20 tracking-wider leading-none hover:text-sky transition-colors']) }}>
  {{ $slot}}
</button>