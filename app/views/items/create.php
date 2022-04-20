<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/items/itemcreate" method="post">
         <div class="form-group">
            <label>description</label>
            <input type="text" class="form-control" name="description" placeholder="Enter description">
         </div>
         <div class="form-group">
            <label>Typenumber</label>
            <input type="text" class="form-control" name="typenr" placeholder="Enter typenumber">
         </div>
         <div class="form-group">
            <label>Purchasedate</label>
            <input type="text" class="form-control" name="purchasedate" placeholder="Enter purchaseDtm">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="prijs" placeholder="Enter price">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>