$( document ).ready(function() {
	$('.carousel').carousel()
});

var imageCount = 0;
      var currentImage = 0;
      var images = new Array();
       
      images[0] = 'img/fundo_caminho_do_mar.jpg';
      images[1] = 'img/fundo_sao_vicente.jpg';
      images[2] = 'img/fundo_subida_da_serra.jpg';
       
      var preLoadImages = new Array();
      for (var i = 0; i < images.length; i++)
      {
         if (images[i] == "")
            break;
       
         preLoadImages[i] = new Image();
         preLoadImages[i].src = images[i];
         imageCount++;
      }

      function startSlideShow()
      {
         if (document.querySelector('#testeA') && imageCount > 0)
         {
            document.querySelector('#testeA').style.backgroundImage = "url("+images[currentImage]+")";    
            document.querySelector('#testeA').style.backgroundAttachment = "fixed";
            document.querySelector('#testeA').style.backgroundRepeat = "repeat";
            document.querySelector('#testeA').style.backgroundPosition = "left top";
            
            currentImage = currentImage + 1;
            if (currentImage > (imageCount-1))
            { 
               currentImage = 0;
            }
            setTimeout('startSlideShow()', 5000);
         }
      }
      startSlideShow();