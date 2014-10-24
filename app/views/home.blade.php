@extends('plantillaGeneral')
  @section('titulo')
      Marcos Luna H
  @stop
  {{-- CCS personalizado para login--}}
  @section('customCSS')
    <link media="screen" type="text/css" rel="stylesheet" href="assets/css/customs/home.css">    
  @stop
  
  @section('cuerpoGeneral')
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          

          <div class="inner cover">
            <h1 class="cover-heading">Marcos Luna H</h1>
            <p class="lead">Developer -  Photographer A.</p>
           <div class="row">
             <div class="col-md-4 center-block">
             </div>
             <div class="col-md-4 center-block">
                <div class="row" >
                  <div class="col-md-2 col-xs-2 center-block ">
                    <a href="mailto:mlunag@gmail.com" class="socialIcons">
                      <img src="assets/img/icon/iconmail.png">
                    </a>
                  </div>
                  <div class="col-md-2 col-xs-2 ">
                    <a href="https://500px.com/mlunag16" class="socialIcons">
                        <img src="assets/img/icon/icon500px.png">
                    </a>                
                  </div>
                  <div class="col-md-2 col-xs-2 ">
                    <a href="https://facebook.com/marcoslunah" class="socialIcons">
                        <img src="assets/img/icon/iconfacebook.png">
                    </a>
                  </div>
                  <div class="col-md-2 col-xs-2 ">
                    <a href="https://twitter.com/marcoslunah" class="icon500px socialIcons">
                        <img src="assets/img/icon/icontwitter.png">
                    </a>
                  </div>
                  <div class="col-md-2 col-xs-2 ">
                    <a href="https://instagram.com/marcoslunah" class="icon500px socialIcons">
                        <img src="assets/img/icon/iconinstagram.png">
                    </a>
                  </div>
                  <div class="col-md-2 col-xs-2 ">
                    <a href="https://github.com/mluna16" class="icon500px socialIcons">
                        <img src="assets/img/icon/icongithub.png">
                    </a>
                  </div>
                </div>
                <div class="col-md-4 center-block">
                </div>
             </div>
           </div>
            
          
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>
                Designed with <a href="http://getbootstrap.com/">Bootstrap</a> developed with <a href="http://laravel.com/">Laravel</a> powered by <a href="https://www.heroku.com/home">Heroku</a>
              </p>
            </div>
              
            </div>
          </div>

        </div>

      </div>

    </div>
  @stop  
