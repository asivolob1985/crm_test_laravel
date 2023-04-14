<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>TEST CRM</title>
    </head>
    <body>
        <div class="content">
            <table class="table table-bordered">
                <tr>
                    <td>Пользователь</td>
                    <td>Телефон</td>
                    <td>Страна (КОД)</td>
                    <td>Документы</td>
                </tr>
                @foreach ($users as $user)
                    {{$user->documentTypes}}
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->country->name }} ({{ $user->country->code }})</td>
                        <td>
                            @foreach ($user->docTypes() as $docType => $docs)
                                <p><b>{{ $docType }}: </b></p>
                                @foreach ($docs as $doc)
                                    {{ $doc->field->name }}: {{ $doc->value }}</p>
                                @endforeach
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
