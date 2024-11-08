<!DOCTYPE html>
<html lang="fr">
  <head>
    <head>
      

      
      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"> --}}

      <!-- Optional theme -->
      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css"> --}}

      <!-- Latest compiled and minified JavaScript -->
      {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Site Metas -->
        <title>Auto Service La Patience</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        
        <!-- Site Icons -->
        <link rel="shortcut icon" href="{{asset('assets/autoimages/logoremo.png')}}" type="image/x-icon" style=" object-fit: cover;"> 
       

        <link rel="apple-touch-icon" href="{{asset('assets/autoimages/logoremo.png')}}" style=" object-fit: cover;">
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- Site CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
       
    

    
        <style>
          a.page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            /* border: 1px solid #dee2e6; */
          }
        </style>
    
    </head>
  </head>
  <body>
    <script>
      function selectImage(element) {
          // Enlever la classe 'selected' de toutes les images
          const images = document.querySelectorAll('.hover-team');
          images.forEach(img => img.classList.remove('selected'));
          
          // Ajouter la classe 'selected' à l'image cliquée
          element.classList.add('selected');
    
          // Récupérer le titre et le paragraphe depuis les attributs data-title et data-paragraph
          const title = element.getAttribute('data-title');
          const paragraph = element.getAttribute('data-paragraph');
    
          // Mettre à jour le titre et le paragraphe avec les données récupérées
          document.getElementById('description-title').innerText = title;
          document.getElementById('description-paragraph').innerText = paragraph;
    
          // Afficher la section de description
          document.getElementById('selected-description').style.display = 'block';
      }
    </script>
    
  
    @yield('contenu')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </body>
