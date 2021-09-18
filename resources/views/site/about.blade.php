@extends('layout')

@section('title', 'Studio Rhizome - Projects')

@section('content')
    @parent
     <section class="breadcrumbs">
     <div class="about-us-section">
             <div class="slide-section">
                    <h3>about us </h3>
                     <p>We are an award-winning interdisciplinary design practice that believes in delivering enriching design solutions
                     through a value–driven process empowering all stakeholders and the environment.<p>
             </div>

     </div>
     </section>
     <section class="introduction">
     <div class="about-content">
             <div class="container">
                 <div class="row">
                     <div class="col-xs-12 col-lg-12">
                         <h1>creating meaning, celebrating context</h1>
                     </div>
                     <div class="col-xs-12 col-sm-6">
                         <p><em></em>Founded in 2002 by Ambrish Arora, Ankur Choksi and Sidhartha Talwar, Studio Lotus is acknowledged as a thought leader in the country for its work in the domain of Architecture and Spatial Design.
                             <br><br>
                             Our work is grounded on the principles of Conscious design, an approach that celebrates local resources, cultural influences, a keen attention to detail and an inclusive process. We follow an iterative and incremental methodology of innovation and root our learning in history and local context. We aim to craft benchmark solutions that address society changing ways of living and working.</p>
                     </div>
                     <div class="col-xs-12 col-sm-6">
                         <p>We explore ways to engage the user, the way they move through the space. We like taking design to an extremely conceptual stage. We find inspiration in ordinary things, everyday events and chance encounters.
                             <br><br>
                             The firm takes a deeply contextual approach to its work and combines this with a strong focus on the tactile and sensory qualities of the space. Our design process looks at sustainability through the multiple lenses of cultural, social and environmental impact. There is an active engagement in integrating localised skills and resources with state-of-the art materials and technologies. </p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="team-section">
     <div class="row">
     		  <div class="col-xs-6 col-sm-4">
                     <!-- Grid Box -->
                     <a href="/team" class="grid-box team-grid-link about-orange-overlay">
                         <span>Clients</span>
                     </a>
                 </div>

                 <div class="col-xs-6 col-sm-4">
                     <!-- Grid Box -->
                     <a href="/" class="team-grid-link grid-box about-orange-overlay">
                        <span>Team</span>
                     </a>
                 </div>

     		  <div class="col-xs-6 col-sm-4">
                     <!-- Grid Box -->
                     <a href="/" class="team-grid-link grid-box about-orange-overlay">
                        <span>Core</span>
                     </a>
                 </div>
             </div>
     </section>

@endsection

