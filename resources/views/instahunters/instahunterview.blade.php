@extends('layouts.InstaHuntershow')
@section('content')
    <!-- Blog -->
    <section class="blog">

        <div class="container">

            <div class="row">

                <div class="col-sm-8">

                    <div class="blog-posts">
                        @foreach ($allData as $data)
                        <!-- Blog Post -->
                        <div class="blog-post">

                            <div class="post-thumb">

                                <a href="#">
                                    <img src="{{$data->img}}" class="img-rounded" />
                                    <span class="hover-zoom"></span>
                                </a>

                            </div>

                            <div class="post-details">

                                <h3>
                                    <a href="#">Post</a>
                                </h3>

                                <div class="post-meta">

                                    <div class="meta-info">
                                        <i class="entypo-calendar"></i> {{$data->date}}</div>

                                    <div class="meta-info">
                                        <i class="entypo-comment"></i>
                                        {{$data->comentarios}}
                                    </div>

                                    <div class="meta-info">
                                        <i class="far fa-thumbs-up"></i>
                                        {{$data->likes}}
                                    </div>


                                </div>

                                <p>{{$data->txt}}</p>

                            </div>

                        </div>
                        @endforeach
                        <!-- Blog Pagination -->
                        <div class="text-center">

                            <ul class="pagination">
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">Next</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

    </section>
        <!-- Footer Widgets -->
    <section class="footer-widgets">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">

                    <a href="#">
                        <img src="assets/images/logo@2x.png" width="100" />
                    </a>

                    <p>
                        Vivamus imperdiet felis consectetur onec eget orci adipiscing nunc. <br />
                        Pellentesque fermentum, ante ac interdum ullamcorper.
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Address</h5>

                    <p>
                        Loop, Inc. <br />
                        795 Park Ave, Suite 120 <br />
                        San Francisco, CA 94107
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Contact</h5>

                    <p>
                        Phone: +1 (52) 2215-251 <br />
                        Fax: +1 (22) 5138-219 <br />
                        info@laborator.al
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Site Footer -->
    <footer class="site-footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    © 2020 Copyright:
                    <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Universitaria de Colombia. </a>

                </div>

                <div class="col-sm-6">

                    <ul class="social-networks text-right">
                        <li>
                            <a href="#">
                                <i class="entypo-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-facebook"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </footer>
    </div>
@endsection
