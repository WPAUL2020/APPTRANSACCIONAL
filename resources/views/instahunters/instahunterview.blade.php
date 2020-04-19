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

                    <a href="https://universitariadecolombia.edu.co">
                        <img src="{{ asset('blogFrontend/assets/images/logo1.png') }}" width="120"/>
                    </a>

                    <p>
                        Institución educativa <br />
                        Universitaria de Colombia.
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Sede Administrativa:</h5>
                    <p>
                        Carrera 7 No. 35-85 <br />
                        Bogotá, COL
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Contactenos</h5>

                    <p>
                        Teléfono: +57 (1) 288 – 0871 <br />
                        Teléfono: +57 (1) 232 – 4070 <br />
                        inscripciones@universitariadecolombia.edu.co
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
