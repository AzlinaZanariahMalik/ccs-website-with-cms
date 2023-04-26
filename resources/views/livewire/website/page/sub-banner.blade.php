@push('styles')
<style>
    .parallax_bg{
       align-items: center;
       justify-content:center;
    }
</style>
@endpush
<div>
    <div class="parallax_bg center-block img-responsive"> <img src="{{ url('storage/photos/logo-icon/'. $banner->website_banner)}}"></div> 
</div>
