<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 align="center">Add Game</h1>
        <form class="container" method="post" action="{{ route('games.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                 <select class="form-control" name="genres[]" multiple>
                    @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">
                        {{ $genre->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher">
            </div>
            <div class="mb-3">
                <label class="form-label">Release Date</label>
                <input type="date" class="form-control" name="release_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Ram</label>
                <input type="text" class="form-control" name="ram">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Storage</label>
                <input type="text" class="form-control" name="storage">
            </div>
            <div class="mb-3">
                <label class="form-label">Gpu</label>
                <input type="text" class="form-control" name="gpu">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>