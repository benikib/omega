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
    <form id="questionnaires" action="javascript:void(0)" method="post">
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
    <form class="form-horizontal hide-form" action="javascript:void(0)" id="autre_admin" hide method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input type="text" id name="titre" class="form-control" placeholder="Nom du formation" required>
                </div>
                <div class="form-group">
                    <label for="name">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="type" required>
                </div>
                <div class="col-sm-12">

                <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name='description' rows="6"  col="5" placeholder="Entrer ..."></textarea>
                </div>
                </div>
                <div class="form-group">
                <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="customFile">


                <label class="custom-file-label" for="customFile">Choisir une file</label>
                </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" id="btn-save" class="btn btn-secondary"><i class="fa fa-check"></i></button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </form>



    </div>
  </div>
</div>
            @endsection
</div>

