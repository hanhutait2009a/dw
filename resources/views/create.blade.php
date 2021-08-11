<!DOCTYPE html>
<html>
<title>Add</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    button{
        margin-left: 50%;
        width: 100px;
    }
</style>
<body>
<div class="w3-container">

    <div class="w3-card-4">
        <div class="w3-container w3-green">
            <h2>Thêm Đồ Nội Thất</h2>
        </div>

        <form class="w3-container" action="/products/list" method="post">
            @csrf

            <p><label>Mã Sản Phẩm</label></p>
            <input class="w3-input w3-border" name="id" type="text">

           <p><label>Tên Sản Phẩm</label></p>
            <input class="w3-input w3-border" name="name" type="text">


            <p><label>Gía Sản Phẩm</label></p>
            <input class="w3-input w3-border" name="price" type="text">


            <p><label>ảnh sản phẩm</label>
            <input class="w3-input w3-border" name="img" type="text">


            <p><button type="submit" class="w3-btn w3-blue w3-round-xxlarge" >Thêm</button></p>
        </form>
    </div>
</div>

</body>
</html>
