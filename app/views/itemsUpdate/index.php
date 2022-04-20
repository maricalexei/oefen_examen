<form>
<h5>id</h5>
<input type="text" id="id" value="<?= $data["itemData"]->id; ?>"> <br>
<h5>description</h5>
<input type="text" id="description" value="<?= $data["itemData"]->description; ?>"><br>
<h5>typenr</h5>
<input type="text" id="typenr" value="<?= $data["itemData"]->typenr; ?>"><br>
<h5>purchasedate</h5>
<input type="text" id="purchasedate" value="<?= $data["itemData"]->purchasedate; ?>"><br>
<h5>prijs</h5>
<input type="text" id="prijs" value="<?= $data["itemData"]->prijs; ?>"><br>
<button type="button">Update!</button>
</form>