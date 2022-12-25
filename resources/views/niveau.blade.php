<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<table>
    <thead>
    <tr>
        <th>NOM</th>
            <th>Description</th>
        
        </th>
    </tr>
    </thead>
    <tbody>
        
    @foreach ($niveau as $niveaus)
                        <tr>
                            <td>{{$niveaus->nom}}</td>
                            <td>{{$niveaus->description}}</td>
                            
                            
                        </tr>
                        @endforeach
 
                           </tbody>
</table>
</body>
</html>