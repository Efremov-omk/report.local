@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Редактировать отчет
  </h3>
  <div class="card-body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @component('components.error', [
                'message' => $error,
            ])

            @endcomponent
        @endforeach
    @endif

    <form action="{{ route('reports.update', $report->id) }}" method="post">
      @csrf
      @method('put')

      @include('reports.partials.form')
    </form>
  </div>
</div>

@endsection
