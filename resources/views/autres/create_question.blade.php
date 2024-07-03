
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');
            }
        });
    });
var questions = []; // Initialiser la variable questions comme un tableau vide

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
    status: correctOption
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
function generateJavaScriptFile(event) {
  event.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire

  // Récupérer la valeur de la question du champ de saisie
  var questions = addQuestion();


  // Générer le contenu du fichier JavaScript
  var jsContent = "const questions = " + JSON.stringify(questions, null, 2) + ";\n";

  // Créer un objet Blob pour contenir le contenu du fichier
  var blob = new Blob([jsContent], { type: "application/javascript" });

  // Créer un objet URL à partir du Blob
  var url = URL.createObjectURL(blob);

  // Créer un lien pour télécharger le fichier
  var downloadLink = document.createElement("a");
  downloadLink.href = url;
  downloadLink.download = "questions.js";
  downloadLink.click();

  // Libérer l'URL de l'objet Blob
  URL.revokeObjectURL(url);

  // Afficher un message de confirmation ou effectuer d'autres actions si nécessaire
  alert("Le fichier JavaScript a été généré avec succès !");
}
$('#autre_admin').submit(function (e) {
    e.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
        type: "POST",
        url: "{{ route('autre_admin') }}",
        data: formdata,
        success: function (data) {
            console.log(data)

        },
        error : (data)=>{
            console.log(data);
        }
    });


});
</script>
    @endsection



