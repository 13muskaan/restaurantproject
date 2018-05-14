<?php include('navigationbar.php'); ?>
<!doctype html>
<html>

<head>

	<title>MY BANYAN TREE | FUNCTION</title>
	<script>
	
	var Conclave = (function () {
    var buArr = [], arlen;
    return {
        init: function () {
            this.addCN(); this.clickReg();
        },
        addCN: function () {
            var buarr = ["holder_bu_center", "holder_bu_awayL1", "holder_bu_awayL2", "holder_bu_awayR1", "holder_bu_awayR2"];
            for (var i = 1; i <= buarr.length; ++i) {
                $("#bu" + i).removeClass().addClass(buarr[i - 1] + " holder_bu");
            }
        },
        clickReg: function () {
            $(".holder_bu").each(function () {
                buArr.push($(this).attr('class'))
            });
            arlen = buArr.length;
            for (var i = 0; i < arlen; ++i) {
                buArr[i] = buArr[i].replace(" holder_bu", "")
            }
            $(".holder_bu").click(function (buid) {
                var me = this, id = this.id || buid, joId = $("#" + id), joCN = joId.attr("class").replace(" holder_bu", "");
                var cpos = buArr.indexOf(joCN), mpos = buArr.indexOf("holder_bu_center");
                if (cpos != mpos) {
                    tomove = cpos > mpos ? arlen - cpos + mpos : mpos - cpos;
                    while (tomove) {
                        var t = buArr.shift();
                        buArr.push(t);
                        for (var i = 1; i <= arlen; ++i) {
                            $("#bu" + i).removeClass().addClass(buArr[i - 1] + " holder_bu");
                        }
                        --tomove;
                    }
                }
            })
        },
        auto: function () {
            for (i = 1; i <= 1; ++i) {
                $(".holder_bu").delay(4000).trigger('click', "bu" + i).delay(4000);
                console.log("called");
            }
        }
    };
})();

$(document).ready(function () {
    window['conclave'] = Conclave;
    Conclave.init();
});
</script>
	<style>
	a:hover
{
    text-decoration:none;
}
#wrapper_bu {
    position: absolute;
    width: 100%;
    left: -4%;
}


.txt_h1 {
    font-size: 2em;
}

.holder_bu {
    cursor: pointer;
}

.holder_bu_awayL1 {
    position: absolute;
    top: 0;
    left: 0%;
    width: 33.3%;
    -webkit-transition: width 1s, height 1s, top 1s, left 1s;
    -moz-transition: width 1s, height 1s, top 1s, left 1s;
    -o-transition: width 1s, height 1s, top 1s, left 1s;
    -ms-transition: width 1s, height 1s, top 1s, left 1s;
    transition: width 1s, height 1s, top 1s, left 1s;
}

.holder_bu_awayL2 {
    position: absolute;
    top: 0;
    left: 66%;
    width: 33.3%;
    -webkit-transition: width 1s, height 1s, top 1s, left 1s;
    -moz-transition: width 1s, height 1s, top 1s, left 1s;
    -o-transition: width 1s, height 1s, top 1s, left 1s;
    -ms-transition: width 1s, height 1s, top 1s, left 1s;
    transition: width 1s, height 1s, top 1s, left 1s;
}

.holder_bu_center {
    position: absolute;
    top: 0;
    left: 33%;
    width: 33.3%;
    -webkit-transition: width 1s, height 1s, top 1s, left 1s;
    -moz-transition: width 1s, height 1s, top 1s, left 1s;
    -o-transition: width 1s, height 1s, top 1s, left 1s;
    -ms-transition: width 1s, height 1s, top 1s, left 1s;
    transition: width 1s, height 1s, top 1s, left 1s;
}

.holder_bu_awayR1 {
    position: absolute;
    top: 0;
    left: 80%;
    width: 10%;
    height: 40%;
    -webkit-transition: width 1s, height 1s, top 1s, left 1s;
    -moz-transition: width 1s, height 1s, top 1s, left 1s;
    -o-transition: width 1s, height 1s, top 1s, left 1s;
    -ms-transition: width 1s, height 1s, top 1s, left 1s;
    transition: width 1s, height 1s, top 1s, left 1s;
}

