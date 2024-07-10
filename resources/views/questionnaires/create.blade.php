<div>
    @extends('layouts.modal')

    @section('id_modal')
        id="create_modal"
    @endsection

    @section('modal-title')
        <h4 class="modal-title">Ajout d'un elements</h4>
    @endsection
    @section('modal-content')
    <div class="container">
  <div class="row">
    <div class="col" id='colquestion'>
    <form id="questionnaires" action="{{ route('questionnaires') }}" method="post">
        @csrf
        <input type="text" class="form-control form-control-lg" id="question" name="question" required placeholder="Question">
<div class="col"></div>
        <label for="optionA">Option A :</label>
        <input class="form-control"  type="text" id="optionA" name="optionA" required>
        <label for="optionB">Option B :</label>
        <input class="form-control" type="text" id="optionB" name="optionB" required>
        <input type="hidden" name="id_quiz"  class="custom-file-input" id="id_quiz">
        <label for="optionC">Option C :</label>
        <input class="form-control" type="text" id="optionC" name="optionC" required>

        <label for="optionD">Option D :</label>
        <input class="form-control" type="text" id="optionD" name="optionD" required>
        <label for="correctOption">Type Selection :</label>
  <select class="form-control" id="type" name="typequestion" required>
    <option value="radio">Radio </option>
    <option value="checkbox">checkbox</option>
  </select>
  <label for="correctOption">Réponse correcte :</label>
  <select class="form-control select2-purple" id="correctOption" name="correctOption" required>
      <option value="0">Option A</option>
      <option value="1">Option B</option>
      <option value="2">Option C</option>
      <option value="3">Option D</option>
  </select>


  <div class="mt-3"><button type="submit" class="btn btn-secondary" id='addquestion' type="button" >Ajouter la question</button></div>

</form>
    </div>

    <div class="col" id='coljeux'>
    



    </div>
  </div>
</div>
            @endsection
</div>

