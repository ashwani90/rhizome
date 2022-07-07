@extends('layout')

@section('title', 'Studio Team - Architect')

@section('content')
    @parent
    <section id="breadcrumbs" class="breadcrumbs pt-1" style="padding-bottom:0;margin-bottom:0;">
    <div class="section-title pl-5">
              <p>Team</p>
            </div>
          
        </section>
     <section class="team_structure breadcrumbs container-fluid" style="margin-top:0;padding-top:0;">
       <div class="row">
       @for ($i = 0; $i < count($persons); $i++)
         <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6 team_member " onclick="handleExpander({{$i+1}},{{count($persons)}});">
           <div class="tag-og background-class" id="expander-pa-{{$i+1}}" style="background-position:center;cursor:pointer;background-image: url(/assets/img/team/{{$persons[$i]->img}});">
          <a><img />
          </a> 
          </div>
           <textarea style="display:none;" id="text-{{$i+1}}">{{$persons[$i]->text}}</textarea>
           <textarea style="display:none;" id="name-{{$i+1}}">{{$persons[$i]->name}}</textarea>
           <textarea style="display:none;" id="qualification-{{$i+1}}">{{$persons[$i]->qualification}}</textarea>
           <textarea style="display:none;" id="designation-{{$i+1}}">{{$persons[$i]->designation}}</textarea>
           <div class="og-expander" id="expander-{{$i+1}}" style="transition: height 350ms ease 0s; ">
           </div>
         </div>
         @endfor
</div>
     </section>

    <script>
    function handleExpander(id,total) {
    const width  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (width < 576) {
        myAr = [-1,1,2,3,4,5,6,7,8,9,10];
        } else if (width > 576 && width < 768) {
        myAr = [-1,1,1,1,4,4,4,7,7,7,10];
        } else if (width<992) {
        myAr = [-1,1,1,1,1,5,5,5,5,9,9];
        }else if (width>992) {
        myAr = [-1,1,1,1,1,1,1,7,7,7,7];
        }
        for (i=1;i<=total;i++) {
            var neededDiv = document.getElementById('expander-'+i);
            var otherDiv = document.getElementById('expander-pa-'+i);
            otherDiv.classList.remove('og-expanded');
            neededDiv.innerHTML = '';
        }
        if (id==-1) {
          console.log("Everything cleared");
          return;
        }
        var neededDiv = document.getElementById('expander-'+myAr[id]);
        var otherDiv = document.getElementById('expander-pa-'+id);
        var name = document.getElementById('name-'+id).innerHTML;
        var designation = document.getElementById('designation-'+id).innerHTML;
        var qualification = document.getElementById('qualification-'+id).innerHTML;
        var text = document.getElementById('text-'+id).innerHTML;
        const textAr = text.split("--");
        otherDiv.classList.add('og-expanded');
        var data = `
            <div class="og-expander-inner">
            <div class="og-fullimg">
            <div class="og-loading">
            </div>
            </div>
            <div class="og-details">
            <h3><strong class="color-red-class">${name}</strong>
            ${designation}</h3><h4 class="color-red-class">${qualification}</h4>
            <p>
            `;
            for(let i=0;i<textAr.length;i++) {
              data+= `
              <p>${textAr[i]}</p>
              `;
            }
            data+=`
            </p>
            
            </div>
            </div>
        `;

        neededDiv.innerHTML = (data);

    }

    </script>
@endsection


