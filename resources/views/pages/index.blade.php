@extends('layouts.public')
@section('slider')
<div class="slider-container rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on'}">
        <ul>
            <li data-transition="fade">
                <img src="img/slides/slide-bg.jpg"  
                alt=""
                data-bgposition="center center" 
                data-bgfit="cover" 
                data-bgrepeat="no-repeat" 
                class="rev-slidebg">
                
                <div class="tp-caption"
                data-x="177"
                data-y="188"
                data-start="1000"
                data-transform_in="x:[-300%];opacity:0;s:500;"><img src="{{ asset('img/slides/slide-title-border.png') }}" alt=""></div>
                
                <div class="tp-caption top-label"
                data-x="227"
                data-y="180"
                data-start="500"
                data-transform_in="y:[-300%];opacity:0;s:500;">POTRZEBUJESZ NOWEJ</div>
                
                <div class="tp-caption"
                data-x="485"
                data-y="188"
                data-start="1000"
                data-transform_in="x:[300%];opacity:0;s:500;"><img src="{{ asset('img/slides/slide-title-border.png') }}" alt=""></div>
                
                <div class="tp-caption main-label"
                data-x="135"
                data-y="210"
                data-start="1500"
                data-whitespace="nowrap"                         
                data-transform_in="y:[100%];s:500;"
                data-transform_out="opacity:0;s:500;"
                data-mask_in="x:0px;y:0px;">STRONY WWW?</div>
                
                <div class="tp-caption bottom-label"
                data-x="185"
                data-y="280"
                data-start="2000"
                data-transform_in ="y:[100%];opacity:0;s:500;">Sprawdź nasz ofertę</div>
                
                <div class="tp-caption"
                data-x="910"
                data-y="248"
                data-start="2500"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="{{ asset('img/slides/slide-concept-2-1.png') }}" alt=""></div>
                
                <div class="tp-caption"
                data-x="960"
                data-y="200"
                data-start="3500"
                data-transform_in="y:[300%];opacity:0;s:300;"><img src="{{ asset('img/slides/slide-concept-2-2.png') }}" alt=""></div>
                
                <div class="tp-caption"
                data-x="930"
                data-y="170"
                data-start="3650"
                data-transform_in="y:[300%];opacity:0;s:300;"><img src="{{ asset('img/slides/slide-concept-2-3.png') }}" alt=""></div>
                
                <div class="tp-caption"
                data-x="880"
                data-y="130"
                data-start="3750"
                data-transform_in="y:[300%];opacity:0;s:300;"><img src="{{ asset('img/slides/slide-concept-2-4.png') }}" alt=""></div>
                
                <div class="tp-caption"
                data-x="610"
                data-y="50"
                data-start="3950"
                data-transform_in="y:[300%];opacity:0;s:300;"><img src="{{ asset('img/slides/slide-concept-2-5.png') }}" alt=""></div>
                
                <div class="tp-caption blackboard-text"
                data-x="640"
                data-y="300"
                data-start="3950"
                style="font-size: 37px;"
                data-transform_in="y:[300%];opacity:0;s:300;">Nieszablonowe</div>
                
                <div class="tp-caption blackboard-text"
                data-x="665"
                data-y="350"
                data-start="4150"
                style="font-size: 47px;"
                data-transform_in ="y:[300%];opacity:0;s:300;">rozwizania :)</div>
                
            </li>
            <li data-transition="fade">
                <img src="img/slides/slide-bg.jpg"  
                alt=""
                data-bgposition="center center" 
                data-bgfit="cover" 
                data-bgrepeat="no-repeat" 
                class="rev-slidebg" data-no-retina>
                
                <div class="tp-caption top-label"
                data-x="155"
                data-y="100"
                data-start="500"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"><img src="{{ asset('img/slides/slide-concept.png') }}" alt=""></div>
                
                <div class="tp-caption blackboard-text"
                data-x="285"
                data-y="180"
                data-start="1000"
                style="font-size: 20px;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">Stworzymy projekt</div>
                
                <div class="tp-caption blackboard-text"
                data-x="285"
                data-y="220"
                data-start="1200"
                style="font-size: 20px;"
                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">według Twoich oczekiwań!</div>
                
                <div class="tp-caption main-label"
                data-x="685"
                data-y="190"
                data-start="1800"
                data-whitespace="nowrap"                         
                data-transform_in="y:[100%];s:500;"
                data-transform_out="opacity:0;s:500;"
                data-mask_in ="x:0px;y:0px;">Sprawdź nasz ofertę</div>
                
            </li> 
        </ul>
    </div>
