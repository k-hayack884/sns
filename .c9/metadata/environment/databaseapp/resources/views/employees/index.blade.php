{"filter":false,"title":"index.blade.php","tooltip":"/databaseapp/resources/views/employees/index.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":25,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <title>Employees</title>","    </head>","    <body>","        <h1>Employees</h1>","        <table>","            <tr>","                <th>ID</th>","                <th>氏名</th>","                <th>部署</th>","                <th>基本給</th>","            </tr>","            @foreach ($employees as $employee)","                <tr>","                    <td>{{ $employee->id }}</td>","                    <td>{{ $employee->employee_name }}</td>","                    <td>{{ $employee->section }}</td>","                    <td>{{ $employee->salary }}</td>","                </tr>","            @endforeach","        </table>","    </body>","</html>"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":36},"end":{"row":17,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1637125661302,"hash":"9b1e69a9e78e20a95f043c103ed72c111e986d7f"}