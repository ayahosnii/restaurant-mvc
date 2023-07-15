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
      <?php if (!empty($appetizers)): ?>
      <?php foreach ($appetizers as $appetizer): ?>
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?=  $appetizer->image ?>" class="img-fluid" alt="" style="width: 362px; height: 300px">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $appetizer->item_name ?></h5>
              <span class="style-change"><?= $appetizer->price ?> LE</span>
            </div>
            <p class="pt-3"><?= $appetizer->description ?></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php else: ?>
          <p>No food found.</p>
      <?php endif; ?>

    </div>

    <h3><span class="style-change">Burgers</span></h3>
    <div class="row">
      <?php if (!empty($burgers)): ?>
      <?php foreach ($burgers as $burger): ?>
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?=  $burger->image ?>" class="img-fluid" alt="" style="width: 362px; height: 300px">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $burger->item_name ?></h5>
              <span class="style-change"><?= $burger->price ?> LE</span>
            </div>
            <p class="pt-3"><?= $burger->description ?></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php else: ?>
          <p>No food found.</p>
      <?php endif; ?>

    </div>

    <h3><span class="style-change">Pasta</span></h3>
    <div class="row">
      <?php if (!empty($pasta)): ?>
      <?php foreach ($pasta as $p): ?>
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?=  $p->image ?>" class="img-fluid" alt="" style="width: 362px; height: 300px">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $p->item_name ?></h5>
              <span class="style-change"><?= $p->price ?> LE</span>
            </div>
            <p class="pt-3"><?= $p->description ?></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php else: ?>
          <p>No food found.</p>
      <?php endif; ?>

    </div>


    <h3><span class="style-change">Sides</span></h3>
    <div class="row">
      <?php if (!empty($sides)): ?>
      <?php foreach ($sides as $side): ?>
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?=  $side->image ?>" class="img-fluid" alt="" style="width: 362px; height: 300px">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $side->item_name ?></h5>
              <span class="style-change"><?= $side->price ?> LE</span>
            </div>
            <p class="pt-3"><?= $side->description ?></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php else: ?>
          <p>No food found.</p>
      <?php endif; ?>

    </div>


    <h3><span class="style-change">Salad</span></h3>
    <div class="row">
      <?php if (!empty($salads)): ?>
      <?php foreach ($salads as $salad): ?>
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?=  $salad->image ?>" class="img-fluid" alt="" style="width: 362px; height: 300px">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $salad->item_name ?></h5>
              <span class="style-change"><?= $salad->price ?> LE</span>
            </div>
            <p class="pt-3"><?= $salad->description ?></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php else: ?>
          <p>No food found.</p>
      <?php endif; ?>

    </div>


    <h3><span class="style-change">Sandwiches</span></h3>
    <div class="row">
      <?php if (!empty($sandwiches)): ?>
      <?php foreach ($sandwiches as $sandwich): ?>
      <div class="col-md-4 col-sm-6">
        <div class="single-food">
          <div class="food-img">
            <img src="uploads/images/<?=  $sandwich->image ?>" class="img-fluid" alt="" style="width: 362px; height: 300px">
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5><?= $sandwich->item_name ?></h5>
              <span class="style-change"><?= $sandwich->price ?> LE</span>
            </div>
            <p class="pt-3"><?= $sandwich->description ?></p>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php else: ?>
          <p>No food found.</p>
      <?php endif; ?>

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
