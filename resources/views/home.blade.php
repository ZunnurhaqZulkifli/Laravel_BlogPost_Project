@extends('layout')

@section('title' , 'Home Page')

@section('content')

<img src="https://static.wixstatic.com/media/431fca_3d1fc35d344a4b148204e39414bbb051~mv2.png/v1/fill/w_490,h_769,al_c,q_90,usm_0.66_1.00_0.01,
    enc_auto/431fca_3d1fc35d344a4b148204e39414bbb051~mv2.png" alt="a fimiliar face" style="width:50px;height:80px;">

<h4>Zunnurhaq - Home</h4>

        <h5> This is where you will start your journey!</h5>

        <p>
            <h6>These are some of the menu routes</h6>
            <ul class="list-group">
                <li class="list-group-item disabled" aria-disabled="true">List Of Menus</li>
                <a class="list-group-item" href="{{ route('contact') }}">Contacts</a>
                <a class="list-group-item" href="{{ route('posts.index') }}">Blog Posts</a>
                <a class="list-group-item" href="{{ route('zunnur') }}">Zunnurhaq's Media</a>
                <li class="list-group-item">And a fifth one</li>
              </ul>
        </p>

        <div>

            <div class="card">
                <div class="card-body mx-auto">
                  This is some text within a card body.
                </div>
              </div>

        </div>
    <br>

        <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        
    <br>

    <br>

    <div class="card bg-warning mb-3 mx-auto" style="max-width: 18rem;">
        <div class="text-dark card-header">Header</div>
        <div class="card-body">
          <h5 class="text-bold card-title">Primary card title</h5>
          <p class="text-muted card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

@endsection('content')