@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Отчет
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>учебный:</strong> {{ $report->academic_year }}</li>
    <li class="list-group-item"><strong>семестр:</strong> {{ $report->semester }}</li>
    <li class="list-group-item"><strong>дисциплина:</strong> {{ $report->discipline }}</li>
    <li class="list-group-item"><strong>количество студентов:</strong> {{ $report->number_of_students }}</li>
    <li class="list-group-item"><strong>студенты с 5:</strong> {{ $report->students_five }}</li>
    <li class="list-group-item"><strong>студенты с 4:</strong> {{ $report->students_four }}</li>
    <li class="list-group-item"><strong>студенты с 3:</strong> {{ $report->students_three }}</li>
    <li class="list-group-item"><strong>студенты с 2:</strong> {{ $report->students_two }}</li>
    <li class="list-group-item"><strong>процент с 5:</strong> {{ $report->percent_five }}</li>
    <li class="list-group-item"><strong>процент с 4:</strong> {{ $report->percent_four }}</li>
    <li class="list-group-item"><strong>процент с 3:</strong> {{ $report->percent_three }}</li>
    <li class="list-group-item"><strong>процент с 2:</strong> {{ $report->percent_two }}</li>
    <li class="list-group-item"><strong>качественный показатель успеваемости:</strong> {{ $report->KPU }}</li>
    <li class="list-group-item"><strong>показатель успеваемости:</strong> {{ $report->PU }}</li>
    <li class="list-group-item"><strong>средний балл:</strong> {{ $report->SA }}</li>
  </ul>
  <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('reports.edit', $report->id) }}">
        Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('reports.index') }}">
        Отмена
      </a>
  </div>
</div>

@endsection
