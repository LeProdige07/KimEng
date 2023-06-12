<footer id="footer" class="bg-one">
    <div class="top-footer">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <h3>A Propos de Nous</h3>
                    <p><b>Kim Engineering</b> est une entreprise qui oeuvre dans la conception électronique, Internet des objets,le Web, la domotique, Robotique, Installation électrique des batiments et installation Photovoltaique.</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <ul>
                        <li>
                            <h3>Nos Services</h3>
                        </li>
                        @foreach ($services as $service)
                            <li><a href="{{url('/services_us')}}">{{$service->service_name}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <ul>
                        <li>
                            <h3>Menu</h3>
                        </li>
                        <li><a href="{{url('/about')}}">A propos de nous</a></li>
                        <li><a href="{{url('/services_us')}}">Nos services</a></li>
                        <li><a href="{{url('/projets_us')}}">Nos projets</a></li>
                        <li><a href="{{url('/formations_us')}}">Nos formations</a></li>
                        <li><a href="{{url('/team')}}">Equipe</a></li>
                        <li><a href="{{url('/logette')}}">Logette Intelligente</a></li>
                        <li><a href="{{url('/news')}}">News</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-lg-3 col-md-6">
                    <ul>
                        <li>
                            <h3>Suivez-nous sur les réseaux</h3>
                        </li>
                        <li><a href="https://www.facebook.com/profile.php?id=100082984827940&mibextid=LQQJ4d">Facebook</a></li>
                        <li><a href="https://twitter.com/engineering_kim?t=Ahg4HqWWEsDcU75v85SEIQ&s=03">Twitter</a></li>
                        <li><a href="https://www.linkedin.com/in/kim-engineering-b6b45a264">LinkedIn</a></li>
                        <li><a href="https://www.instagram.com/kim_engineering/?igshid=OGQ5ZDc2ODk2ZA==">Instagram</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
        <h5>&copy;Copyright {{ date('Y') }}. All rights reserved.</h5>
        <h6>Design and Developed by <a href="{{url('/')}}">Kim Engineering</a></h6>
    </div>
</footer> <!-- end footer -->
