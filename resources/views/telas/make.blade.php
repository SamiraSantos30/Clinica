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
                   <form id="appointment-form" role="form" method="post" action="{{ route('make.store') }}">
                    @csrf
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Marque uma consulta</h2>
                    </div>
                
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="nome_contato" placeholder="Full Name">
                        </div>
                
                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email_contato" placeholder="Your Email">
                        </div>
                
                        <div class="col-md-6 col-sm-6">
                            <label for="date">Date</label>
                            <input type="date" name="data_contato" value="" class="form-control">
                        </div>
                
                        <div class="col-md-6 col-sm-6">
                            <label for="select">Departamento</label>
                            <select name="departamento_contato" class="form-control">
                                <option>Ginecologista</option>
                                <option>Nutricionista</option>
                            </select>
                        </div>
                
                        <div class="col-md-12 col-sm-12">
                            <label for="telephone">Celular Para Contato</label>
                            <input type="tel" class="form-control" id="phone" name="tel_contato" placeholder="Phone">
                            <label for="Message">Mensagem</label>
                            <textarea class="form-control" rows="5" id="message" name="mensagem_contato" placeholder="Message"></textarea>
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
                        <p>WhatsApp</p>

                        <div class="contact-info">
                             <p><i class="fa fa-phone"></i> (14)3345-8776</p>
                           
                        </div>
                        <ul class="social-icon">
                         <li><a href="#" class="fa fa-instagram"></a>Clinica</li>
                    </ul>
                   </div>
              </div>

             

              <div class="col-md-4 col-sm-4"> 
                   <div class="footer-thumb">
                        <div class="opening-hours">
                             <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horário de funcionamento</h4>
                             <p>Segunda a sexta<span>06:00 AM - 17:30 PM</span></p>
                             <p>Sábado <span>09:00 AM - 08:00 PM</span></p>
                             <p>Domingo <span>Fechada</span></p>
                        </div> 
                   </div>
              </div>

              <div class="col-md-12 col-sm-12 border-top">
                   <div class="col-md-4 col-sm-6">    
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
