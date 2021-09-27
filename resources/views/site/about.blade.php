@extends('layout')

@section('title', 'Studio Rhizome - Projects')

@section('content')
    @parent
     <section class="breadcrumbs">
     
     <div class="container-fluid">
     <div class="section-title pl-5">
     <h1 style="color:red;">About Us</h1>
            </div>
                 <div class="row">
                     <div class="col-xs-12 col-md-6 about-rhiz-box">
                         <img src="assets/img/rhizome.jpg">
                     </div>
                     <div class="col-xs-12 col-md-6 about-rhiz-box">
                         <p style="font-size: 17px;"><b style="color: red; font-size: 21px;">Rhizome is a knowledge system of A-Centered
multiplicities.</b></br>
A system of learning which challenges traditional
model by interconnection and non- hierarchical
approach. Explored initially as an application of
post-structural thought, Rhizome is characterized by
ceaselessly
established
connections
between
semiotic chains, organizations of power and
circumstances relative to the arts, sciences and
social struggles. Rhizome challenges the known
truth and arrives at a new dimension by using
principles
of
Connections,
Heterogeneity,
Multiplicity, Asignifying Rapture, Cartography and
Decalcomania.
</p>
                     </div>
                    
                 </div>
             </div>
     
     </section>
     <section class="introduction">
     <div class="about-content">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-lg-12">
                         <h3  style="color:red;text-align: justify;text-justify: inter-word;">“Rhizome has no beginning or end; it is always in the middle, between
things, interbeing, intermezzo.”</h3>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- <hr />
     <div class="col-xs-12 col-lg-12" style="display:flex; justify-content:center;">
                         <h3  style="color:red;text-align: justify;text-justify: inter-word;">Our Focus is to Deliver Projects which are</h3>
                     </div>
     <section style="display:flex;justify-content:center;cursor: pointer;">
                  <div class="custom-container-fluid" style="display:flex; justify-content:space-between;">
                  <div id="projects" class="skew">
					<div>
            <a class="circle">
              <p>Organized</p>
            </a>
            <a class="circle">
              <p>Efficient</p>
            </a>
            <a class="circle">
              <p>Innovative</p>
            </a>
            <a class="circle">
              <p>Harmonic</p>
            </a>
            <a class="circle">
              <p>Exceptional</p>
            </a>
          </div>
					
	</div>
                      </div>
              </section> -->
     <section class="team-section">
     <div class="row">
     		  <div class="col-xs-6 col-sm-4">
                     <!-- Grid Box -->
                     <a href="/team" class="grid-box team-grid-link about-orange-overlay">
                         <span>Team</span>
                     </a>
                 </div>

                 <div class="col-xs-6 col-sm-4">
                     <!-- Grid Box -->
                     <a href="/text-projects" class="team-grid-link grid-box about-orange-overlay">
                        <span>Projects</span>
                     </a>
                 </div>

     		  <div class="col-xs-6 col-sm-4">
                     <!-- Grid Box -->
                     <a class="team-grid-link grid-box about-orange-overlay">
                        <span>Clients</span>
                     </a>
                 </div>
             </div>
     </section>

@endsection

