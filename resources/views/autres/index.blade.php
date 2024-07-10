@extends('layouts.app')
@section('title')
    Formations
@endsection

@section('filsAriane')
    <li class="breadcrumb-item active">Formations</li>
@endsection
@section('content')

<section class="content card card-primary card-outline p-4">
    <div class="text-end">
        <button type="button"  id='btn-over'class="btn btn-primary m-4 float-right" title="Open Modal" data-toggle="modal" data-target="#create_modal">
            <i class="fas fa-plus-circle">
            </i>
        </button>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Total: ({{ count($autres) }})</h3>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects" id="example1">
            <thead class="text-left">
                <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">Titre</th>
                    <th style="width: 30%">Description</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($autres as $i => $autre)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            {{ $autre->title }}
                        </td>
                        <td>{{$autre->description}}</td>
                        <td class="item-actions text-right">
                            <a class="btn btn-light btn-sm" href="{{route('questionnaire', ['id'=>$autre->id])}}" title="voir"><i class="fas fa-alt"></i></a>

                            <a class="btn btn-light btn-sm" href="{{route('resultat', ['id'=>$autre->id])}}" title="voir"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-light btn-sm" href="{{route('questionnaire', ['id'=>$autre->id])}}" title="voir"><i class="fas fa-eye"></i></a>

                            <a class="btn btn-light btn-sm" href="/"><i class="fas fa-pencil-alt"
                                    title="editer"></i></a>

                            <a class="btn btn-danger btn-sm" href="/" onclick="supprimer(event)"
                                project="Voulez-vous supprimer le Projet " data-toggle="modal" data-target="#supprimer"
                                title="archiver">
                                <i class="fas fa-archive"></i>
                            </a>

</button>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>

    </div>

    @include('autres.create')
</section>
    @endsection

@push('third_party_scripts')
    <script src="{{ Vite::asset('node_modules/admin-lte/plugins/jquery/jquery.min.js?commonjs-entry') }}"></script>
@endpush

@push('page_css')
    @vite('node_modules/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')
    @vite('node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')
    @vite('node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')
@endpush


@push('scripts')
<script src="https://adminlte.io//docs/3.0/assets/plugins/jquery/jquery.min.js"></script>
<script src="https://adminlte.io//docs/3.0/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://adminlte.io//docs/3.0/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="https://adminlte.io//docs/3.0/assets/js/adminlte.min.js"></script>

    <script type='module'>
        $('#btn-over').click(function (e) {
            e.preventDefault();
            $('#coljeux').show();
           $('#colquestion').hide();

        });

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "searching": true,
                "ordering": true,
                "paging": true,
                "data": "",
                "buttons": [{
                    extend: 'csv',

                }, "excel", {
                    extend: 'pdf',

                }, {
                    extend: 'print',
                }, "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });


$('#questionnaires').submit(function (e) {

    e.preventDefault(); // Empêche le comportement par défaut du formulaire

    // Récupère les données du formulaire
    let formData = $(this).serialize();

    // Envoie la requête AJAX
    $.ajax({
      type: "POST",
      url: "{{ route('questionnaires') }}",
      data: formData ,
      success: function (data) {
        // Traite la réponse du serveur en cas de succès
        console.log(data);

      },
      error: function (data) {
        // Traite les erreurs en cas d'échec de la requête
        console.log(data);
      }
    });
  });

 $('#autre_admin').submit(function (e) {

  e.preventDefault(); // Empêche le comportement par défaut du formulaire

  // Récupère les données du formulaire
  let formData = $(this).serialize();

  // Envoie la requête AJAX
  $.ajax({
    type: "POST",
    url: "{{ route('autre_admin') }}",
    data: formData ,
    success: function (data) {

      console.log(data.id);
      $('#coljeux').hide();
        $('#colquestion').show();
        document.getElementById('id_quiz').value  = data.id;
      // Votre code JavaScript qui utilise .modal()



    },
    error: function (data) {

      // Traite les erreurs en cas d'échec de la requête
      console.log(data);
    }
  });
});
function addQuestion() {
  // Récupérer les valeurs des champs du formulaire
  var question = document.getElementById("question").value;
  var optionA = document.getElementById("optionA").value;
  var optionB = document.getElementById("optionB").value;
  var optionC = document.getElementById("optionC").value;
  var optionD = document.getElementById("optionD").value;
  var correctOption = document.getElementById("correctOption").value;
  var type = document.getElementById("type").value;

  // Créer un objet question avec les valeurs récupérées
  var newQuestion = {
    question: question,
    optionA: optionA,
    optionB: optionB,
    optionC: optionC,
    optionD: optionD,
    status: correctOption,
    type : type
  };

  // Ajouter la nouvelle question au tableau
  questions.push(newQuestion);

  // Réinitialiser les valeurs des champs du formulaire
  document.getElementById("questionForm").reset();

  // Afficher un message de confirmation ou effectuer d'autres actions si nécessaire

  alert("La question a été ajoutée avec succès !");
  return questions;
}
    </script>
@endpush
