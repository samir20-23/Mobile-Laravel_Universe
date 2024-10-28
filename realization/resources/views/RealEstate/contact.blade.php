 @extends('layouts.css.contact')
 @section('content')
     <section class = "contact-section">
         <div class = "contact-bg">
             <h3>Get in Touch with Us</h3>
             <h2>contact us</h2>
             <div class = "line">
                 <div></div>
                 <div></div>
                 <div></div>
             </div>
             <p class = "text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste facilis quos impedit
                 fuga nobis modi debitis laboriosam velit reiciendis quisquam alias corporis, maxime enim, optio ab dolorum
                 sequi qui.</p>
         </div>


         <div class = "contact-body">
             <div class = "contact-info">
                 <div>
                     <span><i class = "fas fa-mobile-alt"></i></span>
                     <span>Phone .</span>
                     <span class = "text">+212 718087106</span>
                 </div>
                 <div>
                     <span><i class = "fas fa-envelope-open"></i></span>
                     <span>E-mail</span>
                     <span class = "text">aouladamarsamir@gmail.com</span>
                 </div>
                 <div>
                     <span><i class = "fas fa-map-marker-alt"></i></span>
                     <span>Address</span>
                     <span class = "text">2939 Tanger, Vicotria TX, United States</span>
                 </div>
                 <div>
                     <span><i class = "fas fa-clock"></i></span>
                     <span>Opening Hours</span>
                     <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
                 </div>
             </div>

             <div class = "contact-form ">
                 <form method="POST" action="{{ url('contactSend') }}">
                
                
                     @if (session('success'))
                         <div class="alert alert-success">{{ session('success') }}</div>
                     @endif

                     @if ($errors->any())
                         <div class="alert alert-danger">
                             {{ $errors->first() }}
                         </div>
                     @endif 
                     @csrf

                     <div>
                         <input name="firstname" type = "text" class = "form-control" placeholder="First Name">
                         <input name="lastname" type = "text" class = "form-control" placeholder="Last Name">
                     </div>
                     <div>
                         <input name="email" type = "email" class = "form-control" placeholder="E-mail">
                         <input name="phone" type = "text" class = "form-control" placeholder="Phone">
                     </div>
                     <textarea name="message" rows = "5" placeholder="Message" class = "form-control"></textarea>
                     <input type = "submit" class = "send-btn" value = "send message">
                 </form>



                 <div>
                     <img src = "assets/images/contact-png.png" alt = "">
                 </div>
             </div>
         </div>

     </section>



     <!-- FOOTER -->
     <footer class="footer">

         <div class="footer-bottom">
             <div class="container">
                 <p class="copyright">
                     &copy; 2024 SoliCode</a>. All Rights Reserved
                 </p>
             </div>
         </div>

     </footer>
 @endsection
