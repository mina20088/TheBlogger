@props([
    'value' => "",
    'icon' => ""
])
<a {{ $attributes->merge(['class'=> 'nav-link']) }} >
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <!-- Download SVG icon from http://tabler-icons.io/i/home -->
      <x-icon class="{{ $icon }}"/>
    </span>
    <span class="nav-link-title">
      {{ $value }}
    </span>
  </a>