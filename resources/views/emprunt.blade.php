<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center">BORROW LIST</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Formulaire d'emprunt -->
            <form action="{{ url('/emprunt') }}" method="POST" class="border p-4 rounded bg-white">
                @csrf
                <div class="mb-3">
                    <label for="user_id" class="form-label">Utilisateur:</label>
                    <select name="user_id" id="user_id" class="form-select">
                        @foreach ($users as $user)
                            @if ($user->level == 'Reader')
                                <option value="{{ $user->id }}">{{ $user->fname }} - {{ $user->lname }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="book_id" class="form-label">Livre:</label>
                    <select name="book_id" id="book_id" class="form-select">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->Title }} - {{ $book->Author }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="DateEmprunt" class="form-label">Date d'emprunt:</label>
                    <input type="date" name="DateEmprunt" id="DateEmprunt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="DateRetour" class="form-label">Date de retour:</label>
                    <input type="date" name="DateRetour" id="DateRetour" class="form-control" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Emprunter</button>
            </form>
        </div>
    </div>
</div>
<script>
    // Calculer automatiquement la date de retour 14 jours après la date d'emprunt
    document.getElementById('DateEmprunt').addEventListener('change', function() {
        const DateEmprunt = new Date(this.value);
        const DateRetour = new Date(DateEmprunt.getTime() + 14 * 24 * 60 * 60 * 1000); // Ajoute 14 jours en millisecondes
        document.getElementById('DateRetour').value = DateRetour.toISOString().substr(0, 10); // Format YYYY-MM-DD
    });
</script>
</body>
</html>
