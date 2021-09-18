@extends('layout')

@section('title', 'Studio Rhizome - Projects')

@section('content')
    @parent
    @include('components.about-us')
     <section class="team_structure container-fluid">
       <div class="row">
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member " onclick="handleExpander(1);">
           <div class="tag-og" id="expander-pa-1">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-1" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(2);">
           <div class="tag-og" id="expander-pa-2">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-2" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(3);">
           <div class="tag-og" id="expander-pa-3">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-3" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(4);">
           <div class="tag-og" id="expander-pa-4">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-4" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(5);">
           <div class="tag-og" id="expander-pa-5">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-5" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(6);">
           <div class="tag-og" id="expander-pa-6">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-6" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(7);">
           <div class="tag-og" id="expander-pa-7">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-7" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(8);">
           <div class="tag-og" id="expander-pa-8">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-8" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(9);">
           <div class="tag-og" id="expander-pa-9">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-9" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member "  onclick="handleExpander(10);">
           <div class="tag-og" id="expander-pa-10">
             <a>
               <img src="/assets/img/blog-author.jpg" class="img-responsive" alt="Ambrish Arora Studio Lotus">
             </a>
           </div>
           <div class="og-expander" id="expander-10" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
       </div>
     </section>

    <script>
    function handleExpander(id) {
    const width  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (width < 576) {
        myAr = [-1,1,1,3,3,5,5,7,7,9,9];
        } else if (width > 576 && width < 768) {
        myAr = [-1,1,1,1,4,4,4,7,7,7,10];
        } else if (width<992) {
        myAr = [-1,1,1,1,1,5,5,5,5,9,9];
        }else if (width>992) {
        myAr = [-1,1,1,1,1,1,1,7,7,7,7];
        }
        for (i=1;i<=10;i++) {
            var neededDiv = document.getElementById('expander-'+i);
            var otherDiv = document.getElementById('expander-pa-'+i);
            otherDiv.classList.remove('og-expanded');
            neededDiv.innerHTML = '';
        }
        var neededDiv = document.getElementById('expander-'+myAr[id]);
        var otherDiv = document.getElementById('expander-pa-'+id);
        otherDiv.classList.add('og-expanded');
        neededDiv.innerHTML = `
            <div class="og-expander-inner">
            <span class="og-close"></span>
            <div class="og-fullimg">
            <div class="og-loading">
            </div>
            </div>
            <div class="og-details">
            <h3><strong class="color-red-class">Tushar Gaur</strong>
            Architect</h3>
            <p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat lectus lacus, a hendrerit arcu laoreet condimentum. Nulla nec rhoncus tellus, at fermentum nunc. Nam massa urna, posuere vitae massa vitae, blandit sodales purus. Sed tristique, dui at pulvinar luctus, sem est posuere urna, ut feugiat tortor tortor quis leo. Cras faucibus maximus imperdiet. Nam diam sem, suscipit lobortis egestas vitae, dignissim at nulla. Mauris vel ex gravida, laoreet eros vitae, accumsan diam. Aenean eu iaculis lectus, id porttitor massa. Nam eu massa faucibus, porta eros at, iaculis ipsum. Mauris feugiat molestie enim, ut tempor sapien iaculis eu. Quisque auctor ipsum non lorem cursus, ac dapibus metus suscipit. Pellentesque non fermentum risus, ut congue magna.

            Duis quis nunc non justo volutpat lobortis. Ut mattis rhoncus efficitur. Cras sodales vitae lorem et volutpat. Cras imperdiet, mauris non blandit vehicula, nisi lorem pharetra leo, eget ultrices velit neque non risus. Duis egestas luctus libero eu molestie. Mauris efficitur lectus quis diam viverra, et suscipit ipsum tristique. Sed pharetra tristique urna ut eleifend.
            </p></p>
            <a href="mailto:someone@someone.com">someone@someone.com</a>
            </div>
            </div>
        `;

    }
    </script>
@endsection


