<h1>UPload file</h1>
<form action="<?php echo route('categories.upload')?>" enctype="multipart/form-data" method="POST"  >
    <div class="">
    <input type="file" name="photo" id="">
</div>
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>" >
    <button type="submit" >Upload</button>
</form>