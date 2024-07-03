<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questionnaire</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    #timer {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center">Questionnaire</h1>
    <div id="timer">3:00</div>


@foreach($questionnaires as $key => $question)
<div class="card my-4">
<div class="card-body">
    <form class="form-horizontal" id="resultat_store" action="{{ route('resultat_store') }}" method="POST">
        @csrf

        @php
   $start_time = microtime(true);


@endphp
        <input type="hidden" id="time" name="time" value={{ $start_time }} >
        <input type="hidden" name="id_user"  value={{ Auth::user()->id}}>
        <input type="hidden" name="id"  value={{ $id}}>
      <h5 class="card-title">{{ $question->question }}</h5>
      <p class="card-text">Quelle est la capitale de la France ?</p>

      @foreach ($question->choose as $cle => $choose )
      <div class="form-check">
        <input class="form-check-input text-danger" type={{ $question->typequestion }} checked name={{ $question->question }} id="option1" value= {{ $cle }}>
        <label class="form-check-label" for="optionA">
            {{ $choose }}
        </label>
      </div>
      @endforeach


    </div>
</div>
@endforeach


    <div class="text-center">
      <button  class="btn btn-primary" id="submitBtn">Soumettre</button>
    </div>
  </div>
</form>
  <script>
   let timeLeft = 180; // 3 minutes en secondes
const timerElement = document.getElementById('timer');
const submitBtn = document.getElementById('submitBtn');
let countdownInterval;

function updateTimer() {
  const minutes = Math.floor(timeLeft / 60);
  const seconds = timeLeft % 60;
  timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
}

function countDown() {
  timeLeft--;
  updateTimer();

  if (timeLeft === 0) {
    clearInterval(countdownInterval);
    alert('Le temps est écoulé !');
    // Vous pouvez ajouter ici la logique pour soumettre automatiquement le questionnaire
  }
}

function startTimer() {
  countdownInterval = setInterval(countDown, 1000);
}
submitBtn.addEventListener('click', () => {
  clearInterval(countdownInterval);
  document.getElementById('time').value = timeLeft;
  console.log(timeLeft);
  console.log( document.getElementById('time').value);

  const myForm = document.querySelector('form');
  myForm.setAttribute('time', timeLeft);



  myForm.submit();
});

/*window.addEventListener("beforeunload", function (event) {
  event.returnValue = "\\o/";
});

*/
startTimer();
$('#resultat_store').submit(function (e) {

e.preventDefault(); // Empêche le comportement par défaut du formulaire
document.getElementById('time').value = timeLeft;
// Récupère les données du formulaire
let formData = $(this).serialize();

// Envoie la requête AJAX
$.ajax({
  type: "POST",
  url: "{{ route('resultat_store') }}",
  data: formData ,
  success: function (data) {

    console.log(data);
    $('#resultat_store').hide();

    // Votre code JavaScript qui utilise .modal()



  },
  error: function (data) {

    // Traite les erreurs en cas d'échec de la requête
    console.log(data);
  }
});
});
  </script>
</body>
</html>
