@extends ('layouts.master')

@section ('content')

    <header class="masthead">
    <div class="hidden">
    
      <div class="header-content">
        <div class="header-content-inner">
          <div class="bumpUp">
          <h1 id="homeHeadingHero">Proven Technology Leaders</h1>
          <br>
            <p>Welcome to Fulcrum Point Technologies, where we are dedicated to helping you redefine and transform the role that Information Technology plays in <span style="font-weight: bold;">your business</span>.</p>
          <div class="btn-hero">
            <a class="btn btn-primary btn-xl" style="color: white; box-shadow: none;" href="/contact">Contact Us</a>
          </div>
          <div class="btn-hero">
            <a class="btn btn-primary btn-xl" style="color: white; box-shadow: none;" href="/services">Services</a>
          </div> </div>         
      </div>
      <div class="ScrollDown">
          <a href="#services"><i class="fa fa-5x fa-angle-double-down" aria-hidden="true"></i></a>
        </div>
      </div>
      </div>
      
    </header>

    <section id="services">
      <div class="container">
        <div class="row">
        <div id="serviceMain">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Why Choose Us</h2>
            <p class="text-center">We are a team of proven technology leaders with more than 100 years of combined expertise focusing on the individual - employee, customer, and company.
            In our process we begin by understanding the inhibitors to your success - performance, stability, financial, capabilities - and then create and execute a roadmap specifically tailored to your needs.</p>     
          </div>
        </div>
        </div>
      </div>

      <br>

      <div class="container">
        <div class="row">
          
          <div class="col-lg-4 text-center">
            <div class="bumpLeft">
            <div class="service-box-home">
              <i class="fa fa-4x fa-cloud text-primary sr-icons" aria-hidden="true"></i>
              <h5>Cloud Services</h5>
              <p class="text-muted text-center">We provide a Cloud Readiness Assessment to determine the best solution.<!-- Whether your company’s Cloud Services requirements are IaaS, SaaS, PaaS or you need more insight into Private and Public Cloud offerings, Fulcrum Point Technologies can provide a Cloud Readiness Assessment to determine the best solution. --></p>
              <div class="learnMoreText">
               <a href="/services/cloud_services" style="color: #359392;">LEARN MORE &nbsp;</a><i class="fa fa-1x fa-angle-right"></i>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-4 text-center">      
            <div class="service-box-home">
              <i class="fa fa-4x fa-globe text-primary sr-icons" aria-hidden="true"></i>
              <h5>Strategic Planning</h5>
              <p class="text-muted text-center">We collaborate to assist in aligning your IT strategy with your business goals &#38; objectives.<!-- Our team of Technology Strategists will work with your Technology Leaders to assist in aligning your IT strategy with your Business Goals and Objectives. --></p>
              <div class="learnMoreText">
                <a href="/services/strategic_planning" style="color: #359392;">LEARN MORE &nbsp;</a><i class="fa fa-1x fa-angle-right"></i>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 text-center">
            <div class="service-box-home">
              <i class="fa fa-4x fa-cogs text-primary sr-icons" aria-hidden="true"></i>
              <h5>Technology Services</h5>
              <p class="text-muted text-center">We work with your team to identify and implement the right solution to meet your needs.<!-- Whether you are looking to optimize your current On-premise solution or your desire is to move to an IaaS, SaaS, PaaS, Cloud, Hybrid or various levels of managed services, Fulcrum Point Technologies will work with your team to identify and implement the right solution to meet your needs. --></p>
              <div class="learnMoreText">
                <a href="/services/technology" style="color: #359392;">LEARN MORE &nbsp;</a><i class="fa fa-1x fa-angle-right"></i>
              </div>
            </div>
            </div>

          </div>
        </div>
      
    
      <div class="viewMoreBtn">
      <a class="btn btn-primary btn-xl sr-button" href="/services">View More</a>
      </div>
    </section>
    
    <section class="sectionColor" >
      <div class="jumbotron">
        <div class="connectMain">    
        <div class="col-lg-12  text-center sr-contact">
         <i class="fa fa-4x fa-envelope text-primary sr-icons" aria-hidden="true"></i>
            <h2 class="section-heading">Let's Connect Today</h2>
            <p class="text-center">We are dedicated to helping you redefine and transform the role that Information Technology plays in your business. Let's Connect Today!</p>
            <div class="contactBtn">
            <a class="btn btn-primary btn-xl sr-button" style="color: white; box-shadow: none;" href="/contact">Contact</a>
        </div>        
        </div>
        </div>
      </div>
    </section>

    @endsection 


