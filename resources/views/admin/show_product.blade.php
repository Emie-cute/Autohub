<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

      .center
      {
        margin:auto;
        width: 50%;
        border: 5px solid white;
        text-align: center;
        margin-top: 40px;
      }

      .font-size
      {
        text-align: center;
        font-size: 40px;
        padding-top: 20px; 
      }

    </style>
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
        
          <h2 class="font_size">All Products</h2>

        <table class="center">

        <tr>
          <th> Product_title</th><th> Description</th><th> Quantity</th><th> Category</th><th> Price</th><th> Discount_Price</th><th> Product_Image</th></tr>

        <tr>
          <td>Company car</td><td>Installment</td><td>1</td><td>Nissan</td><td>500000</td><td>5000</td><td></td>
        </tr>
        </table>

        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>