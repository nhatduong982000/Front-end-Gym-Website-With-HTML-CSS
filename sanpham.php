<!doctype html>
<html lang="en">
  <head>
    <title>sản phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./1.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- =============================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="C:\Users\Admin\Desktop\startbootstrap-shop-homepage-master\trang1\js\thanhtimkiem.js"></script>
    <!-- ==========icon link=========== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?php 
      //include
      require 'functions.php';
    ?>
  </head>
  <body>
<!-- ===============================================HEADER=============================================== -->
    <!-- nav-bar -->
    <nav class="nav-menu navbar navbar-expand-lg navbar-dark nav-bg-costume fixed-top nav-tabs" >
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="bird.jpg" alt="Logo" style="width:40px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto m-auto">
              <li class="nav-item active">
                <a class="nav-link " href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About  <i class=" fas fa-chevron-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <form action="#">
              <a href="#" class="py-2 rounded-pill bg-dark">
                <span class="px-2 text-white"><i class="fas fa-shopping-basket"></i></span>
                <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
              </a>
            </form>
          </div>
        </div>
      </nav>
<!-- ======nav bar====== -->


<!-- ===============================================BODY=================================================== -->
<!-- page content -->
<div class="container  shadow bg-light">
  <div class="row ">
    <div class="col-lg-3">
      <h1 class="my-4">Danh mục whey</h1>
      <div class="list-group">
        <a href="sanpham.html" class="list-group-item list-group-item-action nav-link bg-dark text-white">Whey Protein Concentrate
          <span class="sr-only">(current)</span>
        </a>
        <a href="trang1_2.html" class="list-group-item list-group-item-action nav-link">Whey Protein Isolate</a>
        <a href="trang1_3.html" class="list-group-item list-group-item-action nav-link">Whey Protein Hydrolysate</a>
      </div>
      
    </div>
    <!-- tesst -->



    
<!-- ===========test========= -->
    <!-- /slide show -->
    <div class="col-lg-9">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid"  src="picture\Gym-2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="picture\xo.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="picture\huong-dan-cach-nghe-nhac-tat-man-hinh-tren-youtube-2.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


<!-- ========slide show======== -->
      <!-- thanh tìm kiếm -->
      <div class="container mt-3">
        <h2>Tìm kiếm</h2>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
      </br>
      </div>
      
<?php 
  $product_shuffle = $product->getData();
