<!DOCTYPE html>
<html>

<head>
    <title>Slip Gaji {{ $employee->name }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center lh-1 mb-2">
                    <h6 class="font-weight-bold">Slip Gaji</h6> <span class="font-weight-normal">PT. IFISH Sejahtera</span>
                </div>
                <br />
                <div class="row">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" class="bg-dark text-white">ID</th>
                                <td>{{ $employee->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-dark text-white">Nama</th>
                                <td>{{ $employee->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-dark text-white">Email</th>
                                <td>{{ $employee->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-dark text-white">Role</th>
                                <td>{{ $employee->role }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-dark text-white">Salary</th>
                                <td>Rp. {{ $employee->salary }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-dark text-white">Bonus</th>
                                <td>Rp. {{ $employee->bonus }}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-dark text-white">Total</th>
                                <td>Rp. {{ $employee->salary + $employee->bonus }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-4">HR IFISH</div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4 font-weight-bold">Sabrina Diza M</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>