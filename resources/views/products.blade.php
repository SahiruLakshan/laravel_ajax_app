<!DOCTYPE html>
<html>
<head>
    <title>Laravel AJAX CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2>Product CRUD</h2>

<input type="hidden" id="product_id">

<input type="text" id="name" placeholder="Product Name">
<input type="number" id="price" placeholder="Price">
<button id="save">Save</button>

<hr>

<table border="1" width="50%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="productTable">
        @foreach($products as $product)
        <tr id="row{{ $product->id }}">
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <button onclick="editProduct({{ $product->id }})">Edit</button>
                <button onclick="deleteProduct({{ $product->id }})">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// CREATE & UPDATE
$('#save').click(function(){
    let id = $('#product_id').val();
    let url = id ? `/products/update/${id}` : `/products/store`;

    $.post(url, {
        name: $('#name').val(),
        price: $('#price').val()
    }, function(data){
        location.reload();
    });
});

// EDIT
function editProduct(id){
    $.get(`/products/edit/${id}`, function(data){
        $('#product_id').val(data.id);
        $('#name').val(data.name);
        $('#price').val(data.price);
    });
}

// DELETE
function deleteProduct(id){
    if(confirm('Are you sure?')){
        $.ajax({
            url: `/products/delete/${id}`,
            type: 'DELETE',
            success: function(){
                $('#row'+id).remove();
            }
        });
    }
}
</script>

</body>
</html>
