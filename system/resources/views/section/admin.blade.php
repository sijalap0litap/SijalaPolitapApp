@section('profil')
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{url("public/$user->foto")}}" class="img-circle elevation-2" alt="User Image">
      </div>
    <div class="info">
      <a href="#" class="d-block"> {{$user->nama}} </a>
    </div>
  </div>
@endsection
