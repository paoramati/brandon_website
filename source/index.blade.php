@extends('_layouts.home_master')

@section('title') 
  Brandon Paul's IT Resume Website
@endsection 

@section('description')
  IT resume and website for Brandon Paul, NZ IT graduate
@endsection

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-dark fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"><i class="fa fa-code"></i> Brandon Paul</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile image-rounded mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      {{--  <a href="mailto:{{ $page['email'] }}"><i class="fa fa-envelope-o "></i> </a>  --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About &amp; Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <div class="jumbotron bg-dark">
          <h1 class="mb-0">Brandon
            <span class="">Paul</span>
          </h1>
          <p class="mb-4">High achieving Bachelor of IT Graduate (major in Systems Development) with years of non-IT work experience.<br> Interested in web development (front and/or back) and software development.</p>
          <a href="docs/B Paul CV.pdf" class="btn btn-lg btn-outline-danger text-white">Download CV (.pdf)</a>
        </div>

        <div>
          <div class="subheading mb-5"><i class="fa fa-home"></i> Golden Bay, South Island; Moving to Wellington soon!<br>
            <a href="mailto:{{ $page['email'] }}"><i class="fa fa-envelope-o"></i> {{ $page['email']}} </a><br>
            <a href="tel:{{ $page['phone'] }}"><i class="fa fa-phone"></i> {{ $page['phone'] }}</a><br>
            <a href="{{ $page['git'] }}"><i class="fa fa-github"></i> {{ $page['git'] }}</a>
          </div>
        </div>
        
          {{--  <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              
            </li>
          </ul>  --}}
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Experience</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">International Student Tutor (IT)</h3>
              <div class="subheading mb-3">Nelson Marlborough Institute of Technology</div>
              <ul class="bullets">
                <li>Mentored international students to help them achieve high marks in IT subjects</li>
                <li>Provided technical guidance (software analysis/coding/deployment)</li>
                <li>Provided communication guidance (writing, reading, comprehension)</li>
              </ul>
              {{--  <p>Tutored in various IT subjects with students of varying levels of English competence</p>  --}}
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">Feb 2017 - Dec 2017</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Admin Assistant</h3>
              <div class="subheading mb-3">Henry Davis York Lawyers</div>
              <ul class="bullets">
                <li></li>
              </ul>
              </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">September 2013 - June 2014</span>
            </div>
          </div>

        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Bachelor of Information Technology <em>Major in Systems/Software Development</em></h3>
              <div class="subheading mb-3">Nelson Marlborough Institute of Technology</div>
              <div></div>
              <p>A/A+ Average</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">Feb 2017 - Dec 2017</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">University of Western Sydney, Australia</h3>
              <div class="subheading mb-3">Bachelor of Information Communication Technology (Incomplete/Transferred)</div>
              <p>GPA: 6.0/7.0</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">June 2014 - Dec 2016</span>
            </div>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="projects">
        <div class="my-auto">
          <h2 class="mb-5">My Projects</h2>

          <div>
            <h3>Flora By Laura</h3>

          </div>

          <div>
            <h3>Kakariki Kids</h3>

          </div>       
          
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
                <i class="devicons devicons-laravel"></i>
              </li>
              <li class="list-inline-item">
                <i class="devicons devicons-php"></i>
              </li>
            {{--  <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>  --}}
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            {{--  <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>  --}}
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          {{--  <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>  --}}
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Interests</h2>
          <p></p>
          <p class="mb-0"></p>
        </div>
      </section>


    </div>

@endsection