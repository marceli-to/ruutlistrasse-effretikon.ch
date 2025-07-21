@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-bordeaux rounded-sm font-basic-bold font-bold flex text-white uppercase py-10 px-20 tracking-wider leading-none hover:text-apricot transition-colors']) }}>
  {{ $slot}}
</button>