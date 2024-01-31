<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  @vite('resources/css/app.css')
  
</head>
<body class="bg-white overflow-x-hidden">
{{$slot}}

<script>

  //Klik op de hamburger icon om de navigatie te openen
  const hamburger = document.getElementById('horizontalNav');
  const nav = document.getElementById('nav');

  hamburger.addEventListener('click', () => {
    nav.classList.toggle('md:hidden');
    //Een korte animatie wanneer de navigatie open en dicht gaat
    nav.classList.toggle('animate-slide');


  })





</script>
</body>
</html>