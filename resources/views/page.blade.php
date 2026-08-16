@extends('layout')

@section('content')
    @foreach ($sections ?? [] as $block)
        @include('components.blocks.' . ($block['type'] ?? 'navy_yard_hero'), ['block' => $block, 'data' => $block])
    @endforeach
@endsection
