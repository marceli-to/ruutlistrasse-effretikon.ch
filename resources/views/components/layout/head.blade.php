<!doctype html>
<html lang="de" class="h-full bg-white scroll-smooth overflow-y-scroll">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ein neuer Lebensraum in Effretikon – Rütlistrasse Effretikon</title>
<meta name="description" content="@if(trim($__env->yieldContent('seo_description')))@yield('seo_description')@else{{config('seo.description')}}@endif">
<meta property="og:title" content="@if(trim($__env->yieldContent('seo_title')))@yield('seo_title') / {{config('seo.title')}}@else{{config('seo.title')}}@endif">
<meta property="og:description" content="@if(trim($__env->yieldContent('seo_description')))@yield('seo_description')@else{{config('seo.description')}}@endif">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:site_name" content="{{config('seo.title')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#464645">
@vite('resources/css/app.css')
@livewireStyles
</head>
<body class="antialiased font-basic-regular text-navy text-sm md:text-base leading-[1.3] flex min-h-full flex-col">
