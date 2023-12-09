<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>INSTI DASHBOARD</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.addons.css')}}">
 
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="http://www.urbanui.com/justdo/template/images/logo-white.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="http://www.urbanui.com/justdo/template/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ti-clipboard menu-icon"></i>
              <span class="menu-title">GESTION DES OFFRES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="basic_elements.html">LISTE DES OFFRES</a></li>
                <li class="nav-item"><a class="nav-link" href="advanced_elements.html">DETAILS DES OFFRES</a></li>
                <li class="nav-item"><a class="nav-link" href="validation.html">ACTIONS DES OFFRES</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>

      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier l'offre de la catégorie {{ $offre->data_cat }}</h4>
                  <form action="{{ url('/offresdetail/edit/'.$offre->id)}}" method="POST">
                    @csrf
                      {{-- @method('DELETE') --}}

                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Catégorie de Données</label>
                          <div class="col-lg-8">
                              <input class="form-control" type="text" name="data_cat" value="{{ $offre->data_cat }}" />
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Nom </label>
                          <div class="col-lg-8">
                              <input class="form-control" type="text" name="nom" value="{{ $offre->nom }}" />
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Options de la Catégorie</label>
                          <div class="col-lg-8">
                              <input class="form-control" type="text" name="options" value="{{ $offre->options }}" />
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Admission à la Catégorie</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" name="admission" value="{{ $offre->admission }}" />
                      </div>
                      <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Les profils de Sorties</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" name="ProfilsSortie" value="{{ $offre->ProfilsSortie }}" />
                      </div> 
                      <div class="form-group row">
                        <div class="col-lg-8 offset-lg-3">
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        </div>
                      </div>
                  </form>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/form-validation.js')}}"></script>
  <script src="{{asset('js/bt-maxLength.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
