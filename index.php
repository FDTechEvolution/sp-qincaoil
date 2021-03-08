<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>น้ำมันสกัดเย็น คิว อินคา ออย์ | น้ำมันถั่วดาวอินคาของขวัญจากธรรมชาติ</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    
    <!--https://getbootstrap.com/docs/5.0 -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/blog.css" rel="stylesheet">
    <link href="dist/fonts/prompt.css" rel="stylesheet">

    <!-- My Style -->
    <link href="dist/css/style.css" rel="stylesheet">

    <!--https://icons.getbootstrap.com/-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Vue.js & Axios -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>

<body>    
<div id="app" class="container">
  <header class="blog-header pt-0 pb-3">
    <div class="row">
      <div class="col-12">
        <img src="dist/img/cover/cover_qinca_01.jpg" class="img-fluid" title="" alt="">
        <img src="dist/img/cover/cover_qinca_02.jpg" class="img-fluid" title="" alt="">
      </div>
    </div>
  </header>

  <div class="blog-header px-0 position-fixed bottom-0 start-0 d-block d-sm-none w-100 bg-white" style="z-index: 99; margin-bottom: -1px; box-shadow: 2px 6px 10px 5px #aaa;">
    <div class="row gutter-0">
   
      <div class="col-12 px-0 d-grid gap-2 mx-auto">
        <a href="#box-form" class="btn btn-success btn-lg rounded-0"><i class="bi bi-cart4"></i> สั่งซื้อ ราคาโปรโมชั่นสุดคุ้ม</a>
      </div>
    </div>
  </div>

  <main class="container my-4">
    <div class="row justify-content-center">
      <div class="col-10">
        <a href="https://line.me/R/ti/p/%40027xszut" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_line_contact.png" class="w-100"/>
        </a>
      </div>
      <div class="col-10 mt-2">
        <a href="#box-form" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_order.png" class="w-100"/>
        </a>
      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-12 mb-3">
        <img src="dist/img/products/qincaoil_product_01.jpg" class="img-fluid rounded my-1">
        <img src="dist/img/products/qincaoil_product_02.jpg" class="img-fluid rounded my-1">
        <img src="dist/img/products/qincaoil_product_03.jpg" class="img-fluid rounded my-1">
        <img src="dist/img/products/qincaoil_product_04.jpg" class="img-fluid rounded my-1">
      </div>
      <hr/>
      <div class="col-12">
        <img src="dist/img/products/qincaoil_product_06.jpg" class="img-fluid rounded my-1">
      </div>
    </div>

    <hr/>
    
    <div class="row my-3">
      <div class="col-12 text-center my-4">
        <h2>โปรโมชั่นสุดคุ้ม</h2>
      </div>
      <div class="col-12">
        <img src="dist/img/promotion/qincaoil_promotion_01_1.jpg" class="img-fluid rounded">
        <img src="dist/img/promotion/qincaoil_promotion_02_2.jpg" class="img-fluid rounded">
      </div>
    </div>

    <hr/>

    <div class="row justify-content-center">
      <div class="col-10">
        <a href="https://line.me/R/ti/p/%40027xszut" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_line_contact.png" class="w-100"/>
        </a>
      </div>
      <div class="col-10 mt-2">
        <a href="#box-form" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_order.png" class="w-100"/>
        </a>
      </div>
    </div>

    <hr/>

    <div class="row">
      <div class="col-12 text-center">
        <h4>รีวิวจากลูกค้า</h4>
      </div>
      <div v-for="review in reviews" class="col-sm-12 col-lg-6 my-3">
        <img :src="review.src" :title="review.title" :alt="review.review" class="img-fluid">
      </div>
    </div>

    <hr />

    <div class="row my-5" id="box-form">
      <div class="col-12 text-center">
        <h2>กรอกข้อมูลเพื่อสั่งซื้อ</h2>
      </div>
      <div class="col-12">
        
          <div class="mb-3">
            <label for="name" class="form-label"><strong>สินค้า/โปรโมชั่นที่ต้องการ</strong></label>
            <div class="form-check mb-3">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro1" value="คิวอินคา 1แถม1 890" checked="checked">
              <label class="form-check-label" for="pro1">1 แถม 1 <del>1,780</del> เพียง 890฿ <span class="text-success blink_me">ส่งฟรี!</span></label>
            </div>
            <div class="form-check mb-3">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro2" value="คิวอินคา 3กระปุก 1180">
              <label class="form-check-label" for="pro2">3 กระปุก <del>2,670</del> เพียง 1,180฿ <span class="text-success blink_me">ส่งฟรี!</span></label>
            </div>
            <div class="form-check mb-3">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro3" value="คิวอินคา 5กระปุก-แถม1 1990">
              <label class="form-check-label" for="pro3">5 กระปุก แถม 1 <del>4,450</del> เพียง 1,990฿ <span class="text-success blink_me">ส่งฟรี!</span></label>
            </div>
            <div class="form-check mb-3">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro4" value="คิวอินคา 9กระปุก 3380">
              <label class="form-check-label" for="pro4">9 กระปุก <del>8,010</del> เพียง 3,380฿ <span class="text-success blink_me">ส่งฟรี!</span></label>
            </div>
            <div class="form-check mb-3">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro5" value="คิวอินคา 12กระปุก 4380">
              <label class="form-check-label" for="pro5">12 กระปุก <del>10,680</del> เพียง 4,380฿ <span class="text-success blink_me">ส่งฟรี!</span></label>
            </div>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">ชื่อของคุณ</label>
            <input v-model="formData.name" type="text" class="form-control" id="name" name="name" placeholder="" required="required">
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label">เบอร์มือถือของคุณ <span class="text-info"><small>เราจะติดต่อคุณด้วยเบอร์นี้</small></span></label>
            <input v-model="formData.mobile" type="tel" class="form-control" id="mobile" name="mobile" placeholder="" required="required">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่สำหรับจัดส่งสินค้า</label>
            <textarea v-model="formData.address" class="form-control" id="address" name="address" rows="3" required="required"></textarea>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">หมายเหตุ/ฝากข้อความ (ไม่ระบุก็ได้)</label>
            <textarea v-model="formData.description" class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
          <div class="mb-3 text-center">
            <button :disabled="!checkFormOrder" class="btn btn-success btn-lg" @click="confirmOrder()">ยืนยันการสั่งซื้อ</button>
          </div>
        
      </div>
    </div>

    <thank-you v-if="showResponse"></thank-you>

  </main>

  <footer class="blog-footer mb-5 mb-0 mb-lg-0 mb-md-0 mb-sm-5">
    <p>Sales Page by <a href="https://www.fdtech.co.th/" target="_blank">FDTECH</a></p>
   
  </footer>  
  </body>
</html>

<script src="dist/js/app.js"></script>