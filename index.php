<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EQ Test | Home</title>
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #9face6, #74ebd5);
  color: #222;
  margin: 0;
  padding: 0;
  text-align: center;
}
.container {
  max-width: 700px;
  margin: 100px auto;
  background: #fff;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}
h1 {
  color: #3f3d56;
}
p {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 30px;
}
button {
  background: #3f3d56;
  color: #fff;
  border: none;
  padding: 12px 30px;
  font-size: 18px;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #5f5bc0;
  transform: scale(1.05);
}
</style>
</head>
<body>
<div class="container">
  <h1>Welcome to the Emotional Intelligence (EQ) Test</h1>
  <p>
    Discover your emotional strengths and areas for growth.  
    Emotional Intelligence helps you build stronger relationships, make better decisions, and achieve greater success in life.
  </p>
  <button onclick="startTest()">Start Test</button>
</div>

<script>
function startTest(){
  window.location.href = "quiz.php";
}
</script>
</body>
</html>
