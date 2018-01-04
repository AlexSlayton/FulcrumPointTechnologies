@extends ('layouts.master')

@section ('content')
<div class="hidden">
<header class="serviceHero">
    <div class="col-lg-12 serviceTopStyle">
          <h1 class="section-heading">Services</h1>
      </div>
</header>
</div>


<section id="services" style="background-color: #fbfbfb; padding: 0px;">
<!-- <div class="container">
        <div class="row">
        <div id="serviceMain">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus. Proin ac dapibus felis, hendrerit semper purus. In at condimentum augue. Vivamus ligula tortor, posuere vitae velit ut, luctus suscipit urna. Aliquam quis arcu suscipit, condimentum dolor a, tincidunt velit. Nulla tempor quis quam ac bibendum.</p>           
          </div>
        </div>
        </div>
      </div> -->
      <br>
      <div class="container">
        <div class="row">

          <div class="col-lg-4 text-center">
            <div class="service-box">           
              <i class="fa fa-3x fa-database text-primary sr-icons"></i>
              <h4>Database Services</h4>
              <p class="serviceBoxText text-muted">Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus.</p>
             <div class="learnMoreBtn">
      			<a class="btn btn-primary btn-xl" href="/services/database">Learn More</a>
      		</div>
            </div>
          </div>

          <div class="col-lg-4 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-cloud text-primary sr-icons"></i>
              <h4>Cloud Services</h4>
              <p class="serviceBoxText text-muted">Whether your company’s Cloud Services requirements are IaaS, SaaS, PaaS or you need more insight into Private and Public Cloud offerings, Fulcrum Point Technologies can provide a Cloud Readiness Assessment to determine the best solution.</p>
              <div class="learnMoreBtn">
      			<a class="btn btn-primary btn-xl" href="/services/cloud_services">Learn More</a>
      		</div>
            </div>
          </div>
          
          <div class="col-lg-4 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-cubes text-primary sr-icons"></i>
              <h4>DevOps</h4>
              <p class="serviceBoxText text-muted">Successfully delivering challenging projects utilizing multiple technologies, we help our clients to reduce time to market and costs - providing the opportunity to focus on core business activities while taking care of technical needs, working shoulder to shoulder towards a common goal.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/devops">Learn More</a>
          </div>
            </div>
            </div>

          <div class="col-lg-4 text-center">     
            <div class="service-box">
            <span class="glyphicon glyphicon-hdd"></span>
              <i class="fa fa-3x fa-cogs text-primary sr-icons"></i>
              <h4>Technology Services</h4>
              <p class="serviceBoxText text-muted">Whether you are looking to optimize your current On-premise solution or your desire is to move to an IaaS, SaaS, PaaS, Cloud, Hybrid or various levels of managed services, Fulcrum Point Technologies will work with your team to identify and implement the right solution to meet your needs.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/technology">Learn More</a>
          </div>
            </div>
          </div>

          <div class="col-lg-4 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-pie-chart text-primary sr-icons"></i>
              <h4>Big Data Analytics</h4>
              <p class="serviceBoxText text-muted">We will help your team transform raw data into actionable intelligence.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/big_data_analytics">Learn More</a>
          </div>
            </div>
          </div>
          
          <div class="col-lg-4 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-lock text-primary sr-icons"></i>
              <h4>Security Services</h4>
              <p class="serviceBoxText text-muted">How proactive and in-depth is your Companies Security Posture? Our Security experts are trained to find the vulnerabilities in your processes and technologies and help identify the level of risk your organization might have due to security gaps present in your environment.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/security">Learn More</a>
          </div>
            </div>
            </div>

          <div class="col-lg-4 text-center">  
            <div class="service-box">
            <span class="glyphicon glyphicon-hdd"></span>
              <i class="fa fa-3x fa-tasks text-primary sr-icons"></i>
              <h4>Project Management</h4>
              <p class="serviceBoxText text-muted">Looking for a way to stay ahead of the pack in today’s competitive and chaotic global economy, companies are turning to project management to consistently deliver business results.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/project_management">Learn More</a>
          </div>
            </div>
          </div>

          <div class="col-lg-4 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-globe text-primary sr-icons"></i>
              <h4>Strategic Planning</h4>
              <p class="serviceBoxText text-muted">Our team of Technology Strategists will work with your Technology Leaders to assist in aligning your IT strategy with your Business Goals and Objectives.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/strategic_planning">Learn More</a>
          </div>
            </div>
          </div>
          
          <div class="col-lg-4 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-line-chart text-primary sr-icons"></i>
              <h4>Vendor Management</h4>
              <p class="serviceBoxText text-muted">By implementing a formal Vendor Management Program, you will have valuable insight into how well your vendors are performing and any potential risk they pose, so you can be proactive in your response instead of reactive.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/vendor_management">Learn More</a>
          </div>
            </div>
            </div>

        <div class="col-lg-12 text-center">
            <div class="service-box">
              <i class="fa fa-3x fa-sitemap text-primary sr-icons"></i>
              <h4>Governance</h4>
              <p class="serviceBoxText text-muted text-left">Fulcrum is focused on delivering high valued Governance, Risk Management, and Strategic Advisory solutions.</p>
              <div class="learnMoreBtn">
            <a class="btn btn-primary btn-xl" href="/services/governance">Learn More</a>
          </div>
            </div>
            </div>

      </div>
    </div>

</section>

    <section class="sectionColor">
      <div class="jumbotron">
        <div class="connectMain">    
        <div class="col-lg-12  text-center sr-contact">
         <i class="fa fa-4x fa-envelope text-primary sr-icons" aria-hidden="true"></i>
            <h2 class="section-heading">Let's Connect Today</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel porta purus. Aliquam in elit quis neque fringilla mollis quis quis lacus. Proin ac dapibus felis, hendrerit semper purus. </p>
            <div class="viewMoreBtn">
            <a class="btn btn-primary btn-xl sr-button" style="color: white; box-shadow: none;" href="/contact">Contact</a>
        </div>        
        </div>
        </div>
      </div>
    </section>


@endsection