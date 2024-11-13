@extends('web.backend.app')


@section('backend_content')
    <div class="dashboard-contents--wrapper">
        <!-- dashboard common top starts -->
        <div class="dashboard-header">
            <!-- title -->
            <div class="dashboard-header--left">
                <h3 class="dashboard-page--title">Subscription Plans
                </h3>
            </div>


            @include('web.backend.partials.header')


        </div>
        <!-- dashboard common top starts -->

        <!-- dashboard pages area starts -->
        <div class="dynamic--pages--area">
            <!-- merch store page both artist and listener starts -->
            <div class="bi-common--merch--store--page--wrapper">
              <!-- for artist -->
              <section class="bi--merch--store--products--wrapper">
                <div class="bi--merch--store--header">
                  <h1 class="bi-dashboard--common--page--heading">
                    My Products
                  </h1>
                  <a href="artist-dashboard-merch-store-add-new-product.html" class="bi-add--new--product--btn">
                    <i class="fa-solid fa-plus fa-lg"></i>
                    <span>Add New Product</span>
                  </a>
                </div>
                <div class="bi-common--merch--store--product--grid">

                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-1.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-2.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-3.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-4.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-1.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-2.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-3.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-4.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-1.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-2.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-3.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>
                  <a href="#" class="bi-common--merch--store--product--card">
                    <!-- image -->
                    <div class="bi-common--merch--store--product--card--img">
                      <img src="../assets/images/product-4.png" alt="" srcset="" />
                    </div>
                    <!-- product name -->
                    <h2 class="bi-common--merch--store--product--name">
                      Stone T-Shirt
                    </h2>
                    <!-- buy button -->
                    <button class="bi-common--merch--store--product--btn buy--btn">
                      Buy for 15 AT
                    </button>
                    <!-- add to cart btn -->
                    <!-- <button class="bi-common--merch--store--product--btn add-to--cart--btn">
                        <i class="fa-solid fa-bag-shopping fa-xl"></i
                        ><span>Add to Cart</span>
                      </button> -->
                  </a>




                </div>
              </section>
            </div>
            <!-- merch store page both artist and listener ends -->
          </div>
        <!-- dashboard pages area starts -->
    </div>
@endsection