?>
      <div class="row">
      <?php foreach($product_shuffle as $item) { ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100" id="myDIV" >
            <a href="#"><img class="card-img-top resize-pic" src="<?php echo $item['$item_image'] ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" data-toggle="modal" data-target="#myModal-1">whey 1 pro vjp</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Sản phẩm chất lượng cao do Zuon bodoi tạo ra giúp tăng cơ nhanh chóng và không hề gây hại cho sức khỏe. Được chứng nhận trên toàn thế giới</p>

            </div>
            <!-- MUA HANG -->
            
              <div class="nav-menu ">
                <p class="book-a-table text-center "><a href="#book-a-table">Mua hàng</a> </p>
              </div>
                <!-- ============= MODAL ============= -->
                <div class="modal fade " id="myModal-1" tabindex="-1" style="display: none;" aria-hidden="true" >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <!-- ==========HEADER MODAL========= -->
                      <div class="modal-header bg-light justify-content-center">
                        <h4 class="modal-title " id="">Thông tin sản phẩm</h4>
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                      </div>
                      <!-- =============body modal============= -->
                        <div class="container">
                        <div class="row justify-content-center">
                          <div class="col-lg-12">
                              <div class="modal-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-lg-5">
                                      <img class="img-fluid d-block mx-auto float-left" src="https://i5.walmartimages.com/asr/d5d4529a-438c-4719-a8e4-28dc1afbc502_1.03993aa308ee392eb3e7a713985d607d.jpeg" alt="">
                                    </div>
                                    <div class="col-lg-7 ">
                                      <h2 class="text-uppercase">Project Name 2</h2>
                                      <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                      
                                      <div class=" col-lg-12 col-md-12 col-sm-12 bg-color-costume text-white" id="price-preview-qv">
                                        <span>850,000₫</span>
                                      </div>
                                      <p class="text-left">Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <!-- ========================================= -->  
            
          </div>
        </div>
      <?php > ?>

        <div class="col-lg-4 col-md-6 mb-4"id="myDIV">
          <div class="card h-100" >
            <a href="#"><img class="card-img-top resize-pic" src="picture\whey_2.png" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" data-toggle="modal" data-target="#myModal-2">whey Two</a>
              </h4>
              <h5>$5</h5>
              <p class="card-text">Sản phẩm whey kém chất lượng hơn do Khánh Long tạo ra nhằm hướng đến đối tượng là học sinh, sinh viên.</p>
            </div>
            
              <div class="nav-menu">
                <p class="book-a-table text-center "><a href="#book-a-table">Mua hàng</a></p>
              </div>
                <!-- ============= MODAL ============= -->
                <div class="modal fade " id="myModal-2" tabindex="-1" style="display: none;" aria-hidden="true" >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <!-- ==========HEADER MODAL========= -->
                      <div class="modal-header bg-light justify-content-center">
                        <h4 class="modal-title " id="">Thông tin sản phẩm</h4>
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                      </div>
                      <!-- =============body modal============= -->
                        <div class="container">
                        <div class="row justify-content-center">
                          <div class="col-lg-12">
                              <div class="modal-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-lg-5">
                                      <img class="img-fluid d-block mx-auto float-left" src="https://product.hstatic.net/1000185761/product/iso-hd-70-servs-chocolate-browni_60039246060f4012b0baedcb8823deb5_master.jpg" alt="">
                                    </div>
                                    <div class="col-lg-7 ">
                                      <h2 class="text-uppercase">Project Name 2</h2>
                                      <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                      
                                      <div class=" col-lg-12 col-md-12 col-sm-12 bg-color-costume text-light" id="price-preview-qv">
                                        <span>850,000₫</span>
                                      </div>
                                      <p class="text-left">"Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <!-- ========================================= -->  
            
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4"id="myDIV">
          <div class="card h-100" >
            <a href="#"><img class="card-img-top resize-pic" src="picture\organtic-protein.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" data-toggle="modal" data-target="#myModal-3">whey three</a>
              </h4>
              <h5>$5</h5>
              <p class="card-text">Dành cho người ăn chay :D </p>
            </div>
            
              <div class="nav-menu">
                <p class="book-a-table text-center "><a href="#book-a-table">Mua hàng</a></p>
              </div>
                <!-- ============= MODAL ============= -->
                <div class="modal fade " id="myModal-3" tabindex="-1" style="display: none;" aria-hidden="true" >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <!-- ==========HEADER MODAL========= -->
                      <div class="modal-header bg-light justify-content-center">
                        <h4 class="modal-title " id="">Thông tin sản phẩm</h4>
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                      </div>
                      <!-- =============body modal============= -->
                        <div class="container">
                        <div class="row justify-content-center">
                          <div class="col-lg-12">
                              <div class="modal-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-lg-5">
                                      <img class="img-fluid d-block mx-auto float-left" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/316/300/products/88356bbe426aa234fb7b.jpg?v=1565598137930" alt="">
                                    </div>
                                    <div class="col-lg-7 ">
                                      <h2 class="text-uppercase">Project Name 2</h2>
                                      <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                      
                                      <div class=" col-lg-12 col-md-12 col-sm-12 bg-color-costume text-white" id="price-preview-qv">
                                        <span>850,000₫</span>
                                      </div>
                                      <p class="text-left">"Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <!-- ========================================= -->  
          </div>
        </div>

       
      <ul class="pagination justify-content-center" style="margin:20px 0">
        <li class="page-item disabled" ><a class="page-link  " href="#">Previous</a></li>
        <li class="page-item"><a class="page-link " href="#">1</a></li>
        <li class="page-item"><a class="page-link " href="#">2</a></li>
        <li class="page-item"><a class="page-link " href="#">Next</a></li>
      </ul>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js\index.js"></script>
  </body>
</html>