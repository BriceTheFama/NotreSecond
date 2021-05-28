@extends('layout.nav')
@section('content')
<div class="container my-4">
    <h1 class="text-center mb-4">Nos services</h1>
    <div class="row mb-2">
        <div class="col-md-6">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                   <h4> <strong class="d-inline-block mb-0 text-primary">Site internet</strong></h4>
                    <!-- <h4 class="mb-0">Flutter avec dart</h4> -->
                    <!-- <div class="mb-1 text-muted">Front-end</div> -->
                    <p class="card-text mb-auto">
                        Cyprum itidem insulam procul a continenti discretam et portuosam
                        inter municipia crebra urbes duae faciunt claram Salamis et Paphus 
                        
                        </p>
                    <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="250" height="250" src="img/06.png" alt="" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h4><strong class="d-inline-block mb-0 text-success">Applicatoin Mobile</strong></h4>
                    <!-- <h4 class="mb-0">Firebase</h4> -->
                    <!-- <div class="mb-1 text-muted">Back-end</div> -->
                    <p class="card-text mb-auto">Cyprum itidem insulam procul a continenti discretam et portuosam
                        inter municipia crebra urbes duae faciunt claram Salamis et Paphus 
                        </p>
                    <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="250" height="250" src="img/07.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-2">
    <div class="row mb-2">
        <div class="col-md-6">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h4><strong class="d-inline-block mb-2 text-warning">Gestion de stock</strong></h4>
                    <!-- <h4 class="mb-0">CSS,Js,React js,Bootstrap</h4> -->
                    <!-- <div class="mb-1 text-muted">Front-end</div> -->
                    <p class="card-text mb-auto">Cyprum itidem insulam procul a continenti discretam et portuosam
                        inter municipia crebra urbes duae faciunt claram Salamis et Paphus 
                        .</p>
                    <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="250" height="250" src="img/05.jpg" alt="" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div
                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h4><strong class="d-inline-block mb-2 text-primary">Autres</strong></h4>
                    <!-- <h4 class="mb-0">Php, Laravel, Symfony, Django</h4> -->
                    <!-- <div class="mb-1 text-muted">Back-end</div> -->
                    <p class="card-text mb-auto">Cyprum itidem insulam procul a continenti discretam et portuosam
                        inter municipia crebra urbes duae faciunt claram Salamis et Paphus </p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="250" height="250" src="img/thumb3.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- section Gallary -->


<h1 class="text-center my-3">Les Technologies que nous utilisons</h1>
<hr>
<div class="container mb-5">   
  <div class="card-deck">
      <div class="card">
        <img src="img/02.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mobile</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis sapiente molestiae a porro, eaque assumenda quos quo voluptatum.</p>
          <button class="btn btn-info btn-sm">Explore now</button>
        </div>
      </div>
      <div class="card">
        <img src="img/04.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Site web </h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis sapiente molestiae a porro, eaque assumenda quos quo voluptatum.</p>
          <button class="btn btn-info btn-sm">Explore now</button>
        </div>
      </div>
      <div class="card">
        <img src="img/01.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Application desktop</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis sapiente molestiae a porro, eaque assumenda quos quo voluptatum.</p>
          <button class="btn btn-info btn-sm">Explore now</button>
        </div>
      </div>
    </div>
</div>
    
@endsection
