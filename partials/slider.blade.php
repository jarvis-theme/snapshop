<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach(slideshow() as $slide)
            <li>
                @if(!empty($slide->url))
                <a href="{{filter_link_url($slide->url)}}" target="_blank">
                @else
                <a href="#">
                @endif
                    <img class="gbr-slide" src="{{ slide_image_url($slide->gambar) }}" alt="Slide" />
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
