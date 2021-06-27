<div class="tp-banner-container" id="slider" style="margin-top:65px!important">
  <div class="tp-banner" >
    <ul> 
      @if (count((array)$slider)>0)
      @foreach ($slider as $sliderdata)
      <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on">
        <img alt="{{$sliderdata->title}}" src="{{URL::to('frontend')}}/images/dummy.png" data-lazyload="{{URL::to('')}}/uploads/slider/{{$sliderdata->image_link}}">

        <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000">{{$sliderdata->title}}</div>

        <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600">{{$sliderdata->caption}}</div>

        <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="400" data-speed="600" data-start="2200"><a href="{{$sliderdata->route}}" class="section-btn">Get Started</a></div>
      </li>
      @endforeach
      @endif  

    </ul>
  </div>
</div>