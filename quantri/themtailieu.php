<?php
require('includes/header.php');
?>

<form class="user" method = "post" action = "addproduct.php" enctype ="multipart/form-data">
    
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="nametext"
                placeholder="Tên tài liệu">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="nameproject"
                placeholder="Tên môn học"></input>
        </div>

        <div class="form-group">
            <textarea type="text" class="form-control form-control-user" name="description"
            placeholder="Mô tả chi tiết"></textarea>
        </div>
        <!-- <div class="form-group row">
            <div class="col-sm-4 mb-sm-0">
                <input type="text" class="form-control form-control-user"
                    name="stock" placeholder="Số lượng">
            </div>
            <div class="col-sm-4 mb-sm-0">
                <input type="text" class="form-control form-control-user"
                    name="price" placeholder="Giá gốc">
            </div>
            <div class="col-sm-4 mb-sm-0">
                <input type="text" class="form-control form-control-user"
                    name="discount" placeholder="Giảm bán">
            </div>
        </div> -->
        
        <div class="form-group">
            <label class="form-label">Thêm tài liệu</label>
            <input type="file" class="form-control form-control-user" name="imageproduct[]" id = "imageproduct"
            multiple >
        </div>

    <button class="btn btn-primary btn-user btn-block"> Thêm mới</button>
</form>

<?php
require('includes/footer.php')
?>