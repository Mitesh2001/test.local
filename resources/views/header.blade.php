<nav class="navbar navbar-expand-lg navbar-light p-3 rounded" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Welcome !</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('class.index')}}">Home <i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{route('class.index')}}">Classes <i class="fa fa-list"></i></a>
      <a class="nav-item nav-link" href="{{route('assignement.index')}}">Assignements <i class="fa fa-list"></i></a>
    </div>
  </div>
</nav>