</div>
@endsection
@section('content')
<section class="section section-default section-no-border mt-none">
    <div class="container">
        <div class="row mb-xl">
            <div class="col-md-7">
                <h2 class="mt-xl mb-none">Kim jesteśmy</h2>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>
                <p class ="mt-lg"><strong>Beziworld.eu</strong> to grupa młodych, kreatywnych, która oferuje kompleksowe usługi IT. Projektujemy strony internetowe, tworzymy wizytówki, plakaty, prowadzimy kampanie reklamowe oraz wiele więcej. Każdego klienta traktujemy indywidualnie przez co każda nasza realizacja jest wyjątkowa. Masz wątpliwości? Napisz do nas!</p>

                <a class="mt-md" href="{{ url('/o-nas')}}">Czytaj więcej <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h4 class="mt-xl mb-none">Dołącz do nas</h4>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>
                <p class ="mt-lg">Liczba klientów stale rośnie dlatego chętnie podejmiemy dłuższ współpracę z grafikami, Front-End / Back-End developerami, Copywriterami.</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-sm word-rotator-title">
                    Nasza <strong>Oferta</strong>
                </h2>
                <p class="lead">
                    Zapoznaj się z naszą ofertą
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-none">Strony internetowe</h4>
                                <p class="tall">Tworzymy nowoczesne, responsywne i przedewszystkim użyteczne strony 
                                internetowe, dostosowane do indywidalnych potrzeb klienta</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="fa fa-tag"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-none">SEO</h4>
                                <p class="tall">Optymalizujemy, prowadzimy audyty stron pod kątem wyszukiwarek intenrnetowych ułatwiając ich odnalezienie w 
                                    <span class="alternative-font">internecie</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-paint-brush"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none">Grafika reklamowa</h4>
                                    <p class="tall">Ulotki, plakaty, banery, wizytówki, papier firmowy, koperty i wiele więcej. Tworzymy wszystko według sugestii klienta uzyskując pełne zadowolenie</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none">Sklepy internetowe</h4>
                                    <p class="tall">Towrzymy profesionalne i zarazem funkcjonalne sklepy interntowe dostosowane do potrzeb klientów</p>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-none">Marketing internetowy </h4>
                                    <p class="tall">Proponujemy wszelaką formę reklamy internetowej dostosowanej do  
                                        <span class="alternative-font">Państwa</span> wymagań</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-none">Inne</h4>
                                        <p class="tall">Nie znalazłeś tego czego szukasz ? <strong>Napisz do nas</strong>!</p>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <section>
            <div class="container">
                <div class="row center"> 
                    <div class="col-md-12">
                        <h2 class="mb-none word-rotator-title mt-xl">
                            Nasze <strong>Portfolio</strong>
                        </h2>
                        <p class="lead mb-xl">
                            Sprawdź nasze zrealizowane projekty
                        </p>
                    </div>
                </div>
            </div>
            <ul class="image-gallery sort-destination full-width mb-none">
<<<<<<< HEAD
                @foreach($portfolios as $portfolio)
=======
>>>>>>> master
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
<<<<<<< HEAD
                                    <img src="/uploads/projects/miniature/{{ $portfolio->miniature }}" class="img-responsive" alt="{{ $portfolio->name }}">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $portfolio->name }}</span>
=======
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
                <li class="isotope-item">
                    <div class="image-gallery-item mb-none">
                        <a href="portfolio-single-small-slider.html">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Project Title</span>
>>>>>>> master
                                        <span class="thumb-info-type">Project Type</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>
<<<<<<< HEAD
                @endforeach
=======
>>>>>>> master
            </ul>
            <div class="container">
                <div class="row center"> 
                    <div class="col-md-12">
                        <a class="btn btn-primary mt-md mb-sm">Zobacz więcej</a>
                    </div>
                </div>
            </div>
        </section>  
        <section class="section section-default section-no-border mt-none">
            <div class="container">
                <div class="row center">
                    <div class="col-md-12">
                        <h2 class="mb-sm word-rotator-title">
                            Nasi <strong>Klienci</strong>
                        </h2>
                        <p class="lead">
                         Poznaj firmy, z którymi współpracujemy
                     </p>
                 </div>
             </div>
             <div class="row center mt-xl">
                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>

                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>

                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>

                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>

                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>

                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>

                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    @endsection