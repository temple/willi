var images = [ 
    'https://i.ibb.co/BsF1qxY/zwiebel1.jpg',
    'https://i.ibb.co/F5q5wyN/rosa.jpg',
    'https://i.ibb.co/x5XxH9N/borde-azul.jpg',
  'https://i.ibb.co/qD46fyV/amarillo.jpg',
   'https://i.ibb.co/KjStQKN/hermes.jpg',
  
];
var cuenta = 0; // dice el número de cuenta de cambios de imagen

function cambiarImagen(){
  var imagen_actual = cuenta % images.length;
  /*document.querySelector('main').style.backgroundImage="url('"+images[imagen_actual]+"')";*/
  var new_image =images[imagen_actual];
  document.querySelector('main img.photos').setAttribute('src',new_image  );
  cuenta++; 
}
window.setInterval(cambiarImagen,1000);