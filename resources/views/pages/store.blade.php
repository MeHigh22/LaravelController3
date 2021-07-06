@extends('layouts.index')


@section("content")
@include("partial.header")
 <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{{$varAbout[0]->titre}}</span>
                <span class="section-heading-lower">{{$varAbout[0]->titreSecond}}</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                 {{$varDays[6]->Day}}
                  <span class="ml-auto">{{$varDays[6]->Hour}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                   {{$varDays[0]->Day}}
                  <span class="ml-auto">{{$varDays[0]->Hour}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                   {{$varDays[1]->Day}}
                  <span class="ml-auto">{{$varDays[1]->Hour}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                   {{$varDays[2]->Day}}
                  <span class="ml-auto">{{$varDays[2]->Hour}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                   {{$varDays[3]->Day}}
                  <span class="ml-auto">{{$varDays[3]->Hour}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                   {{$varDays[4]->Day}}
                  <span class="ml-auto">{{$varDays[4]->Hour}}</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                   {{$varDays[5]->Day}}
                  <span class="ml-auto">{{$varDays[5]->Hour}}</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>{{$varAdresse[1]->titre}}</strong>
                  <br>
                  {{$varAdresse[1]->titreSecond}}
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>{{$varAdresse[1]->calll}}</em>
                </small>
                <br>
                {{$varAdresse[1]->num}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">{{$varAbout[0]->titre}}</span>
                  <span class="section-heading-lower">{{$varAbout[0]->titreSecond}}</span>
                </h2>
                <p>{{$varAbout[0]->texte}}</p>
                <p class="mb-0">{{$varAbout[0]->texteSecond}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@include("partial.footer")
@endsection
