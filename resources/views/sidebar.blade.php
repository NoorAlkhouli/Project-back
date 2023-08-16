{{-- 
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div> --}}
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   

    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
<button type="button" class="btn-close btn-close-white" onclick="w3_close()" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>

    <a class="navbar-brand" style="position: absolute; right: 20px;">Al Hariry</a>
  
</nav>
<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none;" id="mySidebar"> --}}
    {{-- 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button
             class="w3-button w3-small" onclick="w3_close()">Dashboard</button>
        </div>
    </nav> --}}


    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <img   style="border-radius:20px; height:100px; width:100px;" src="{{ asset('images/logo.jpg') }} ">
            
        </div>
    </nav>
    <br>


    <a href="{{ route('dashboard.category') }}" class="w3-bar-item w3-button">Categories</a>
    <a href="{{ route('dashboard.products') }}" class="w3-bar-item w3-button">Products</a>
    <a href="{{ route('logout') }}" class="w3-bar-item w3-button">LogOut</a>
</div> --}}

{{-- <div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>
  <div class="w2-container">
    <h1>My Page</h1>
  </div>
</div> --}}

{{-- <div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
   
</div> --}}





{{-- 
<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script> --}}

<style>
      .btn {
            border: none;
            padding: 12px 24px;
            border-radius: 24px;
            font-size: 12px;
            font-size: 0.8rem;
            letter-spacing: 2px;
            cursor: pointer;
        }
     
</style>


<nav  class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

       <img   style="border-radius:20px; height:100px; width:100px;" src="{{ asset('images/logo.jpg') }} "> 
      {{-- <h1 class="navbar-brand" >AlHariry</h1> --}}
   


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a  href="{{ route('dashboard.category') }}" class="btn btn-outline-warning">Categories</a>
        </li>
        <li class="nav-item">
          <a  href="{{ route('dashboard.products') }}" class="btn btn-outline-warning">Products</a>
        </li>
        <li class="nav-item">
          <a  href="{{ route('logout') }}" class="btn btn-outline-warning">LogOut</a>
        </li>
       
      </ul>
    
    </div>
  </div>
</nav>