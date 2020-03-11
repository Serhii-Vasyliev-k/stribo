<h1>Создать новую категорию</h1>

<form action="{{ route('Category.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <label for="parent_id">Родительская категория</label>
    <select name="parent_id">
        @foreach($categories as $category)
            <option>{{ $category->title }}</option>
        @endforeach
    </select>
    <input type="text" name="title" placeholder="title">
    <input type="text" name="vendor" placeholder="vendor">
    <input type="file" name="image">
    <button type="submit">Добавить</button>
</form>
