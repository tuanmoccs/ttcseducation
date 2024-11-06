<?php
require('includes/header.php');
function anhdaidien($arrstring,$height){
    $arr = explode(";",$arrstring);
    return "<img src = '$arr[0]' height = '$height'/>";
}
?>
<div>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách phân loại sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên tài liệu</th>
                                            <th>Môn</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Tên tài liệu</th>
                                            <th>Môn</th>
                                            <th>Option</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php require('../ketnoi/connect.php');
                                        $sql_str = "select  products.id as pid,
                                        products.name as pname,
                                        images,
                                        description,
                                        price,
                                        disscounted_price,
                                        stock,
                                        categories.name as catename,
                                        brands.name as brname,
                                        products.status as pstatus
                                        from products,categories,brands 
                                        where products.category_id= categories.id and products.brand_id = brands.id order by products.name";
                                        $result = mysqli_query($conn,$sql_str);
                                        while($row = mysqli_fetch_assoc($result)){
                                            ?>
       
                                        <tr>
                                            <td><?=$row['pname']?></td>
                                            <td><?=anhdaidien($row['images'],"100px")?></td>
                                            <td><?=$row['description']?></td>
                                            <td><?=$row['price']?></td>
                                            <td><?=$row['disscounted_price']?></td>
                                            <td><?=$row['stock']?></td>
                                            <td><?=$row['catename']?></td>
                                            <td><?=$row['brname']?></td>
                                            <td><?=$row['pstatus']?></td>
                                            <td><a class="btn btn-info" href = "edittext.php?id=<?=$row['pid']?>" style = "margin-bottom : 10px">EDIT</a>
                                            <a href="deletetext.php?id=<?=$row['pid']?>" class = "btn btn-danger" onclick = "confirm('Ban chac chan xoa muc nay?')">DEL</a>
                                            <a href="viewtext.php?id=<?=$row['pid']?>" class = "btn btn-danger" onclick = "confirm('Ban chac chan xoa muc nay?')">DEL</a>
                                        </td>
                                        </tr>
                                        <?php }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>

<?php
require('includes/footer.php')
?>