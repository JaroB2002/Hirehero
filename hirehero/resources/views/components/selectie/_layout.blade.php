<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
  
  <link rel="stylesheet" href="css/login.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
{{$slot}}
</body>
</html>