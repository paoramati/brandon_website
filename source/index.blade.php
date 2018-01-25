@extends('_layouts.master')

@section('title') 
{{--  {{$title}}   --}}
Brandon Paul - IT Website &amp; Blog
@endsection 

@section('description')
IT resume website for Brandon Paul, NZ IT graduate
@endsection

@section('content')

<style type="text/css">

</style>


<div class="jumbotron">
  <div class="container">
    <h1 class="display-1">Brandon Paul</h1>
    <p class="lead">IT Graduate, specialises in web development / OO analysis, design and development.</p>
    <a href="docs/Brandon_Paul_CV_IT.pdf" target="_blank" class="btn btn-primary btn-lg">Download my CV</a>
    <a href="#contact" class="btn btn-success btn-lg js-scroll-trigger">Contact Me</a>
  </div>
</div>

<div class="container h-100">

  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="h3">Experience</h3>
        <p>My work and development experience:</p>
        <ul>
          <li>Tutoring IT w/ foreign students</li>
          <li>Built several commercial websites</li>
          <li>Years of corporate &amp; hospitality experience</li>
        </ul>
        <a href="/experience" class="btn btn-success btn-lg">Visit Experience Page</a>
      </div>

      <div class="col">
        <h3 class="h3">Education</h3>
        <p>Bachelor of IT from NMIT, majoring in software development</p>
        <ul>
          <li>A/A+ Average(NMIT) - 6.0/7.0 GPA(UWS)</li>
          <li>Web development</li>
          <li>Software analysis &amp; design</li>

        </ul>
        <a href="/education" class="btn btn-success btn-lg card-link">Visit Education Page</a>

      </div>

      <div class="col">
        <h3 class="h3">Skills</h3>
        <p>Skilled in programming &amp; analysis/design methods</p>
        <ul>
          <li>HTML, CSS, JS, PHP</li>
          <li>Java, C#</li>
          <li>OO Analysis &amp; design techniques</li>

        </ul>

        <a href="/skills" class="btn btn-success btn-lg card-link">Visit Skills Page</a>

      </div>

    </div>

  </div>

</div>

<hr/>

<!-- Contact Section -->
<section id="contact" class="container">
  <div class="card border-primary">
    <div class="">
      <h2 class="card-header card-title">Contact Me</h2>
      <div class="card-body">
        <h5>Email: </h5>

        <a href="mailto:brandonmitchellpaul@gmail.com"><i class="fa fa-envelope-o"></i> brandonmitchellpaul@gmail.com</a>

        {{--  <p>				
          <i class="fa fa-envelope-o"></i> 
        <script>document.write('<'+'a'+' '+'h'+'r'+'e'+'f'+'='+"'"+'m'+'a'+'&'+'#'+'1'+'0'+'5'+';'+'l'+'t'+'&'+'#'+'1'+'1'+'1'+';'+
        '&'+'#'+'5'+'8'+';'+'b'+'&'+'#'+'1'+'1'+'4'+';'+'%'+'6'+'1'+'n'+'d'+'o'+'n'+'%'+'&'+'#'+'5'+'4'+';'+
        '&'+'#'+'6'+'8'+';'+'%'+'&'+'#'+'5'+'4'+';'+'9'+'&'+'#'+'3'+'7'+';'+'7'+'4'+'c'+'&'+'#'+'3'+'7'+';'+
        '&'+'#'+'5'+'4'+';'+'&'+'#'+'5'+'6'+';'+'e'+'l'+'%'+'6'+'C'+'p'+'&'+'#'+'9'+'7'+';'+'u'+'&'+'#'+'3'+
        '7'+';'+'&'+'#'+'5'+'4'+';'+'C'+'%'+'4'+'0'+'g'+'%'+'6'+'D'+'a'+'&'+'#'+'1'+'0'+'5'+';'+'l'+'&'+'#'+
        '3'+'7'+';'+'&'+'
        #'+'5'+'0'+';'+'E'+'c'+'%'+'6'+'F'+'&'+'#'+'3'+'7'+';'+'6'+'D'+"'"+'>'+'&'+'#'+'9'+
        '8'+';'+'r'+'a'+'n'+'&'+'#'+'1'+'0'+'0'+';'+'o'+'n'+'&'+'#'+'1'+'0'+'9'+';'+'i'+'t'+'&'+'#'+'9'+'9'+
        ';'+'h'+'e'+'l'+'l'+'&'+'#'+'1'+'1'+'2'+';'+'&'+'#'+'9'+'7'+';'+'u'+'l'+'&'+'#'+'6'+'4'+';'+'g'+'m'+
        'a'+'i'+'&'+'#'+'1'+'0'+'8'+';'+'&'+'#'+'4'+'6'+';'+'c'+'o'+'m'+'<'+'/'+'a'+'>');</script>
        </p>  --}}

        <h5>Phone: </h5>
        <a href="tel:+64223590779"><i class="glyphicon glyphicon-envelope"></i> 0223 590 779</a>

      </div>
    </div>
  </div>
</section>

<button class="btn btn-danger" data-toggle="modal" data-target="#pop">
  View Popup
</button>
     
<!-- Modal -->
<div class="modal fade" id="pop" tabindex="-1" role="dialog" aria-labelledby="pop-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="pop-label">Popup!</h4>
      </div>
      <div class="modal-body">
        A "Modal" is a Bootstrap popup window that uses Javascript.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection

