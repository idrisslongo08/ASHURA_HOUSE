<?php
//include('headerContact.php');

?>
<section class="contact-form-wrap section">
   <div class="container">
      <div class="columns is-multiline is-align-items-center bg-gray">
         <div class="column is-6-desktop is-12-tablet">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1568.3954006268925!2d27.489657295273712!3d-11.641326879883444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1972392e1db663f9%3A0x2cde0f1df93fc6aa!2sAv.%20de%20Nyanza%2C%20Lubumbashi!5e0!3m2!1sen!2scd!4v1667992265519!5m2!1sen!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div class="column is-6-desktop is-12-tablet">
            <div class="contact-content">
               <p> ... N’hésitez pas à contacter <br></p>
               <h4 class="mb-3">(+243) 978175635</h4> <br> <h4>(+243) 992168086</h4>
               <p>Pour plus d’information</p>
               <ul class="social-icons list-inline mt-5">
                  <li class="list-inline-item">
                     <a href="https://m.facebook.com/people/Ashura-House-Sarl/100064166617629/"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li class="list-inline-item">
                     <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="columns is-justify-content-center mt-5">
         <div class="column is-8-widescreen is-10-desktop has-text-centered mt-4">
            <form action="mail.php" method="POST">
               <!-- form message -->
               <?php
               if(isset($_POST['message'])=="succes"){?>
            
               <div class="columns">
                  <div class="column is-12">
                     <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Votre message a été envoyer avec succes!.
                     </div>
                  </div>
               </div>
               <!-- end message -->
               <?php
               }?>
               <h3 class="text-md ">Contactez nous</h3>
               <p class="mb-5"></p>
               <div class="input-group">
                  <input name="nom" type="text" class="input" placeholder="Votre nom">
               </div>
               <div class="input-group">
                  <input name="subject" type="text" class="input" placeholder="Object du message">
               </div>
               <div class="input-group">
                  <input name="email" type="email" class="input" placeholder="Addresse mail">
               </div>
               <div class="input-group-2 mb-4">
                  <textarea name="message" class="input" rows="4" placeholder="Message"></textarea>
               </div>
               <button class="btn btn-main" name="submit" type="submit">Envoyer un message</button>
            </form>
         </div>
      </div>
   </div>
</section>
