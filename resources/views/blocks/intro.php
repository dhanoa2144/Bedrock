{{--
  Title: Intro
  Description: Introduciton Text
  Category: layout
  Icon: editor-alignleft
  Keywords: intro introduction text
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: true
--}}
<section class="intro mb4 mb5-ns">

<div class="mw8 center ph3 cf">

<div class="fl w-100 w-70-ns">

@if(get_field('heading'))

<div>

<h1>

{{ the_field('heading', 'options') }}

</h1>

</div>

@endif

@if(get_field('text'))

<div>

{!! get_field('text') !!}

</div>

@endif

</div>

</div>

</section>