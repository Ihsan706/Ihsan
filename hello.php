<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Ihsan International Bank</title>
  <style>
    body {
background-image: url('q (2).jpg');
  background-repeat: no-repeat;
    background-size: cover;
      background-color: blue;
    display: flex;
  
    }



.hello {

color:#ffe505;
      font-size: 5vw;
      text-align: center;
 position: absolute;
top:0cm;
width:100%;
  animation-name: text;
    animation-duration: 5s;
    }

@keyframes text {
  0%  {top:150vh; color: white;}
  90%  {top:0cm;}
  100%  {color:#ffe505;}
}
.button{
top: 50vh;
    left: 10vw;
    position: absolute;
height: 40vh;
width:40vh;
border-radius: 50%;
  transition: 2s ease-in-out;
  animation-name: text2;
    animation-duration: 2s;
}
@keyframes text2 {
  0%  {height: 10vh;
width:10vh;}
  90%  {height: 40vh;
width:40vh;}
}
.button:hover{
height: 60vh;
width:60vh;
}
#w{
top: 60vh;
    left: 30vw;
}
#q{

}
#e{
top: 40vh;
    left: 50vw;
}
  </style>
</head>
<body>
  <div class="all">
    <h1 class=hello>السلام عليكم</h1>

<a href="https://ar.wikipedia.org/wiki/%D8%AC%D9%87%D8%A7%D8%B2_%D8%A5%D8%AF%D8%AE%D8%A7%D9%84" >
<input type="image" src="q.jpg" alt="STORE" class="button" id="q">
</a>
<a href="https://ar.wikipedia.org/wiki/%D8%AC%D9%87%D8%A7%D8%B2_%D8%A5%D8%AE%D8%B1%D8%A7%D8%AC_%D8%AD%D8%A7%D8%B3%D9%88%D8%A8%D9%8A" >
<input type="image" src="w.jpg" alt="STORE" class="button" id="e">
</a>
<a href="https://ar.wikipedia.org/wiki/%D9%88%D8%AD%D8%AF%D8%A7%D8%AA_%D8%A7%D9%84%D8%A5%D8%AF%D8%AE%D8%A7%D9%84_%D9%88%D8%A7%D9%84%D8%A5%D8%AE%D8%B1%D8%A7%D8%AC" >
<input type="image" src="e.jpg" alt="STORE" class="button" id="w">
</a>
  </div>
</body>
</html>