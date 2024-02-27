<h1>Thêm chuyên mục</h1>
<form action="<?php echo route('categories.add')?>" method="POST"  >
    <div class="">
        <input type="text" name="category_name" placeholder="tên chuyên mục" value="<?php echo $old?>" >
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>" >
    <button type="submit" >Submit</button>
</form>