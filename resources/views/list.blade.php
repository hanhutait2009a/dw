<!DOCTYPE html>
<html>
<title>List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
    <h2>Danh sách sản phẩm Đồ Nội Thất</h2>

    <table class="w3-table-all">
        <thead>
        <tr class="w3-light-grey">
            <th>Mã</th>
            <th>Tên</th>
            <th>Gía</th>
            <th>ảnh</th>
        </tr>
        </thead>
        @foreach($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->img}}</td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>
