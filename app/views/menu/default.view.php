<!-- Header Area Starts -->
<header class="header-area header-area2">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="logo-area">
          <a href="index"><img src="assets/images/logo/logo2.png" alt="logo"></a>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="custom-navbar">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="main-menu main-menu2">
          <ul>
            <li class="active"><a href="index">home</a></li>
            <li><a href="about">about</a></li>
            <li><a href="menu">menu</a></li>
            <li><a href="blog">blog</a></li>
            <li><a href="contact">contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header Area End -->
<!-- Banner Area Starts -->
<section class="banner-area banner-area2 menu-bg text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1><i>Our Menu</i></h1>
        <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
      </div>
    </div>
  </div>
</section>
<!-- Banner Area End -->

<!-- Food Area starts -->
<section class="food-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="section-top">
          <h3><span class="style-change">we serve</span> <br>delicious food</h3>
          <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
        </div>
      </div>
    </div>
    <h3><span class="style-change">Appetizers</span></h3>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?= $appetizer->image ?>" class="img-fluid" alt="">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $appetizer->item_name ?></h5>
              <span class="style-change">$<?= $appetizer->price ?></span>
            </div>
            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Food Area End -->

<!-- Table Area Starts -->
<section class="table-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-top2 text-center">
          <h3>Book <span>your</span> table</h3>
          <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <form action="#">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-calendar"></i></span>
            </div>
            <input type="text" id="datepicker">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
            </div>
            <input type="text" id="datepicker2">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user-o"></i></span>
            </div>
            <input type="text">
          </div>
          <div class="table-btn text-center">
            <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
