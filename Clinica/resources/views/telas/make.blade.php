@extends('layout.index')
@section('make')

<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <img src="images/appointment-image.jpg" class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                   <!-- CONTACT FORM HERE -->
                   <form id="appointment-form" role="form" method="post" action="#">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Nome</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="date">Date</label>
                                  <input type="date" name="date" value="" class="form-control">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="select">Departmento</label>
                                  <select class="form-control">
                                       <option>Ginecologista</option>
                                       <option>nutricionista</option>
                                  </select>
                             </div>

                             <div class="col-md-12 col-sm-12">
                                  <label for="telephone">Celular Para Contato</label>
                                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                  <label for="Message">Messagem</label>
                                  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                  <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                             </div>
                        </div>
                  </form>
              </div>

         </div>
    </div>
</section>

<footer data-stellar-background-ratio="5">
    <div class="container">
         <div class="row">

              <div class="col-md-4 col-sm-4">
                   <div class="footer-thumb"> 
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informações de contato</h4>
                        <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                        <div class="contact-info">
                             <p><i class="fa fa-phone"></i> 010-070-0170</p>
                           
                        </div>
                   </div>
              </div>

             

              <div class="col-md-4 col-sm-4"> 
                   <div class="footer-thumb">
                        <div class="opening-hours">
                             <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                             <p>Segunda a sexta<span>06:00 AM - 17:30 PM</span></p>
                             <p>Sábado <span>09:00 AM - 08:00 PM</span></p>
                             <p>Domingo <span>Fechada</span></p>
                        </div> 

                        <ul class="social-icon">
                             <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                   </div>
              </div>

              <div class="col-md-12 col-sm-12 border-top">
                   <div class="col-md-4 col-sm-6">
                        <div class="copyright-text"> 
                             <p>Copyright &copy; 2017 Your Company 
                             
                             | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
                        </div>
                   </div>
                   <div class="col-md-6 col-sm-6">
                        <div class="footer-link"> 
                             <a href="#">Laboratory Tests</a>
                             <a href="#">Departments</a>
                             <a href="#">Insurance Policy</a>
                             <a href="#">Careers</a>
                        </div>
                   </div>
                   <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn"> 
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                        </div>
                   </div>   
              </div>
              
         </div>
    </div>
</footer>
@endsection