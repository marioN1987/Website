@extends('layouts.app')

@section('content')
 
  <div class="row" id="welcome">
     <div class="col-md-5 my_img">
        <img src="{{ URL::asset('images/mario_pic.jpg') }}" alt="Mario Image" title="Mario Image" class="img-responsive"/>
     </div>
     <div class="col-md-7 welcome_note">
       <p>My name is Mario Nikolaou and I have studied Computer Science in Frederick
       University in Cyprus. I am highly skilled in developing and designing attractive websites,web applications and
       desktop applications as well as using latest technologies which are listed below.Also I have experience using
       ASP.NET 4.5.1 framework in Microsoft Visual Studio, in combination with Boostrap my website is fully responsive for
       tablets,mobile devices and desktop computers.Moreover, I have developed my personal website using Laravel framework, CSS3/HTML5
       features and JQuery in order to make it interactive and user friendly. Also I have hands-on experience in NetBeans
       IDE, Eclipse, Zend/Laravel Framework and Wordpress.</p>
    </div>
  </div>
  <div class="row">
	<div class="col-md-12">
		<p style="text-align:center;">
			<a class="scroll" href="#skills">Skills<br />
			<i class='fas fa-angle-double-down' style='font-size:36px'></i>
			</a>
		</p>
	</div>
  </div>
  
  <!--<header style="min-height:200px;"></header>
  
  <div style="margin:20px 0px 20px 0px;"></div>-->
  
  <div id="skills">
      <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-heading">My Skills</h2>
           </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>PHP</h3>
			  <div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
                 <div class="progress-bar" id="PHP-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
              </div>
		  </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>Java</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
                 <div class="progress-bar" id="JAVA-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
              </div>
		  </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>HTML5</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
                 <div class="progress-bar" id="HTML-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
              </div>
		  </div>
      </div>
	   <div class="row">
		  <div class="col-md-12">
			<h3>CSS3</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
                 <div class="progress-bar" id="CSS3-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
              </div>
		  </div>
      </div>
	   <div class="row">
		  <div class="col-md-12">
			<h3>JQuery</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
				 <div class="progress-bar" id="Jquery-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
			  </div>
		  </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>NodeJS</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
				 <div class="progress-bar" id="NodeJs-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
			  </div>
		  </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>ASP.NET</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
				 <div class="progress-bar" id="ASP-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
			  </div>
		  </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>C#</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
				 <div class="progress-bar" id="CSHARP-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
			  </div>
		  </div>
      </div>
	  <div class="row">
		  <div class="col-md-12">
			<h3>MySQL</h3>
			<div class="Skill_level">
			    <p style="text-align:center;">Intermediate
				<span style="float:left;">Beginner</span>
				<span style="float:right;">Expert</span>
				</p>
				<div style="clear: both;"></div>
			  </div>
			  <div class="bar">
				 <div class="progress-bar" id="MYSQL-progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
				 </div>
			  </div>
		  </div>
      </div>
	  <div class="spacer"></div>
  </div>
@endsection
