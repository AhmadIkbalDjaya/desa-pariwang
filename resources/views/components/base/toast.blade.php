@props([
    'type' => 'success',
    'message' => '',
])

@php
  $bgColor = match ($type) {
      'success' => 'bg-green-500',
      'error' => 'bg-red-500',
      'warning' => 'bg-yellow-500',
      'info' => 'bg-blue-500',
      default => 'bg-gray-500',
  };
@endphp

<div x-data="{ show: true }" x-init="setTimeout(() => (show = false), 2000)" x-show="show" x-transition class="fixed right-4 top-4 z-50">
  <div class="{{ $bgColor }} flex items-center justify-between rounded px-4 py-2 text-white shadow-lg">
    <span>{{ $message }}</span>
    <button class="ml-4 text-white hover:text-gray-200" @click="show = false">
      &times;
    </button>
  </div>
</div>
