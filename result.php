<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EQ Test | Results</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #84fab0, #8fd3f4);
  color: #333;
  margin: 0;
  padding: 0;
}
.container {
  max-width: 700px;
  margin: 100px auto;
  background: #fff;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.2);
  text-align: center;
}
h1 {
  color: #2d3436;
}
.score {
  font-size: 28px;
  color: #0984e3;
  margin: 20px 0;
}
.feedback {
  font-size: 18px;
  margin-top: 10px;
  line-height: 1.6;
}
button {
  margin-top: 25px;
  background: #2d3436;
  color: white;
  border: none;
  padding: 12px 30px;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #636e72;
  transform: scale(1.05);
}
</style>
</head>
<body>
<div class="container">
  <h1>Your EQ Test Result</h1>
  <div class="score" id="scoreDisplay"></div>
  <div class="feedback" id="feedbackText"></div>
  <button onclick="retake()">Retake Test</button>
</div>

<script>
let score = localStorage.getItem("eqScore");
document.getElementById("scoreDisplay").innerHTML = "Your EQ Score: <b>" + score + "</b>";

let feedback = "";
if(score >= 40) feedback = "🌟 Excellent! You have high emotional intelligence. You understand emotions and manage them effectively.";
else if(score >= 30) feedback = "😊 Good! You have solid emotional skills but can further strengthen empathy and regulation.";
else if(score >= 20) feedback = "😐 Average. You may want to work on understanding emotions more deeply.";
else feedback = "😔 Low EQ. Consider practicing mindfulness, empathy, and emotional reflection.";

document.getElementById("feedbackText").innerHTML = feedback;

function retake(){
  localStorage.removeItem("eqScore");
  window.location.href = "index.php";
}
</script>
</body>
</html>
