<div class="container">
   <div class="jumbotron">
      <form action="<?= URLROOT ?>/items/itemcreate" method="post">
         <div class="form-group">
            <label>description</label>
            <input type="text" class="form-control" name="description">
         </div>
         <div class="form-group">
            <label>Typenumber</label>
            <input type="text" class="form-control" name="typenr">
         </div>
         <div class="form-group">
            <label>Purchasedate</label>
            <input type="text" class="form-control" name="purchasedate">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="prijs" >
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>