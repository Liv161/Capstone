<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<style>
main{
    background-color: red;
    height: 100%;
}
#all{
    width:80%;
    align-self: center;   
    margin-left: 10%;
}
.flex-container {
  display: flex;   
  width: 90%;
  margin-left: 3%;
  margin-top: 10%;
}

.flex-container > div {
  background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
  height: 300px;
}

.grid-container {
  display: grid;
/*  grid-template-columns: auto auto auto;*/
/*  background-color: red;*/
  padding: 10px;
  grid-template-columns: 20% 20% 20% 20% 20%;
  width:95%;
  margin-left: 3%;
  margin-top: 10%;
}
.grid-item {
/*  background-color: rgba(255, 255, 255, 0.8);*/
  border: 1px solid red;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

#foot{
    background-color: red;
    width:100%;
    height: 150px;    
    margin-top: 10%;
}
footer{
    width: 100%;
    clear: both;
    text-align: center;
    font-size: 10px;    
    margin-top: 2%;
}
</style>
</head>
<body>

    <div id="all">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">The Gifted</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">X-Men <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Abilities</a>
      <a class="nav-item nav-link" href="#">Villains</a>
    </div>
  </div>
</nav>
        <main>
             <div><img style="margin-top:5%;width:100% " src="../../Capstone_Draft_1/images/xmen.jpg" alt=""/> </div> 
        </main>
        <div class="flex-container">     
            <div class='col-lg-4 col-md-6 col-sm-12' style="background-color: red">1</div>
            <div class='col-lg-4 col-md-6 col-sm-12' style="background-color: red">2</div>
            <div class='col-lg-4 col-md-6 col-sm-12' style="background-color: red">3</div>  
        </div>
        
        
        <div class="grid-container">
            <div class="grid-item">1</div>
            <div class="grid-item">2</div>
            <div class="grid-item">3</div>  
            <div class="grid-item">4</div>
            <div class="grid-item">5</div>
            <div class="grid-item">6</div>  
            <div class="grid-item">7</div>
            <div class="grid-item">8</div>
            <div class="grid-item">9</div>
            <div class="grid-item">0</div>
            <div class="grid-item">1</div>
            <div class="grid-item">2</div>
            <div class="grid-item">3</div>  
            <div class="grid-item">4</div>
            <div class="grid-item">5</div>
            <div class="grid-item">6</div>  
            <div class="grid-item">7</div>
            <div class="grid-item">8</div>
            <div class="grid-item">9</div>
            <div class="grid-item">0</div>
          </div>
        
        <div id='foot'>
           
        </div>
        <footer>&copy;ALivCreation</footer> 
    </div>        
    </body>
</html>
