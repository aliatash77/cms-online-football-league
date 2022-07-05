@extends('client.layout')
@section('content')

    <div class="container">
        <div class="nk-gap-4"></div>

        <!-- START: Gallery List -->
        @foreach($events as $event)
            <div class="nk-popup-gallery">
                <div class="nk-gallery-item-box bg-dark-4" data-mouse-parallax-z="5" data-mouse-parallax-speed="1">
                    <a href="{{$event->image}}" class="nk-gallery-item" data-size="1920x1640">
                        <h3 class="text-center ">{{$event->cupName}}</h3>
                        <h4 class="text-center">  جایزه نفر اول : {{$event->fPrize}} تیکت </h4>
                        <h5 class="text-center">  جایزه نفر دوم : {{$event->sPrize}} تیکت </h5>
                        <img src="{{$event->image}}" alt="{{$event->cupName}}">
                    </a>
                    <div class="photoswipe-description ">
                        <h5 class="alert alert-dark text-center">{{$event->cupName}}<br>ورودی :  {{$event->entryFee}} تیکت </h5>
                        <p class="bg-success alert alert-dark text-right" >{{strip_tags($event->gameDescription)}}</p>
                        <form action="{{route('Grouping',['id'=>$event->id,'userId'=>Auth::user()->id])}}">
                            <button class="btn btn-primary btn-block">ورود به رویداد</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Gallery List -->

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center" data-mouse-parallax-z="3">
            <a href="#" class="nk-btn nk-btn-lg nk-btn-circle">Load More ...</a>
        </div>
        <!-- END: Pagination -->

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>

    </div>

@endsection