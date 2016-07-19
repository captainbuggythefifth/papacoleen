@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
<!--            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>-->
        <div class="welcome-message-container">

        </div>
        <div class="welcome-message">
           <span class="welcome-span welcome-span-first">We just don't create just good designs for events, </span> <br/>
           <span class="welcome-span welcome-span-second">WE MAKE GREAT MEMORIES!</span>
        </div>
            
        </div>
    </div>
    
</div>
<div class="memories-container container-fluid">
    <div class="col-md-12" style="margin-top: 50px; text-align: center">
        <span class="welcome-span welcome-span-first" style="color:palevioletred; font-weight: 300">When we say MEMORIES, we mean THESE</span>
    </div>
    <div class="col-md-3 well" style="background-color: pink; margin-top: 50px">
        <div class="album-container">
            <div class="album-header-container">
                <div class="album-header" style="text-align: center;">
                    <span style="font-style: italic; font-weight: 300; font-size: 30px">CRIXUS KYRIL's captain america themed party!</span>
                </div>
            </div>
            <div class="album-top col-md-12 no-padding-lg-md">
                <div class="album-top-left col-md-6 no-padding-lg-md padding-3px">
                    <img src="https://scontent.fmnl4-1.fna.fbcdn.net/t31.0-8/s960x960/13235201_10204268116583397_3469558818044451801_o.jpg" style="width: 100%">
                </div>
                <div class="album-top-right col-md-6 no-padding-lg-md padding-3px">
                    <img src="https://scontent.fmnl4-1.fna.fbcdn.net/t31.0-8/s960x960/13235201_10204268116583397_3469558818044451801_o.jpg" style="width: 100%">
                </div>
            </div>
            <div class="album-bottom col-md-12 no-padding-lg-md">
                <div class="album-bottom-left col-md-4 no-padding-lg-md padding-3px">
                    <img src="https://scontent.fmnl4-1.fna.fbcdn.net/t31.0-8/s960x960/13235201_10204268116583397_3469558818044451801_o.jpg" style="width: 100%">
                </div>
                <div class="album-bottom-middle col-md-4 no-padding-lg-md padding-3px">
                    <img src="https://scontent.fmnl4-1.fna.fbcdn.net/t31.0-8/s960x960/13235201_10204268116583397_3469558818044451801_o.jpg" style="width: 100%">
                </div>
                <div class="album-bottom-right col-md-4 no-padding-lg-md padding-3px">
                    <img src="https://scontent.fmnl4-1.fna.fbcdn.net/t31.0-8/s960x960/13235201_10204268116583397_3469558818044451801_o.jpg" style="width: 100%">
                </div>
            </div>
            <div class="album-info-container">
                <div class="album-info-date pull-right">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i> &nbsp; <span> June 18, 2014</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 50px">
                <span class="welcome-span welcome-span-first" style="color:palevioletred; font-weight: 300">OUR TEAM</span>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail well">
                    <img class="img-circle img-thumbnail custom-img-thumbnail" src="https://scontent.fmnl4-1.fna.fbcdn.net/t31.0-8/s960x960/13235201_10204268116583397_3469558818044451801_o.jpg" alt="...">
                    <div class="caption">
                      <h3>Coleen</h3>
                      <p>Lead Designer</p>
                      <p>Worked on multiple projects including ..</p>
                      <p>
                          <a href="#" class="btn custom-btn custom-btn-facebook btn-fab" role="button"><i class="fa custom-fa fa-facebook" aria-hidden="true"></i></a>
                          <a href="#" class="btn custom-btn custom-btn-twitter btn-fab" role="button"><i class="fa custom-fa fa-twitter" aria-hidden="true"></i></a>
                          <a href="#" class="btn custom-btn custom-btn-instagram btn-fab" role="button"><i class="fa custom-fa fa-instagram" aria-hidden="true"></i></a>
                         
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="services-note-container">
        <div class="col-md-12" style="margin-top: 50px; text-align: right">
            <span class="welcome-span welcome-span-first" style="color:palevioletred; font-weight: 300; font-size: 20px">Business is an option, FRIENDSHIP is EVERYTHING. Get to know us, we will talk about the price ;)</span>
        </div>
    </div>
    </div>
</div>

<div class="carousel-container">
<!--    <div class="container">-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                  <img src="https://www.theknot.com/assets/topic_pages/wedding-vows-ceremony-436d776651f3bff249f4c715c70fcc63.jpg" alt="..." style="width: 100%">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              <div class="item">
                <img src="http://i.huffpost.com/gen/1965711/images/o-FAMILY-WEDDINGS-facebook.jpg" alt="..." style="width: 100%">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
<!--    </div>-->
</div>
<div class="next-event-container"></div>
<div class="services-container container-fluid">
    <div class="col-md-12" style="margin-top: 50px; text-align: center">
        <span class="welcome-span welcome-span-first" style="color:palevioletred; font-weight: 300">SERVICES</span>
    </div>
    <div class="services-note-container">
        <div class="col-md-12" style="margin-top: 50px; text-align: right">
            <span class="welcome-span welcome-span-first" style="color:palevioletred; font-weight: 300; font-size: 20px">Business is an option, FRIENDSHIP is EVERYTHING. Get to know us, we will talk about the price ;)</span>
        </div>
    </div>
</div>
<div class="footer-container">
    
</div>
@endsection
