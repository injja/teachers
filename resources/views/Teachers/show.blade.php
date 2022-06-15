<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <a href="{{ route('teachers.list') }}">Powrót</a>
        <h3>{{ $teacher->name }}</h3>
        <ul>
            <li>Email: {{ $teacher->email_adress }}</li>
            <li>Numer telefonu: {{ $teacher->phone_number }}</li>
            <li>Doświadczenie: {{ $teacher->experience }}</li>
            <li>Wykształcenie: {{ $teacher->education }}</li>
            <li>Przedmiot: {{ $teacher->subject->name }}</li>
        </ul>
        <div class="buttons">
            <form action={{ route('teachers.destroy', ['id' => $teacher->id]) }} method="post">
                <button type="submit" style="margin-top:10px">Usuń nauczyciela</button>
            </form>
            <form action={{ route('teachers.getUpdateView', ['id' => $teacher->id]) }}>
                <button type="submit" style="margin-top:10px">Edytuj</button>
            </form>

            <form action={{ route('email.getSendEmailView', ['id' => $teacher->id]) }}>
                <button type=" submit" style="margin-top:10px">Wyślij wiadomość</button>
            </form>
        </div>

    </div>

    <div class="  review_panel" style="margin-top: 30px">

        <div class="create_review">
            <h3>Dodaj opinię o korepetytorze: </h3>
            <form action="{{ route('reviews.create', ['teacher_id' => $teacher->id]) }}" method="post">

                <input type="text" name="teacher_id" id="teacher_id" value="{{ $teacher->id }}" hidden>

                <div>
                    <label for="username">Pseudonim: </label>
                    <input type="text" name="username" id="username">
                </div>

                <div>
                    <label for="rating">Ocena: </label>
                    <select type="integer" name="rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div>
                    <label for="review">Treść recenzji: </label>
                    <input type="text" name="review" id="review">
                </div>

                <button type="submit" style="margin-top:10px">Dodaj recenzję</button>
            </form>
        </div>

        <div class=" show_reviews" style="margin-top: 30px">
            <h3>Opinie: </h3>
        </div>



        @foreach ($reviews as $review)
            <ul>
                <li><b>Opinia od: </b>{{ $review->username }}</li>
                <li><b>Ocena: </b>{{ $review->rating }}/5</li>
                <li>{{ $review->review }}</li>
            </ul>
        @endforeach

    </div>


</body>

</html>
