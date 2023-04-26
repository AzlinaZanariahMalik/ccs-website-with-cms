<div>
  <h2 class="p-3 web-title animate-text">< About {{ College_info()->website_abbv_name}} /></h2>
             
    <span class="text-justify">{!! Str::limit($homeabout->about, '250') !!}</span>
    <a href="/about-ccs"><p class="card-text"><small class="text-muted">See More</small></p></a>
</div>
