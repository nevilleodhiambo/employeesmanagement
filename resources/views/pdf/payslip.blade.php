{{-- <!DOCTYPE html>
<html>
<head>
    <title>Payslip</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    p {
        margin: 10px 0;
    }
    .payslip {
        width: 80%;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        background-color: #f9f9f9;
    }
</style>
</head>
<body>
<div class="payslip">
    <h1>Payslip</h1>
    <p>Employee Name: Neville Odhiambo</p>
    <p>Employee ID: 36979012</p>
    <p>Salary:60000</p>
    <!-- Add more details as needed -->
</div>
</body>
</html> --}}


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Payslip</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .payslip {
            background-color: #f9f9f9;
            padding: 20px;
        }
        .employee-info {
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container payslip">
        <h1 class="text-center">Payslip</h1>
        <div class="employee-info">
            <p>Employee Name: Nevil Odhiambo</p>
            <p>Employee ID: 36979012</p>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Earnings</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic Salary</td>
                        <td>41000</td>
                    </tr>
                    <tr>
                        <td>Bonuses</td>
                        <td>10000</td>
                    </tr>
                    <!-- Add more earnings and deductions rows as needed -->
                </tbody>
            </table>
        </div>
        <p><strong>Total Earnings:</strong> 51000</p>
        <p><strong>Total Deductions:</strong>60000</p>
        <p><strong>Net Salary:</strong> 47000</p>
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Payslip</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .payslip {
            background-color: #f5f5f5;
            padding: 20px;
        }
        .employee-info {
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container payslip">
        <h1 class="text-center">Payslip</h1>
        <div class="employee-info">
            <p>Employee Name: Neville Odhiambo</p>
            <p>Employee ID:36979012</p>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Earnings</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Basic Salary</td>
                        <td>78000</td>
                    </tr>
                    <tr>
                        <td>Bonuses</td>
                        <td>14000</td>
                    </tr>
                    <!-- Add more earnings and deductions rows as needed -->
                </tbody>
            </table>
        </div>
        <p><strong>Total Earnings:</strong> 92000</p>
        <p><strong>Total Deductions:</strong> 12000</p>
        <p><strong>Net Salary:</strong> 80000</p>
        <p class="text-muted">Printed on: {{ now() }}</p>
<p class="text-muted">Printed on: {{ \Carbon\Carbon::now()->format('l, F j, Y h:i A') }}</p>

    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Payslip</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .payslip {
            background-color: #f5f5f5;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container payslip">
        <h1 class="text-center">Payslip</h1>
        <p class="text-muted">Printed on: {{ now() }}</p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Employee Name</td>
                    <td>Neville Odhiambo</td>
                </tr>
                <tr>
                    <td>Employee ID</td>
                    <td>36979012</td>
                </tr>
                <tr>
                    <td>Basic Salary</td>
                    <td>78000</td>
                </tr>
                <tr>
                    <td>Bonuses</td>
                    <td>70000</td>
                </tr>
                <!-- Add more earnings and deductions rows as needed -->
                <tr>
                    <td><strong>Total Earnings</strong></td>
                    <td><strong>92000</strong></td>
                </tr>
                <tr>
                    <td><strong>Total Deductions</strong></td>
                    <td><strong>12000</strong></td>
                </tr>
                <tr>
                    <td><strong>Net Salary</strong></td>
                    <td><strong>80000</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>



