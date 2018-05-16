	  <?php include('navigationbar.php');?><head><title>MY BANYAN TREE | HOME </title>
          <style>
          .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
      }
              th{
                  text-align: center;
              }
              td{
                  border-bottom: white solid 1px;
              }
              /*button to go up*/
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color:#AD1C1E;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 80px;
      }
      
      #myBtn:hover {
        background-color: #white;
      }
              #myCarousel{
                  border-radius: 60px;
                  background-color: white;
                  opacity-top:2; 
              }
              .carousel-inner{
                  border-radius: 60px;
              }
              /*book now button*/
              .booknow {
        background-color:#AD1C1E;
        color: white;
        padding: 10px 20px;
        border-radius: 80px;
        border-color: #AD1C1E;
      }
      #mybutton {
        position: fixed;
        top: 55px;
        right: 20px;
      }
          </style>
      </head>
      
      
      <div id="body" style="width: 100%; text-align:center;"><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span> (07) 3358 3006 & (07) 3358 4006<span class="glyphicon glyphicon-pushpin" style="width:50px;"></span>4/9 Doggett Street Fortitude Valley 4006
      <div id="mybutton">
      <button class="booknow"><a href="reservation.php"></a>Book now</button>
      </div>
      </div>
        <hr style="margin-bottom:5px !important; margin-top:5px !important; width:90%; " />
        <br>
          <div class="container" style="height:auto; width: 100%">
              <div id="myCarousel" class="carousel slide" data-ride="carousel" border-radius"10px">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
      
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                          <img src="../img/family.jpg" alt="Los Angeles" style="width:100%;height: 500px;">
                      </div>
      
                      <div class="item">
                          <img src="../img/tiger.jpeg" alt="Chicago" style="width:100%;height: 500px;">
                      </div>
      
                      <div class="item">
                          <img src="../img/spices.jpg" alt="New york" style="width:100%;height: 500px;">
                      </div>
                  </div>
      
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
              </div>
          </div>
      </div>
      <h2 style="text-align: center"> View Our Latest.</h2><br>
      <div class="w3-container w3-center w3-animate-bottom">
              <img src="../img/mybanyantreelogo.png" style="width: 500px; height: 300px;"  class="center">
              <p style="text-align: center;" class="center"> “In the centre of a small village in India, a Banyan Tree rises from the earth like a great mountain. Known as the Many Footed One, this remarkable tree has so many trunks it’s virtually a forest covering many acres. <br><br> A place for laughing and bartering, conversing and resting, romping and chasing meeting and imagining. The My Banyan Tree is not only in the heart of the village it is the heart of the village.”<br><br> The Banyan Tree, [bany-yuhn] gets its name from the Hindi word banian, meaning trader. The name appears to have been first bestowed popularly on a famous tree of this speciies growing near Gombroon, under which the Banians or Hindu traders settled at that part. <br><br> The mighty Banyan Tree is the national tree of India. It belongs to the mulberry family, Moraceae and is classified as Ficus bengalensis - a type of fig tree</p>
      </div>
              <br>
      <div class="container" style="text-align: center;width: 50%">
      <h2 border-bottom: 1px black solid;text-align: center;>Our options</h2>
      <ul class="list-group">
    <li class="list-group-item">Fine Dining</li>
    <li class="list-group-item">Functions</li>
    <li class="list-group-item">Delivery</li>
    <li class="list-group-item">Takeway</li>
    <li class="list-group-item">Online Food Ordering</li>
  </ul>
        <h2 border-bottom: 1px black solid;text-align: center;>Open Hours</h2>
        <p>We are open on the following times.</p>            
        <table class="table">
          <thead>
            <tr>
              <th>Week-day</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
          <tr>
              <td>Thursday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
              <tr>
              <td>Friday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
          </tbody>
        </table>
          <table class="table">
          <thead>
            <tr>
              <th>Week-end</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Saturday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>5:00pm - 10:00pm</td>
            </tr>
          </tbody>
        </table>
      </div>
          </div>
          <br>
          <div class="downloadfiles" style="text-align:center">
          <h2> Download our takeaway menu.</h2>
              <button type="button" class="btn" download><a href="../../files/menu_function.docx">Takaway Menu</a></button>
          </div>
          <br>
          <div id="buttons" align="center";>
              <h2 style="text-align: center;"> Order online. Enjoy at home.</h2>
              <p style="text-align: center;"> Or give us a call and we can deliver at your home.</p>
                  <!--Deliveroo-->
                          <button> <img src="../img/deliveroo.png"/> <a href="https://deliveroo.com.au/menu/brisbane/teneriffe/my-banyan-tree?day=today&time=ASAP"</button>
                  <!--Menulog-->
      <button> <img src="../img/menulog.png"/> <a href="https://www.menulog.com.au/restaurants-my-banyan-tree/menu"</button>
                  <!--Eatnow-->
                  <button> <img src="../img/eatnow.jpg"/> <a href="https://www.eatnow.com.au/restaurant-7531/My-Banyan-Tree.html"</button>
              </a>
          </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">Scroll Up</button>
      <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
      </script>
      
          <br>
      <?php include( 'footer.php' );?>
      
      </body>
      
      </html>