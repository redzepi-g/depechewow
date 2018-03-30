@extends('layouts.default')

@section('content')

<div class="row"><!-- second row start -->
    <div class="col-xs-12 col-sm-12 col-lg-12 mx-auto extra-padding-25" id="mainContent"><!-- main content start -->
        <h3 class="text-center">Home</h3>

        <div class="row extra-padding-25">
            
            <div class="col-xs-12 col-sm-12 col-lg-6 mx-auto text-center">
                <h4>Casuals in &lt;Depeche&gt;</h4>
                <hr/>
                <p>It is important to understand that not everyone has a place under our name.
                    We have a very active and social core of players in our guild, but we don't
                    go around chasing people to throw invites. The casual aspect of our guild is 
                    maintained by friends of our raiders and/or old friends of the guild. New recruits
                    that don't manage to settle in with the roster are removed without warning.
                </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-6 mx-auto text-center">
                <h4>&lt;Depeche&gt; and Mythic</h4>
                <hr/>
                <p>Our end-game mode is Mythic. We strive to maintain a stable
                    roster that is available for raiding 3 days a week.
                    During those raid times, we always push ourselves to the
                    maximum and play at the highest level there is in end-game
                    progression. We have a more 'relaxed' approach when it comes
                    to progressing, but that only extends as far as your reliability 
                    to the guild progression.
                </p>
            </div>

        </div>
    </div><!-- main content end -->
</div><!-- end of second row -->

<div class="row"><!-- progress row -->

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto extra-padding-25" id="guildProgression"> <!-- col start -->
        <h3 class="text-center">Guild Progression</h3>
        <hr style="one"/>
        <div class="row"> <!-- sub row -->
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 text-center"> <!-- tier 19 -->
                <h3>Tier 19</h3>

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/raids/en.jpg')}}" id="test" alt="Emerald nightmare image">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Emerald Nightmare</h5>
                            <p>7/7 HC</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/raids/tov.jpg')}}" alt="Trial of valor image">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Trial of Valor</h5>
                            <p>3/3 HC</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/raids/nh.jpg')}}" alt="The nighthold image">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>The Nighthold</h5>
                            <p>3/10 Mythic</p>
                          </div>
                      </div>
                    </div>
                  </div>

            </div> <!-- tier 19 end -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 text-center"> <!-- tier 20 -->
                <h3>Tier 20</h3>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/raids/tos.jpg')}}" alt="Tomb of Sargeras image">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tomb of Sargeras</h5>
                            <p>5/9 Mythic</p>
                          </div>
                      </div>

                  </div>
            </div> 
        </div><!-- tier 20 end -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 text-center"> <!-- tier 19 -->
                <h3>Tier 21</h3>

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/raids/antorus.jpg')}}" alt="Antorus the burning throne image">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Antorus, the Burning Throne</h5>
                            <p>6/11 Mythic</p>
                          </div>
                      </div>

                  </div>
                
            </div> <!-- tier 19 end -->

        </div> <!-- sub row end -->
        
    </div> <!-- col end -->

    <p class="text-center text-muted">*displaying only best progress achieved before the release of new tier</p>
</div><!-- progress row end -->
@stop