@extends('client.layout')
@section('content')


    <div class="nk-header-title nk-header-title-sm nk-header-title-parallax nk-header-title-parallax-opacity">
        <div class="bg-image">
            <img src="assets/images/image-1.jpg" alt="" class="jarallax-img">
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">


                    <h1 class="nk-title">Blog Classic</h1>




                </div>
            </div>
        </div>

    </div>
    <!-- END: Header Title -->





    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nk-gap-4"></div>

                <!-- START: Posts List -->
                <div class="nk-blog-list-classic">


                    <!-- START: Post -->
                    @foreach($posts as $post)

                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">

                            <div class="nk-post-type"><span class="ion-image"></span></div>

                            <div class="nk-post-category">
                                <a href="#">News</a>
                            </div>
                            <a href="news-single-image.html">
                                <img src="{{$post->image}}" alt="" class="nk-img-stretch">
                            </a>
                        </div>
                        <div class="nk-post-content">
                            <h2 class="nk-post-title h3">
                                <a href="{{route('news',$post->id)}}">{{$post->name}}</a>
                            </h2>
                            <div class="nk-post-date">
                                September 18, 2016
                            </div>
                            <div class="nk-post-text">
                            <p>{{ $post->shortd }}</p>
                            </div>
                            <a href="{{route('news',$post->id)}}" class="nk-btn link-effect-4">ادامه مطلب</a>
                        </div>
                    </div>

                    @endforeach
                    <!-- END: Post -->



                    <!-- START: Pagination -->
                    <div class="nk-pagination nk-pagination-left">
                        <a href="#" class="nk-pagination-prev">
                            <span class="nk-icon-arrow-left"></span>
                        </a>
                        <nav>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a class="nk-pagination-current-white" href="#">3</a>
                            <span>...</span>
                            <a href="#">14</a>
                        </nav>
                        <a href="#" class="nk-pagination-next">
                            <span class="nk-icon-arrow-right"></span>
                        </a>
                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- END: Posts List -->

                <div class="nk-gap-4"></div>
            </div>
            <div class="col-lg-4">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                    <div class="nk-gap-4"></div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">جست‌و‌جو</h4>
                        <div>
                            <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="جست‌وجو‌ خبر...">
                                    <button class="nk-btn nk-btn-lg link-effect-4"><span class="ion-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="nk-widget">
                        <h4 class="nk-widget-title">دسته بندی اخبار</h4>
                        <div>
                            <ul class="nk-widget-categories">
                                @foreach($categories as $category)
                                    @if($category->children()->count() == 0)
                                        <li>
                                            <a href="#">{{$category->name}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="nk-widget">
                        <h4 class="nk-widget-title">آخرین اخبار</h4>
                        <div>
                            @foreach($posts as $post)
                            <div class="nk-widget-post">
                                <a href="#" class="nk-image-box-1 nk-post-image">
                                    <img src="{{$post->image}}" alt="{{$post->name}}">
                                </a>
                                <h3 class="nk-post-title"><a href="{{route('news',$post->id)}}">{{$post->name}}</a></h3>
                                <div class="nk-post-meta-date">September 18, 2016</div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Instagram</h4>
                        <div>
                            <div class="nk-instagram row sm-gap vertical-gap"></div>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Our Twitter</h4>
                        <div>
                            <div class="nk-twitter-list" data-twitter-count="2"></div>
                        </div>
                    </div>
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Facebook</h4>
                        <div>
                            <div class="fb-page" data-href="http://www.facebook.com/kinfolkmag" data-width="700" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
                        </div>
                    </div>
                    <div class="nk-gap-4"></div>

                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>

    <div class="nk-gap-3"></div>



@endsection
