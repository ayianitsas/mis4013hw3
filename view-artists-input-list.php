<select class="form-select" id="cName" name="cName">
 <?php
while ($artistItem = $artistList->fetch_assoc()) {
  $selText = "";
  if ($selectedArtist == $artistItem['artist_id']) {
   $selText = " selected";
  }
?>
    <option value="<?php echo $artistItem['artist_id']; ?>"<?=$selText?>><?php echo $artistItem['artist_name']; ?></option>
<?php
}
?>
</select>
