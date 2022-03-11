<section class="footer-content">
   <div class="container footer-block">

<div class="news-letter">
    <h4 class="text-center"> Join Our Newsletter</h4>
  <div class="row w-50 marg-center">

     <div class="col-lg-8">  <button class="classic-btn"> suscribe@gmail.com</button> </div> 
     <div class="col-lg-4">  <button  class="classic-btn">Sign Up </button>  </div> 
</div>


</div>
<div class="row w-50 marg-center footer-icons">

      <img  src="./images/icons/icon-footer (1).png" alt="">
      <img src="./images/icons/icon-footer (2).png" alt="">
      <img src="./images/icons/icon-footer (3).png" alt="">
      <img src="./images/icons/icon-footer (4).png" alt="">


</div>


<div class="footer">
    <div class="footer-inner">
        <div class="footer-column col-sm-5">
          <h5>About Us</h5>
          <ul>
              <li> Privacy Policy</li>
              <li> About Us</li>
              <li> Contact Us</li>
              <li> Sitemap</li>
              <li> Sign Up</li>
          </ul>
        </div>


        <div class="footer-column col-sm-5">
          <h5>Quick Menu</h5>
          <ul>
              <li> Gaming Casino Online</li>
              <li>Responsible Gaming</li>
             
          </ul>
        </div>


        <div class="footer-column col-sm-12 contact-s">
          <h5>Contact Detail</h5>
          <ul>
              <li>+49 652 544 55</li>
              <li> try@mail.com</li>
          
          </ul>
        </div>


        <div class="footer-column col-sm-12">
        <div class="img-element">
                        <img class="img-icon" src="./images/unnamed (3).png" alt="">
        </div>
         <p>
         Lorem Ipsum is simply dummy text of th e  is simply dummy text of the  is simply dummy text
         </p>
         <div class="social-links">
             <span><i class="fa-brands fa-facebook txt--gradient "></i></span>
            
             <span> <i class="fa-brands fa-twitter txt--gradient "></i></span>
             <span> <i class="fa-brands fa-instagram txt--gradient "></i> </span>
         </div>
        </div>




    </div>
</div>
<hr class="footer-line">
<div class="copy-rights">
    <p> All Rights Reserved @ NewZelandCasinos.Org</p>
</div>
   </section>
 




   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
	jQuery(document).ready(function($){
		$('.question').on('click', function(){
			if($(this).hasClass('active')){
				$('.question').removeClass('active');
				$('.arrow').removeClass('arrow-active');
				$('.answer').slideUp();
			}
			else{
				$('.question').removeClass('active');
				$('.arrow').removeClass('arrow-active');
				$('.answer').slideUp();
				$(this).addClass('active');
				$(this).children('.arrow').addClass('arrow-active');
				$(this).children('.answer').slideToggle('slow');
			}
		});
	});

 </script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>