.holder_bu_awayR2 {
    position: absolute;
    top: 0;
    left: 90%;
    width: 10%;
    height: 30%;
    -webkit-transition: width 1s, height 1s, top 1s, left 1s;
    -moz-transition: width 1s, height 1s, top 1s, left 1s;
    -o-transition: width 1s, height 1s, top 1s, left 1s;
    -ms-transition: width 1s, height 1s, top 1s, left 1s;
    transition: width 1s, height 1s, top 1s, left 1s;
}

.wrapper_bu {
    height: 115px;
    position: relative;
}

.panel-default {
    border: none;
}
.panel-heading {
    padding:0px;
}

.title.active {
    font-size: 17px;
    /*font-family: ProximaNovaBold;*/
    color: #181818;
    line-height: 20px;
}

.title {
    font-size: 15px;
    color: #878787;
    margin: 25px 0px 0px 0px;
    text-transform: uppercase;
}

.image img 
{
    display:inline-block;
}</style>
	<style>
	body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
	</style>
</head>

<body>
		<div class="header">
  <div class="jumbotron">
    <h1 style="text-align:center;background-image: url(../img/headermap1.jpeg)">Functions</h1>
  </div>     
</div>
	<h2 style="text-align: center;"> Our functions.</h2>
<!-- code here for downloading pdf files that were inserted via admin database-->
	<div class="container text-center">
	<div class="row">
		<div class="col-sm-12">
		       <div class="wrapper_bu" style="position:relative;">
		           <div class="image">
                        <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                           data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseTwo">
                              <div id="bu1">
                                    <img alt="" src="https://s6.postimg.org/ek5rpg6i9/karachi.png" class="img-responsive imgtransform">
                                    <div class="title">Anniversary</div>
                              </div>
                        </a>
                 </div>
                 <div class="image">
                    <a class="panel-heading accordion-toggle collapsed left" data-toggle="collapse"
                       data-parent="#accordion1,#accordion2,#accordion3" data-target="#collapseOne">
                        <div id="bu2">
                            <img alt="" src="https://s6.postimg.org/kwgbljk6p/islamabad.png" class="img-responsive imgtransform">
                            <div class="title">Birthday</div>
                        </div>
                    </a>
                 </div>
                <div class="image">
                    <a class="panel-heading accordion-toggle collapsed left " data-toggle="collapse" data-parent="#accordion1,#accordion2,#accordion3"
                       data-target="#collapseThree">
                          <div id="bu3">
                              <img alt="" src="https://s6.postimg.org/4wxo1zo4x/dubai.png" class="img-responsive imgtransform">
                              <div class="title">Corporate</div>
                          </div>
                    </a>
                </div>
            </div>
            <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="center-down-arrow">
                                    <img src="https://s6.postimg.org/50w2vzj01/slider_down_Arrow.png">
                                </div>
                                <div>
                                  <h1>Islamabad</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="center-down-arrow">
                                    <img src="https://s6.postimg.org/50w2vzj01/slider_down_Arrow.png">
                                </div>
                                <div>
                                  <h1>Karachi</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div id="collapseThree" class="panel-collapse collapse">
                       <div class="panel-body">
                                <div class="center-down-arrow">
                                    <img src="https://s6.postimg.org/50w2vzj01/slider_down_Arrow.png">
                                </div>
                                <div>
                                  <h1>Dubai</h1>
                                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
									<h2 style="text-align:center">Lightbox</h2>

<div class="row">
  <div class="column">
    <img src="../img/family.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../img/family.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../img/family.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../img/family.jpg"style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="../img/family.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="../img/family.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="../img/family.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="../img/family.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="../img/family.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/family.jpg"style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/family.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/family.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
	</div>
</div>
	<!-- end  here-->
	<?php  include('footer.php'); ?>
</body>

</html>