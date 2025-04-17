<h1>edit</h1>

@csrf
@method('PUT')

<form action="{{route(name: 'menu.update', parameters: $menu)}}" method="POST">
    <label for="productnaam">Productnaam</label>
    <input type="text" name="productnaam" value="{{ $menu->productnaam }}">
    <button type="submit">Submit</button>
</form>