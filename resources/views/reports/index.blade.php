@extends('layouts.app')

@section('content')
<div class="card">
  <h3 class="card-header">
    Отчеты
  </h3>
  <div class="card-body">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">учебный</th>
          <th scope="col">семестр</th>
          <th scope="col">дисциплина</th>
          <th scope="col">количество студентов</th>
          <th scope="col">студенты с 5</th>
          <th scope="col">студенты с 4</th>
          <th scope="col">студенты с 3</th>
          <th scope="col">студенты с 2</th>
          <th scope="col">процент с 5</th>
          <th scope="col">процент с 4</th>
          <th scope="col">процент с 3</th>
          <th scope="col">процент с 2</th>
          <th scope="col">качественный показатель успеваемости</th>
          <th scope="col">показатель успеваемости</th>
          <th scope="col">средний балл</th>
        </tr>
      </thead>
      <tbody>
        @forelse($reports as $report)
        <tr>
          <td>{{ $report->academic_year }}</td>
          <td>{{ $report->semester}}</td>
          <td>{{ $report->discipline }}</td>
          <td>{{ $report->number_of_students }}</td>
          <td>{{ $report->students_five }}</td>
          <td>{{ $report->students_four }}</td>
          <td>{{ $report->students_three }}</td>
          <td>{{ $report->students_two }}</td>
          <td>{{ $report->percent_five }}</td>
          <td>{{ $report->percent_four }}</td>
          <td>{{ $report->percent_three }}</td>
          <td>{{ $report->percent_two }}</td>
          <td>{{ $report->kpu }}</td>
          <td>{{ $report->pu }}</td>
          <td>{{ $report->sa }}</td>
          <td class="text-right">
            <a class="btn btn-sm btn-primary" href="{{ route('reports.show', $report->id) }}">
              Просмотреть
            </a>
            <a class="btn btn-sm btn-secondary" href="{{ route('reports.edit', $report->id) }}">
              Редактировать
            </a>&nbsp;
            <form action="{{ route('reports.destroy', $report->id) }}" method="post" class="float-right">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit">Удалить</a>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="3">
            <h3 class="text-center">Нет отчетов</h3>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
