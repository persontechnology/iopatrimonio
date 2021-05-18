@extends('layouts.app')

@section('content')

    <div class="container-fluid">


        <!--Section: Content-->
        <section class="team-section text-center dark-grey-text">
      
          <!-- Section heading -->
          <h3 class="font-weight-bold pb-2 mb-4">Investigadores</h3>
          <!-- Section description -->
          <p class="text-muted w-responsive mx-auto mb-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
            eum porro a pariatur veniam.
          </p>
      
          <!-- Grid row-->
          <div class="row text-center text-md-left">
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/FRANCISCO ULLOA.jpg') }}" class="rounded z-depth-1 img-fluid" alt="Sample avatar" style="width: 750px; height: 500px;">
                
                <div class="card-body text-center">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <!--Dribbble -->
                    <a class="p-2 fa-lg dribbble-ic">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Francisco Ulloa Enríquez</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – Investigador UTC</h6>
                <ul>
                    <li>Director del proyecto Generativo:  Sistema de gestión del centro histórico de Latacunga</li>
                    <li>Arquitecto - Universidad Central del Ecuador</li>
                    <li>Magister en ciencias de la educación superior - Universidad de La Habana / Cuba</li>
                    <li>Doctor en ciencias de la educación (PhD) - Universidad de La Habana / Cuba</li>
                    <li>ORCID ID: https://orcid.org/0000-0002-5405-4720</li>

                    
                </ul>
                
              </div>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/ENRIQUE LANAS.jpg') }}" class="rounded z-depth-1 img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                <div class="card-body">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!--YouTube -->
                    <a class="p-2 fa-lg yt-ic">
                        <i class="fab fa-youtube"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Enrique Lanas López</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente -Investigador UTC</h6>
                <p class="grey-text">
                    <li>Subdirector proyecto generativo: Sistema de gestión del centro histórico de Latacunga</li>
                    <li>Coordinador de Imagen Gráfica</li>
                    <li>Licenciatura en arte y diseño – UDLA / Ecuador</li>
                    <li>Arquitecto – UDLA / Ecuador</li>
                    <li>Máster en diseño arquitectónico – Universidad Técnica de Ambato / Ecuador</li>
                    <li>Máster en docencia universitaria y administración educativa - Universidad Tecnológica Indoamérica / Ecuador.</li>
                    <li>ORCID iD: https://orcid.org/0000-0002-9688-6621</li>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->
      
          <!-- Grid row-->
          <div class="row text-center text-md-left">
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/AM.jpg') }}" class="rounded z-depth-1 img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                <div class="card-body text-center">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <!--Dribbble -->
                    <a class="p-2 fa-lg dribbble-ic">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Alex Mullo López</h4>
                <h6 class="font-weight-bold grey-text mb-3">Alex Mullo López</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinador proyecto formativo: Kinkiyary</li>
                        <li>Licenciado en Comunicación – Universidad Técnica de Ambato / Ecuador</li>
                        <li>Máster en comunicación periodística institucional y empresarial – UNIANDES / Ecuador</li>
                        <li>ORCID iD: https://orcid.org/0000-0001-9876-9210</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/LA.jpg') }}" class="rounded z-depth-1 img-fluid img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                  <div class="card-body text-center">
                    <!-- Google +-->
                    <a class="p-2 fa-lg gplus-ic">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                    <!--LinkedIn -->
                    <a class="p-2 fa-lg li-ic">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                    <!--Email-->
                    <a class="p-2 fa-lg email-ic">
                        <i class="fas fa-envelope"> </i>
                    </a>
                  </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Lorena Álvarez Garzón</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – investigadora UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinadora proyecto formativo: Panzaleito</li>
                        <li>Licenciada en ciencias de la educación – Universidad Tecnológica Equinoccial / Ecuador</li>
                        <li>Licenciada en comunicación – Universidad Técnica de Ambato / Ecuador</li>
                        <li>Máster en desarrollo local – Universidad Tecnológica Equinoccial</li>
                        <li>Doctoranda en ciencias de la información y comunicación - Universidad de Extremadura / España.</li>
                        <li>ORCID iD: https://orcid.org/0000-0002-4055-2729</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->

          <!-- Grid row-->
          <div class="row text-center text-md-left">
        
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/MARIO BANDA.jpg') }}" class="rounded z-depth-1 img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                <div class="card-body text-center">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <!--Dribbble -->
                    <a class="p-2 fa-lg dribbble-ic">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Mario Banda Casa</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – Investigador UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinador informático: página web patrimoniolatacunga.com</li>
                        <li>Ingeniero en Sistemas – Universidad Indoamérica / Ecuador</li>
                        <li>Magister en planeamiento y administración educativa – Universidad Técnica de Cotopaxi / Ecuador</li>
                        <li>Máster en gerencia informática – Pontificia Universidad Católica del Ecuador sede Ambato</li>
                        <li>ORCID iD: https://orcid.org/0000-0003-3950-1286</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/JUAN PABLO TORO.jpg') }}" class="rounded z-depth-1 img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                <div class="card-body text-center">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!--YouTube -->
                    <a class="p-2 fa-lg yt-ic">
                        <i class="fab fa-youtube"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Juan Pablo Toro</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – Investigador UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinador del proyecto formativo: Ucumamayaya</li>
                        <li>Licenciado en comunicación social – Universidad Técnica de Ambato / Ecuador</li>
                        <li>Máster en comunicación periodística institucional y empresarial – UNIANDES / Ecuador</li>
                        <li>ORCID iD: https://orcid.org/0000-0002-8721-2676</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->
      
          <!-- Grid row-->
          <div class="row text-center text-md-left">
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/JORGE ROSERO.jpg') }}" class="rounded z-depth-1 img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                <div class="card-body text-center">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <!-- GitHub-->
                    <a class="p-2 fa-lg git-ic">
                        <i class="fab fa-github"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Jorge Luis Rosero</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – Investigador UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinador del proyecto formativo: Equipamiento urbano de Latacunga</li>
                        <li>Licenciado en ciencias de la educación mención ingles – Universidad Técnica de Cotopaxi / Ecuador</li>
                        <li>Arquitecto – Universidad Central del Ecuador</li>
                        <li>Magister en Administración y planificación educativa - Universidad Técnica de Cotopaxi / Ecuador</li>
                        <li>ORCID iD: https://orcid.org/0000-0002-4764-5215</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/RAUL CÁRDENAS.jpg') }}" class="rounded z-depth-1 img-fluid img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                  <div class="card-body text-center">
                      <!-- Google +-->
                    <a class="p-2 fa-lg gplus-ic">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                    <!--LinkedIn -->
                    <a class="p-2 fa-lg li-ic">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                    <!--Email-->
                    <a class="p-2 fa-lg email-ic">
                        <i class="fas fa-envelope"> </i>
                    </a>
                  </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Raúl Cárdenas</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – Investigador UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinación investigación formativa: El Danzante del sol en Pujilí</li>
                        <li>Licenciado en ciencias de la educación – Universidad Técnica de Ambato / Ecuador</li>
                        <li>Doctor en ciencias de la educación - Universidad Técnica de Ambato / Ecuador</li>
                        <li>Máster en ciencias de la educación – Universidad Técnica de Cotopaxi / Ecuador</li>
                        <li>Máster en docencia universitaria – Universidad Tecnológica Indoamérica / Ecuador</li>
                        <li>Doctor en ciencias pedagógicas (PhD) - Universidad de Oriente / Cuba</li>
                        <li>ORCID iD: https://orcid.org/0000-0001-8808-2888</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->

          <!-- Grid row-->
          <div class="row text-center text-md-left">
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/NATALIA ZAPATA.jpg') }}" class="rounded z-depth-1 img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                <div class="card-body text-center">
                    <!-- Facebook-->
                    <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <!-- GitHub-->
                    <a class="p-2 fa-lg git-ic">
                        <i class="fab fa-github"> </i>
                    </a>
                </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Natália Zapata Vilaña</h4>
                <h6 class="font-weight-bold grey-text mb-3">Docente – investigadora UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Coordinadora investigación formativa: Parque Nacional Cotopaxi</li>
                        <li>Licenciada en comunicación social – Universidad Central del Ecuador</li>
                        <li>Máster en relaciones internacionales – Universidad Central del Ecuador </li>
                        <li>ORCID iD: https://orcid.org/0000-0002-5033-7133</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-6 col-md-12 mb-5 d-md-flex justify-content-between">
              <div class="avatar mb-md-0 mb-4 mx-4">
                <img src="{{ asset('img/users/PAOLA TAPIA.jpg') }}" class="rounded z-depth-1 img-fluid img-fluid" style="width: 750px; height: 500px;" alt="Sample avatar">
                  <div class="card-body text-center">
                      <!-- Google +-->
                    <a class="p-2 fa-lg gplus-ic">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                    <!--LinkedIn -->
                    <a class="p-2 fa-lg li-ic">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                    <!--Email-->
                    <a class="p-2 fa-lg email-ic">
                        <i class="fas fa-envelope"> </i>
                    </a>
                  </div>
              </div>
              <div class="mx-4">
                <h4 class="font-weight-bold mb-3">Paola Tapia Escobar</h4>
                <h6 class="font-weight-bold grey-text mb-3">Ayudante de investigación UTC</h6>
                <p class="grey-text">
                    <ul>
                        <li>Responsable de fotografía en el proyecto generativo: Sistema de gestión del centro histórico de Latacunga</li>
                        <li>Estudiante de Comunicación UTC</li>
                    </ul>
                </p>
                
              </div>
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row-->
      
        </section>
        <!--Section: Content-->
        
      
    </div>

@endsection
