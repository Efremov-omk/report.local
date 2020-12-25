<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="academic_year">учебный год</label>
      <input type="number" class="form-control" id="academic_year" name="academic_year" value="{{ $report->document ?? old('academic_year')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="semester">семестр</label>
      <input type="number" class="form-control" id="semester" name="semester" value="{{ $report->semester ?? old('semester')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="discipline">дисциплина</label>
      <input type="text" class="form-control" id="discipline" name="discipline" value="{{ $report->discipline ?? old('discipline')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="number_of_students">количество студентов</label>
      <input type="number" class="form-control" id="number_of_students" name="number_of_students" value="{{ $report->number_of_students ?? old('number_of_students')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="students_five">студенты с 5</label>
      <input type="number" class="form-control" id="students_five" name="students_five" value="{{ $report->students_five ?? old('students_five')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="students_four">студенты с 4</label>
      <input type="number" class="form-control" id="students_four" name="students_four" value="{{ $report->students_four ?? old('students_four')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="students_three">студенты с 3</label>
      <input type="number" class="form-control" id="students_three" name="students_three" value="{{ $report->students_three ?? old('students_three')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="students_two">студенты с 2</label>
      <input type="number" class="form-control" id="students_two" name="students_two" value="{{ $report->students_two ?? old('students_two')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="percent_five">процент с 5</label>
      <input type="number" class="form-control" id="percent_five" name="percent_five" value="{{ $report->percent_five ?? old('percent_five')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="percent_four">процент с 4</label>
      <input type="number" class="form-control" id="percent_four" name="percent_four" value="{{ $report->percent_four ?? old('percent_four')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="percent_three">процент с 3</label>
      <input type="number" class="form-control" id="percent_three" name="percent_three" value="{{ $report->percent_three ?? old('percent_three')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="percent_two">процент с 2</label>
      <input type="number" class="form-control" id="percent_two" name="percent_two" value="{{ $report->percent_two ?? old('percent_two')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="kpu">качественный показатель успеваемости</label>
      <input type="number" class="form-control" id="kpu" name="kpu" value="{{ $report->kpu ?? old('kpu')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="pu">показатель успеваемости</label>
      <input type="number" class="form-control" id="pu" name="pu" value="{{ $report->pu ?? old('pu')}}">
    </div>
    <div class="form-group col-md-4">
      <label for="sa">средний балл</label>
      <input type="number" class="form-control" id="sa" name="sa" value="{{ $report->sa ?? old('sa')}}">
    </div>
  </div>
  <input type="hidden" name="user_id" value="{{ Auth::id() }}">
<hr>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a class="btn btn-danger" href="{{ route('reports.index') }}">Отмена</a>
</form>
