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

        <a href="{{ route('teachers.getCreateView') }}">Dodaj korepetytora</a>

        <h3>Lista korepetytorów</h3>
        <form action="{{ route('teachers.list') }}" method="get">

            <div>
                <label for="name">Imię i nazwisko: </label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="subject_id">Przedmiot: </label>
                <select name="subject_id" id="subject_id">
                    <option value="null">Wybierz przedmiot</option>
                    <option value="1">Język polski</option>
                    <option value="2">Język angielski</option>
                    <option value="3">Język rosyjski</option>
                    <option value="4">Język niemiecki</option>
                    <option value="5">Język hiszpański</option>
                    <option value="6">Język francuski</option>
                    <option value="7">Matematyka</option>
                    <option value="8">Fizyka</option>
                    <option value="9">Biologia</option>
                    <option value="10">Chemia</option>
                </select>
            </div>
            <div>
                <button type="submit">Filtruj</button>
            </div>
        </form>
        <div class="teachers">
            <table>
                <thead>
                    <tr>
                        <th>lp</th>
                        <th>Imię i nazwisko</th>
                        <th>Przedmiot</th>
                        <th>Ocena: </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a
                                    href="{{ route('teachers.show', ['id' => $teacher->id]) }}">{{ $teacher->name }}</a>
                            </td>
                            <td>{{ $teacher->subject->name }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
