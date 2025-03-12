<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
</head>
<body>
    <h1>Create New Item</h1>
   


<form action="{{ route('products.store') }}" method="POST">
    @csrf
    @error('title')
    <p style="color: red">{{ $message }}</p>        
        @enderror
    <label for="title">Nomi:</label>
    <input type="text" name="title" ><br>

    @error('description')
    <p style="color: red">{{ $message }}</p>
        
    @enderror
    <label for="description">Tavsif:</label>
    <textarea name="description"></textarea><br>

    

    @error('price')
    <p style="color: red">{{ $message }}</p>
        
    @enderror
    <label for="price">Narxi:</label>
    <input type="text" name="price" step="0.01" ><br>
    @error('discount')
    <p style="color: red">{{ $message }}</p>
        
    @enderror
    <label for="discount">Chegirma (%):</label>
    <input type="text" name="discount" step="0.01" min="0" max="100"><br>

    <button type="submit">Saqlash</button>
</form>

</div>
</body>
</html>