@extends('layouts.app')

@section('content')
<div id="portfolio">
     <div class="row">
	   <p class="heading"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;Portfolio</p>
	 </div>
	 <div class="row">
	   <div class="col-md-12">
	     <p class="subheading">Java application</p>
		 <hr>
         <a data-fancybox="gallery" href="{{ asset('images/demopage/java1.png') }}">
		    <img class="small_img" alt="java-app1" title="java-app1" src="{{ asset('images/demopage/rsz_java1.png') }}">
		 </a>
         <a data-fancybox="gallery" href="{{ asset('images/demopage/java2.png') }}">
		    <img class="small_img" alt="java-app2" title="java-app2" src="{{ asset('images/demopage/rsz_java2.png') }}">
		 </a>
		 <a data-fancybox="gallery" href="{{ asset('images/demopage/java3.png') }}">
		    <img class="small_img" alt="java-app3" title="java-app3" src="{{ asset('images/demopage/rsz_java3.png') }}">
		 </a>
		 <p class="txt">I have developed a custom application for car engineers in order to keep track of their customers and
		    their vehicles.I have used Java swing components like buttons, textboxes etc.The application is connected
			to a MySql database in order to store large amount of data.Also i have used NetBeans IDE to build the
            current application.			
		 </p>
       </div>
      </div>
	  <div class="row">
	   <div class="col-md-12">
	     <p class="subheading">PHP and chart.js</p>
		 <hr>
		 <p><a href="https://www.jsonchart.mario26tech.com" target="_blank">Link here</a></p>
		 <p>
            I have developed functionalities in JAVA that create tables, their relationships and fill them with data(in MySQL) from CSV file.Also creates json files that contain the average product or continent sales per quarter and year.Furthermore, read the data in PHP, filtering them using PHP functions according to the selection and display the data in chart using <a href="http://chartjs.org" target="_blank">chart.js</a>.Also i have created a PHP file which contains all the functions that the website requires, in order separate the operations from the HTML code. 		 
		 </p>
       </div>
      </div>
	  <div class="row">
	   <div class="col-md-12">
	     <p class="subheading">Angular Project - In Developent</p>
		 <hr>
		 <p><a href="https://www.angularProject.mario26tech.com" target="_blank">Link here</a></p>
		 <p>
		   I have developed an API in PHP and the Angular application stores and retrieves data from/to database using backend service. 
		 </p>
       </div>
      </div>
</div>
	  
@endsection
