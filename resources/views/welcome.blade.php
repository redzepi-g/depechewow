@extends('layouts.default')

@section('content')

<div class="row"> <!-- main row start -->
    <div class="col-xs-12 col-sm-12 col-lg-9 mx-auto bkg-transparent-black extra-padding-25" id="mainPanel"> <!-- main col start -->

        <div class="text-center"> <!--center image-->
            <img src="{{asset('img/depecheLogo.png')}}" class="img img-fluid" alt="depeche logo"/>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                    @if($guild->recruitment != 0)
                    <div class="float-left bkg-meta-display">
                            <p>We are recruiting.</p>
                    </div>
                    @else
                    <div class="float-left">
                            <p>We are not recruiting.</p>
                    </div>
                    @endif


                    <div class="float-right bkg-meta-display">
                    <p>Total guild characters: {{$guild->members}}</p>
                    </div>
            </div>
        </div>

        <hr class="purple"/>

        <div class="row"> <!-- start of row progress -->

         <div class="d-none d-sm-block col-sm-12 extra-padding-25"> <!-- visibility control -->
            <h3 class="text-center">Mythic Progression</h3>
            <br/>
                <div class="row">
                        @foreach($deadbosses as $killed)

                        @switch($killed)
                            
                            @case(11992)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="garothi">
                                    <h4>Mythic</h4>
                                    <br/>
                                    <h4>Garothi Worldbreaker</h4>
                                </div>
                            @break;
                            
                            @case(11993)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="felhounds">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Felhounds of Sargeras</h4>
                                </div>
                            @break;
                            
                            @case(11994)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="highcommand">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Antoran High Command</h4>
                                </div>
                            @break;
                           
                            @case(11995)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="portal">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Portal Keeper Hasabel</h4>
                                </div>
                            @break;
                          
                            @case(11996)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="eonar">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Defense of Eonar</h4>
                                </div>
                            @break;
                            
                            @case(11997)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="imonar">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Imonar the Soulhunter</h4>
                                </div>
                            @break;
                            
                            @case(11998)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="kingaroth">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Kin'Garoth</h4>
                                </div>
                            @break;
                            
                            @case(11999)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="varimathras">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Varimathras</h4>
                                </div>
                            @break;
                          
                            @case(12000)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="coven">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Coven of Shivarra</h4>
                                </div>
                            @break;
                         
                            @case(12001)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="aggramar">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Aggramar</h4>
                                </div>
                            @break;
                            
                            @case(12002)
                                <div class="col-sm-4 col-lg-2 mx-auto text-center" id="argus">
                                        <h4>Mythic</h4>
                                        <br/>
                                        <h4>Argus the Unmaker</h4>
                                </div>
                            @break;
                        @endswitch
                    @endforeach
                </div>
         </div><!-- end of visibility control -->
            
        </div> <!-- end of row progress-->

        <div class="row"> <!-- about us -->
            <div class="col-xs-12 col-sm-12 col-lg-12 text-center">
                <h3 class="text-center">About us</h3>
                <br/>
                {!!$guild->about!!}


            </div>
        </div> <!-- about us end-->


    
    </div> <!-- main col end -->
</div> <!-- main row end -->

@stop