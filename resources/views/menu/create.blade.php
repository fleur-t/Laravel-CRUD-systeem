<h1>Nieuwe post aanmaken</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label>Titel</label>
    <input type="text" name="title" required><br>

    <label>Inhoud</label>
    <textarea name="body" required></textarea><br>

    <button type="submit">Opslaan</button>
</form>
