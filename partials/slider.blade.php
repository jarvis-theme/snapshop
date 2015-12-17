<div id="banner_section">
    <div class="flexslider">
        <ul class="slides">
            @foreach(slideshow() as $slide)
            <li>
                @if($slide->text == '')
                <a href="#">
                @else
                <a href="{{filter_link_url($slide->text)}}" target="_blank">
                @endif
                    <img class="gbr-slide" src="{{ slide_image_url($slide->gambar) }}" alt="Slide" />
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
