@extends('base')

@section('search-css')
<link rel="stylesheet" href="/css/search.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
@stop

@section('search-container')



    <div class="search-wrapper">

      {{-- <ul class="slideshow">
        <li><span>Image 01</span><div><h3>A little something something</h3></div></li>
        <li><span>Image 02</span></li>
        <li><span>Image 03</span></li>
        <li><span>Image 04</span></li>
        <li><span>Image 05</span></li>
        <li><span>Image 06</span></li>
      </ul>

        <div class="container">
          <header>
            <h1>CSS3 <span>Fullscreen Slideshow</span></h1>
        </header>
        
      </div> --}}

        <div class="w3-container w3-center w3-animate-opacity" style="animation-duration: 1.8s">
            <div class="text responsive-font-example">
                <h1>IIUM KNOWLEDGE MANAGEMENT PORTAL</h1>
            </div>
        </div>
        <div id="searchBarWrap">
            <input id="searchBar" type="text" name="searchbar" placeholder="Enter a keyword to get started"/>
            <a href="/result2"><button class="btn" id="searchBtn" style="height: 40px;"><i class="fa fa-search"></i></button></a>
        </div>
    </div>

@stop

@section("cluster-container")

    <div class="cluster-wrapper">

        <div class="cluster-text text-center">
            <h1>KM Portal Cluster</h1>
        </div>

        {{-- <div class="grid-container1">
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1s">   
          <div class="item1">
                      <a href="#" class="content bg-image hover-zoom hover-shadow" data-toggle="tooltip" data-placement="top" data-custom-class="tooltip-custom" title="Explore IIUM policies & standards.">
                      <div class="icon-cluster">
                          <img src="/images/IIUM Policies & Standard - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>IIUM Rules & Policies</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.2s;"> 
          <div class="item2">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Learn about IIUM experts' profiles.">
                      <div class="icon-cluster">
                          <img src="/images/Expert Corner - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Experts Corner</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.4s"> 
          <div class="item3">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Awards and achievements received by IIUM.">
                      <div class="icon-cluster">
                          <img src="/images/Awards & Achievement - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Awards & Achievements</strong>
                          <br>
                      </div>
                      </a>
          </div>  
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.6s"> 
          <div class="item4">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Knowledge resources such as e-book and digital manuscripts collections available at the library and kulliyyah.">
                      <div class="icon-cluster">
                          <img src="/images/Knowledge Resource - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Knowledge Resources</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.8s"> 
          <div class="item5">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Research and scholarly publications.">
                      <div class="icon-cluster">
                          <img src="/images/Articles & Publications - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Research Output</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          </div>
          <div class="grid-container2">
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1s"> 
          <div class="item6">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Information related to IIUM Sustainable Development Goal (SDG) and Flagship projects.">
                      <div class="icon-cluster">
                          <img src="/images/SDG & Flagship - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>SDG & Flagship</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.2s"> 
          <div class="item7">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="IIUM knowledge sharing activities organized by Centre of Studies and Administrative Offices (CoS/AO).">
                      <div class="icon-cluster">
                          <img src="/images/Knowledge Sharing - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Knowledge Sharing</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.4s"> 
          <div class="item7">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="IIUM community engagement programs.">
                      <div class="icon-cluster">
                          <img src="/images/Community Engagement - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Community Engagement</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.6s"> 
          <div class="item7">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="IIUM corporate memories and archives collection.">
                      <div class="icon-cluster">
                          <img src="/images/IIUM History - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>IIUM History</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          <div class="w3-container w3-center w3-animate-bottom" style="animation-duration: 1.8s"> 
          <div class="item7">
                      <a href="#" class="content bg-image hover-zoom" data-toggle="tooltip" data-placement="top" title="Lessons learnt and success stories of IIUM community.">
                      <div class="icon-cluster">
                          <img src="/images/Lesson Learnt - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                      </div>
                      <div class="text-cluster">
                          <strong>Lessons Learnt</strong>
                          <br>
                      </div>
                      </a>
          </div>
          </div>
          </div> --}}

          <section class="container py-5 text-center">
          
            <row class="row justify-content-center">
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/IIUM Policies & Standard - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>IIUM Rules and Standards</strong> </h5>
                    <p class="card-text">
                      Explore IIUM policies & standards.
                    </p>
                    <a href="mobile" class="btn btn-primary">Open Mobile</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Expert Corner - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Experts Corner</strong></h5>
                    <p class="card-text">
                      Learn about IIUM experts' profiles.
                    </p>
                    <a href="monitor" class="btn btn-primary">Open Monitor</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Awards & Achievement - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Awards and Achievements</strong></h5>
                    <p class="card-text">
                      Awards and achievements received by IIUM.
                    </p>
                    <a href="predictor" class="btn btn-primary">Open Predictor</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Knowledge Resource - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Knowledge Resources</strong></h5>
                    <p class="card-text">
                      Knowledge resources such as e-book and digital manuscripts collections available at the library and kulliyyah.
                    </p>
                    <a href="simulator" class="btn btn-primary">Open Simulator</a>
                  </div>
                </card>
              </column>
            </row>
          
            <row class="row justify-content-center">
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Articles & Publications - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Articles and Publications</strong> </h5>
                    <p class="card-text">
                      Knowledge resources such as e-book and digital manuscripts collections available at the library and kulliyyah.
                    </p>
                    <a href="mobile" class="btn btn-primary">Open Mobile</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/SDG & Flagship - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>SDG & Flagship</strong></h5>
                    <p class="card-text">
                      Information related to IIUM Sustainable Development Goal (SDG) and Flagship projects.
                    </p>
                    <a href="monitor" class="btn btn-primary">Open Monitor</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Knowledge Sharing - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Knowledge Sharing</strong></h5>
                    <p class="card-text">
                      IUM knowledge sharing activities organized by Centre of Studies and Administrative Offices (CoS/AO).
                    </p>
                    <a href="predictor" class="btn btn-primary">Open Predictor</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Community Engagement - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Community Engagement</strong></h5>
                    <p class="card-text">
                      IUM community engagement programs.
                    </p>
                    <a href="simulator" class="btn btn-primary">Open Simulator</a>
                  </div>
                </card>
              </column>
            </row>
          
            <row class="row justify-content-center">
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/IIUM History - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>IIUM History</strong> </h5>
                    <p class="card-text">
                      IIUM corporate memories and archives collection.
                    </p>
                    <a href="mobile" class="btn btn-primary">Open Mobile</a>
                  </div>
                </card>
              </column>
              <column class="col-12 col-lg-3 d-flex">
                <card class="card shadow my-4 pt-3 align-self-stretch">
                  <div class="icon-cluster">
                    <img src="/images/Lesson Learnt - Round Shape.png" alt="" style="width: 5rem; height: 5rem; ">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><strong>Leasson Learnt</strong></h5>
                    <p class="card-text">
                      Lessons learnt and success stories of IIUM community.
                    </p>
                    <a href="monitor" class="btn btn-primary">Open Monitor</a>
                  </div>
                </card>
              </column>
            </row>
          </section>

    </div>



@stop