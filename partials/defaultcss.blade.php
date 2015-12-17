    {{favicon()}}

    {{generate_theme_css('snapshop/assets/css/reset.css')}}  
    {{generate_theme_css('snapshop/assets/css/flexslider.css')}}  
    {{generate_theme_css('snapshop/assets/css/jcarousel_tango.css')}}  
    {{generate_theme_css('snapshop/assets/css/simpletabs.css')}}  
    {{generate_theme_css('snapshop/assets/css/short_codes.css')}}  
    @if($tema->isiCss=='')
    {{generate_theme_css('snapshop/assets/css/base.css')}}  
    
    @else
    {{generate_theme_css('snapshop/assets/css/editbase.css')}}  
    @endif  
    
    {{generate_theme_css('snapshop/assets/css/responsive.css')}}  
    {{generate_theme_css('snapshop/assets/css/bootstrap.min.css')}}  
    {{generate_theme_css('snapshop/assets/css/sosmed.css')}}  
    <link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>