<!DOCTYPE html5>
<html>

<body>

  <?php
require 'head.php';
?>
  <style>
    .card-header {
      border: 1px solid #9744be;
      padding: 15px;
      margin-top: 20px;
      font-size:20px;
    }

    i {
      color: white;
    }
.card{
  border:none;
}
.contdec{
  font-size:18px;
  color:#9744be;
  width:100%;
  margin:5px;
}
    .card-header:hover {
      width: 100%;
      background-color: #9744be;
      color: white;
    }
 
    a {
      width: 100%;
      color: #9744be;
    }

    a:hover {
      width: 100%;
      color: white;
    }
  </style>
  <h1 id="effect" style="font-family: 'Averia Serif Libre';color: #9744be;text-align: center;margin-top: 40px;">P</h1>
  <div id="head">
    <div id="headinside">
      <center>
        <ul id="head1">
          <li class="he1">ONLY OBJECTIVE QUESTIONS</li>
          <li class="he1">ENHANCE CODING SKILLS</li>
          <li class="he1">INCREASE YOUR SPEED</li>
      </center>
      </ul>
    </div>

  </div>
  <br><br>
  <div class="container">
    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseOne">
            CODING SKILL TEST
            <i class="fa fa-expand" style="font-size:20px;float:right;"></i></a>
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#accordion">
          <div class="card-body">
          <div class="container-fluid row">
              <div class="col-sm-3">
              <i class="fa fa-check contdec"> C PROGRAM</i>
               <i class="fa fa-check contdec"> C++ PROGRAM</i>
                <i class="fa fa-check contdec"> JAVA</i>
              </div>
              <div class="col-sm-3">
                <i class="fa fa-check contdec"> PYTHON</i>
                <i class="fa fa-check contdec"> C #</i>
                <i class="fa fa-check contdec"> SQL</i>
              </div>
        </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseTwo">
            WEB DEVELOPMENT TEST
            <i class="fa fa-expand" style="font-size:20px;float:right;"></i></a>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="card-body">
          <div class="container-fluid row">
              <div class="col-sm-3">
              <i class="fa fa-check contdec"> HTML</i>
               <i class="fa fa-check contdec"> CSS</i>
                <i class="fa fa-check contdec"> JAVA SCRIPT</i>
              </div>
              <div class="col-sm-3">
                <i class="fa fa-check contdec"> PHP</i>
                <i class="fa fa-check contdec"> ANGULAR JS</i>
                <i class="fa fa-check contdec"> BOOTSTRAP</i>
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <a class="card-link" data-toggle="collapse" href="#collapseThree">
            APTITUDE SKILL TEST
            <i class="fa fa-expand" style="font-size:20px;float:right;"></i></a>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordion">
          <div class="card-body">
          <div class="container-fluid row">
              <div class="col-sm-3">
              <i class="fa fa-check contdec"> BLOOD RELATON</i>
               <i class="fa fa-check contdec"> CODING DECODING</i>
                <i class="fa fa-check contdec"> DIRECTION</i>
              </div>
              <div class="col-sm-3">
                <i class="fa fa-check contdec"> PERMUTATION & COMBINATION</i>
                <i class="fa fa-check contdec"> PROBABLITY</i>
                <i class="fa fa-check contdec"> NUMBER SYSTEM</i>
              </div>
              <div class="col-sm-3">
                <i class="fa fa-check contdec"> SPEACH</i>
                <i class="fa fa-check contdec"> VOICE</i>
                <i class="fa fa-check contdec"> READING</i>
              </div>
  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer>
    &copy;2020-2021|a.s.prajna
  </footer>
  <!-- Latest compiled and minified CSS -->

  <script>
    var x = 0;
    var t = "LEASE TAKE THE TEST!!... ";
    var c = document.getElementById('effect');
    function ab() {
      if (x < t.length) {
        c.innerHTML += t.charAt(x);
        x++;
        setTimeout(ab, 250);
        if (x == t.length) {
          x = 0;
          c.innerHTML = "P";
        }
      }
    }
    ab();
  </script>
</body>

</html>