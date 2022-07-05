@extends('client.layout')
@section('content')



    <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity nk-header-title-boxed">
        <div class="bg-image op-5">
            <img src="{{asset('assets/images/post-1.jpg')}}" alt="" class="jarallax-img">
        </div>
    </div>

    <div class="nk-header-table ">
        <div class="nk-header-table-cell">
            <div class="container">

                <div class="nk-header-text">

                    <div class="row text-left">
                        <div class="col-lg-8">
                            <div class="nk-gap-5 d-none + d-lg-block"></div>
                            <h1 style="text-align: right" class="nk-title">{{$posts->name}}</h1>
                            <div class="nk-gap-3 d-none + d-lg-block"></div>
                            <div class="nk-gap-5 d-none + d-lg-block"></div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="nk-sidebar nk-sidebar-right">
                                <div class="nk-gap-5 d-none + d-lg-block"></div>
                                <div class="nk-gap d-lg-none"></div>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><strong>تاریخ ساخت</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td>{{$posts->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>دسته‌بندی</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td><a href="#">{{$postCategory->name}}</a></td>
                                    </tr>
{{--                                    <tr>--}}
{{--                                        <td><strong>Written by:</strong> &nbsp;&nbsp;&nbsp;</td>--}}
{{--                                        <td><a href="#">nK</a></td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Views:</strong> &nbsp;&nbsp;&nbsp;</td>--}}
{{--                                        <td>589</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Comments:</strong> &nbsp;&nbsp;&nbsp;</td>--}}
{{--                                        <td>4</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Likes:</strong> &nbsp;&nbsp;</td>--}}
{{--                                        <td>--}}
{{--                            <span class="nk-action-heart">--}}
{{--                                <span class="num">17</span>--}}
{{--                                <span class="like-icon ion-android-favorite-outline"></span>--}}
{{--                                <span class="liked-icon ion-android-favorite"></span>--}}
{{--                            </span>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
                                    </tbody>
                                </table>
                                <div class="nk-gap-5 d-lg-none"></div>
                            </aside>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- END: Header Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nk-blog-container nk-blog-container-offset">
                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">
                        <img class="nk-img-stretch" src="{{$posts->image}}" alt="{{$posts->name}}">

                        <!-- START: Post Text -->
                        <div class="nk-post-text mt-0">
                            <p>{{html_entity_decode($posts->description)}}</p>
                            <!-- START: Post Meta -->
{{--                            <div class="nk-post-tags">--}}
{{--                                Tags: &nbsp;--}}
{{--                                <a href="#">Image</a>--}}
{{--                                <a href="#">Demonstrate</a>--}}
{{--                                <a href="#">Tags</a>--}}
{{--                            </div>--}}
                            <!-- END: Post Meta -->
                        </div>
                        <!-- END: Post Text -->

                        <!-- START: Post Author -->

                        <!-- END: Post Author -->


                        <!-- START: Comments -->
{{--                        <div class="nk-comments" id="comments">--}}
{{--                            <h3 class="nk-title h4 text-center">4 Comments</h3>--}}
{{--                            <div class="nk-gap-2"></div>--}}

{{--                            <!-- START: Comment -->--}}
{{--                            <div class="nk-comment">--}}
{{--                                <div class="nk-comment-avatar">--}}
{{--                                    <a href="#"><img src="assets/images/avatar-2.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="nk-comment-meta">--}}
{{--                                    <div class="nk-comment-name h5"><a href="#">Kurt Tucker</a></div>--}}
{{--                                    <div class="nk-comment-date">20 September, 2017</div>--}}
{{--                                </div>--}}
{{--                                <p>Of. Lesser it good moved tree under living male under day The evening. Waters creeping gathered give also grass beginning.</p>--}}
{{--                                <div class="text-right">--}}
{{--            <span class="nk-action-heart liked">--}}
{{--                <span class="like-icon ion-android-favorite-outline"></span>--}}
{{--                <span class="liked-icon ion-android-favorite"></span>--}}
{{--                <span class="num">14</span>--}}
{{--            </span>--}}
{{--                                    <div class="nk-comment-reply"><a href="#"><i class="ion-reply"></i> Reply</a></div>--}}
{{--                                </div>--}}

{{--                                <!-- START: Comment -->--}}
{{--                                <div class="nk-comment">--}}
{{--                                    <div class="nk-comment-avatar">--}}
{{--                                        <a href="#"><img src="assets/images/avatar-1.jpg" alt=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="nk-comment-meta">--}}
{{--                                        <div class="nk-comment-name h5"><a href="#">Lesa Cruz</a></div>--}}
{{--                                        <div class="nk-comment-date">20 September, 2017</div>--}}
{{--                                    </div>--}}
{{--                                    <p>Fourth give grass creature. Whose fowl. His which male which yielding fly won't creature after beast male. Itself. Life heaven whales over given fly whales lesser, day winged one after.</p>--}}
{{--                                    <div class="text-right">--}}
{{--                <span class="nk-action-heart">--}}
{{--                    <span class="like-icon ion-android-favorite-outline"></span>--}}
{{--                    <span class="liked-icon ion-android-favorite"></span>--}}
{{--                    <span class="num">3</span>--}}
{{--                </span>--}}
{{--                                        <div class="nk-comment-reply"><a href="#"><i class="ion-reply"></i> Reply</a></div>--}}
{{--                                    </div>--}}

{{--                                    <!-- START: Comment -->--}}
{{--                                    <div class="nk-comment">--}}
{{--                                        <div class="nk-comment-avatar">--}}
{{--                                            <a href="#"><img src="assets/images/avatar-3.jpg" alt=""></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="nk-comment-meta">--}}
{{--                                            <div class="nk-comment-name h5"><a href="#">Katie Anderson</a></div>--}}
{{--                                            <div class="nk-comment-date">21 September, 2017</div>--}}
{{--                                        </div>--}}
{{--                                        <p>Given signs fifth female air and second face earth one is. Whose greater behold had after he whales forth cattle Thing said kind after his.</p>--}}
{{--                                        <p>Male upon thing had us hath doesn't great male fifth us. Every whales own given open upon divided life i which blessed subdue moving give.</p>--}}
{{--                                        <div class="text-right">--}}
{{--                    <span class="nk-action-heart">--}}
{{--                        <span class="like-icon ion-android-favorite-outline"></span>--}}
{{--                        <span class="liked-icon ion-android-favorite"></span>--}}
{{--                        <span class="num">0</span>--}}
{{--                    </span>--}}
{{--                                            <div class="nk-comment-reply"><a href="#"><i class="ion-reply"></i> Reply</a></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- END: Comment -->--}}
{{--                                </div>--}}
{{--                                <!-- END: Comment -->--}}
{{--                            </div>--}}
{{--                            <!-- END: Comment -->--}}

{{--                            <!-- START: Comment -->--}}
{{--                            <div class="nk-comment">--}}
{{--                                <div class="nk-comment-avatar">--}}
{{--                                    <a href="#"><img src="assets/images/avatar-4.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="nk-comment-meta">--}}
{{--                                    <div class="nk-comment-name h5"><a href="#">Luke Fuller</a></div>--}}
{{--                                    <div class="nk-comment-date">21 September, 2017</div>--}}
{{--                                </div>--}}
{{--                                <p>To set. Lights likeness after, stars void in doesn't subdue.</p>--}}
{{--                                <div class="text-right">--}}
{{--            <span class="nk-action-heart liked">--}}
{{--                <span class="like-icon ion-android-favorite-outline"></span>--}}
{{--                <span class="liked-icon ion-android-favorite"></span>--}}
{{--                <span class="num">1</span>--}}
{{--            </span>--}}
{{--                                    <div class="nk-comment-reply"><a href="#"><i class="ion-reply"></i> Reply</a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- END: Comment -->--}}


{{--                            <!-- START: Reply -->--}}
{{--                            <div class="nk-reply">--}}
{{--                                <h3 class="nk-title h4 text-center">Post your comment</h3>--}}
{{--                                <div class="nk-gap-2"></div>--}}
{{--                                <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">--}}
{{--                                    <div class="row vertical-gap">--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <input type="email" class="form-control required" name="email" placeholder="Email *">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <input type="text" class="form-control required" name="name" placeholder="Name *">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <input type="text" class="form-control" name="name" placeholder="Website">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="nk-gap-1"></div>--}}
{{--                                    <textarea class="form-control required" name="message" rows="5" placeholder="Message *" aria-required="true"></textarea>--}}
{{--                                    <div class="nk-gap-1"></div>--}}
{{--                                    <div class="nk-form-response-success"></div>--}}
{{--                                    <div class="nk-form-response-error"></div>--}}
{{--                                    <button class="nk-btn nk-btn-lg link-effect-4">Post comment</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <!-- END: Reply -->--}}
{{--                        </div>--}}
                        <!-- END: Comments -->

                    </div>
                    <!-- END: Post -->

                    <div class="nk-gap-4"></div>
                </div>
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


{{--                    <div class="nk-widget">--}}
{{--                        <h4 class="nk-widget-title">آخرین اخبار</h4>--}}
{{--                        <div>--}}
{{--                            @foreach($posts as $post)--}}
{{--                                <div class="nk-widget-post">--}}
{{--                                    <a href="#" class="nk-image-box-1 nk-post-image">--}}
{{--                                        <img src="{{$post->image}}" alt="{{$post->name}}">--}}
{{--                                    </a>--}}
{{--                                    <h3 class="nk-post-title"><a href="{{route('news',$post->id)}}">{{$post->name}}</a></h3>--}}
{{--                                    <div class="nk-post-meta-date">September 18, 2016</div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="nk-widget">--}}
{{--                        <h4 class="nk-widget-title">Tags</h4>--}}
{{--                        <div>--}}
{{--                            <div class="nk-widget-tags">--}}
{{--                                <a href="#">Creative</a>--}}
{{--                                <a href="#">Responsive</a>--}}
{{--                                <a href="#">Design</a>--}}
{{--                                <a href="#">Bootstrap</a>--}}
{{--                                <a href="#">Multi-Concept</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="nk-widget">
                        <h4 class="nk-widget-title">Twitter</h4>
                        <div>
                            <div class="nk-twitter-list" data-twitter-count="2"></div>
                        </div>
                    </div>
                    <div class="nk-gap-4"></div>

                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>


@endsection



