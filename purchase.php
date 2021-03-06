<?php 
  include "layout/header.php";
?>
<!-- title  -->
<section class="domestic-purchase mt-5">
  <div class="row">
       <div class="col s12 title-step">
           <h4>Domestic Purchase</h4>
            <div class="btn-add">
              <a class="waves-effect waves-light btn">Add New Purchase</a>   
             </div>
    </div>
  </div>

    <div class="row">
          <!-- display table purchase -->
      <div class="col s12" id="table-purchase" style="overflow-x: auto;">
        <table class="striped table-purchase">
          <thead>
            <tr>
                <th>Date</th>
                <th>Invoice</th>
                <th>Vendor</th>
                <th>Country</th>
                <th>PIC</th>
                <th>Phone</th>
                <th>Total Purchase</th>
                <th>Payment</th>
                <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>14 May 2022</td>
              <td>INV/2022/2669</td>
              <td>Toraya</td>
              <td>Indonesia</td>
              <td>Joko</td>
              <td>081413422201</td>
              <td>Rp.1,050,000</td>
              <td>Online Payment</td>
              <td>
                  <a class="waves-effect waves-light disable" style="color: white; padding:2px;" href="detail_purchase.php">waiting list</a>
              </td>
            </tr>
            <tr>
              <td>14 May 2022</td>
              <td>INV/2022/2669</td>
              <td>Toraya</td>
              <td>Indonesia</td>
              <td>Joko</td>
              <td>081413422201</td>
              <td>Rp.1,050,000</td>
              <td>Online Payment</td>
              <td>
                  <a class="waves-effect waves-light disable" style="color: white; padding:2px;" href="detail_purchase.php">waiting list</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
          <div class="operation-purchase">
            <p class="search">Search</p>
            <div class="input-field">
              <i class="material-icons prefix">youtube_searched_for</i>
              <input type="text" id="autocomplete-input" class="autocomplete">
              <label for="autocomplete-input">cari invoice</label>
            </div>
              <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Sort By</a>

              <!-- Dropdown Structure -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Date</a></li>
                    <li><a href="#!">Delivery</a></li>
                    <li><a href="#!">Invoice</a></li>
                  </ul>
                  <!-- radio btn filter data  -->
                  <p class="mt-2">Order</p>
                  <form action="#">
                  <p>
                    <label>
                      <input class="with-gap" name="group1" type="radio"  />
                      <span>Asscending ( A - Z )</span>
                    </label>
                    <label>
                      <input class="with-gap" name="group1" type="radio"  />
                      <span>Descending ( Z - A )</span>
                    </label>
                  </p>
                  </form>
          </div>
        
</section>

<?php 
  include "layout/footer.php";
?>