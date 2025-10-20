<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EQ Test | Quiz</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #f6d365, #fda085);
  color: #333;
  margin: 0;
  padding: 0;
}
.container {
  max-width: 800px;
  background: #fff;
  margin: 60px auto;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
  padding: 40px;
}
h2 {
  color: #333;
  margin-bottom: 20px;
}
.question {
  font-size: 18px;
  margin-bottom: 15px;
}
.options label {
  display: block;
  background: #f1f1f1;
  margin: 10px 0;
  padding: 12px;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}
.options input {
  display: none;
}
.options label:hover {
  background: #ffeaa7;
}
button {
  background: #333;
  color: white;
  border: none;
  padding: 10px 25px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 15px;
  transition: 0.3s;
}
button:hover {
  background: #555;
}
.progress {
  margin-bottom: 20px;
  color: #444;
}
</style>
</head>
<body>
<div class="container">
  <h2>EQ Test</h2>
  <div class="progress">Question <span id="qNumber">1</span> of 10</div>
  <div id="quizBox"></div>
  <button onclick="nextQuestion()">Next</button>
</div>

<script>
const questions = [
  { q: "I can identify my emotions easily.", s: 3 },
  { q: "I stay calm under pressure.", s: 3 },
  { q: "I try to understand others’ feelings before reacting.", s: 3 },
  { q: "I accept feedback without getting defensive.", s: 3 },
  { q: "I can control my impulses when angry or upset.", s: 3 },
  { q: "I recognize how my mood affects others.", s: 3 },
  { q: "I listen attentively to people.", s: 3 },
  { q: "I handle conflicts peacefully.", s: 3 },
  { q: "I stay motivated even after setbacks.", s: 3 },
  { q: "I can express my feelings clearly.", s: 3 }
];

let index = 0;
let score = 0;

function loadQuestion(){
  document.getElementById('qNumber').textContent = index + 1;
  const q = questions[index];
  document.getElementById('quizBox').innerHTML = `
    <div class='question'>${q.q}</div>
    <div class='options'>
      <label><input type='radio' name='opt' value='1'> Strongly Disagree</label>
      <label><input type='radio' name='opt' value='2'> Disagree</label>
      <label><input type='radio' name='opt' value='3'> Neutral</label>
      <label><input type='radio' name='opt' value='4'> Agree</label>
      <label><input type='radio' name='opt' value='5'> Strongly Agree</label>
    </div>
  `;
}
loadQuestion();

function nextQuestion(){
  const selected = document.querySelector("input[name='opt']:checked");
  if(!selected){
    alert("Please select an answer.");
    return;
  }
  score += parseInt(selected.value);
  index++;
  if(index < questions.length){
    loadQuestion();
  } else {
    localStorage.setItem("eqScore", score);
    window.location.href = "result.php";
  }
}
</script>
</body>
</html>
