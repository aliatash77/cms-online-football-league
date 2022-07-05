@extends('client.layout')
@section('content')

    <div class="nk-header-title card-header nk-header-title-sm nk-header-title-parallax nk-header-title-parallax-opacity">
    <div class="bg-image img-profile" >
        <img src="image/image/gold.jpg" alt="" class=" jarallax-img">
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">


{{--                <h1 class="nk-title">خرید و افزایش اعتبار</h1>--}}




            </div>
        </div>
    </div>

    </div>
    <!-- END: Header Title -->





    <div class="container">
        <div class="nk-gap-4"></div>

        <!-- START: Posts List -->
        <div class="nk-blog-grid-3">


            <!-- START: Post -->
            @foreach($tickets as $ticket)
            <div class="nk-blog-post">
                <div class="nk-post-thumb">

                    <div class="nk-post-type"><span class="ion-image"></span></div>

                    <a href="news-single-image.html">
                        <img src="{{$ticket->image}}" alt="P4cup" class="nk-img-stretch">
                    </a>
                </div>
                <div class="nk-post-content">
                    <h2 class="nk-post-title h4">
                        <a href="#">{{number_format($ticket->price)}} تومان </a>
                    </h2>
{{--                    <div class="nk-post-date">--}}
{{--                        {{$ticket->created_at}}--}}
{{--                    </div>--}}
                    <div class="nk-post-text">
                        <form action="{{route('buyTicket',['value'=>$ticket->value,'id'=>Auth::user()->id])}}" method="get">
                            <button class="btn btn-block btn-circle btn-primary">خرید تیکت</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- END: Post -->


        </div>

        <!-- START: Pagination -->

        <!-- END: Pagination -->

        <!-- END: Posts List -->

        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>


@endsection
