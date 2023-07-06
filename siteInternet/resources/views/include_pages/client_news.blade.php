<section class="blog" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <!-- section title -->
            <div class="col-xl-6 col-lg-8">
                <div class="title text-center ">
                    <h2>Les dernières <span class="color">Publications</span></h2>
                    <div class="border"></div>
                    <p>Soyez au courant de l'évolution de Kim Engineering et n'hésitez pas à nous contacter pour solliciter nos services.</p>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class="row">
            @foreach ($nouvelles as $nouvelle)
                <!-- single blog post -->
                <article class="col-lg-4 col-md-6">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img loading="lazy" src="{{ asset('storage/nouvelle_images/' . $nouvelle->nouvelle_image, env('REDIRECT_HTTPS')) }}" alt="amazing caves coverimage"
                                class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="single-post.html">{{$nouvelle->nouvelle_titre}}</a></h3>
                            <p>{{$nouvelle->sujet}}</p>
                            <a class="btn btn-main" href="{{url('/single_new',$nouvelle->id)}}">En savoir plus</a>
                        </div>
                    </div>
                </article>
                <!-- /single blog post -->
            @endforeach
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->
