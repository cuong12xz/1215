<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Thư viện jquery đã nén phục vụ cho bootstrap.min.js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Thư viện popper đã nén phục vụ cho bootstrap.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- Bản js đã nén của bootstrap 4, đặt dưới cùng trước thẻ đóng body-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            color: #3b3b3b;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            background: #2b2b2b;
        }


        .wrapper {
            margin: 0 auto;
            padding: 40px;
            max-width: 800px;
        }

        .table {
            margin: 0 0 40px 0;
            width: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            display: table;
        }


        .row {
            display: table-row;
            background: #f6f6f6;
        }

        :nth-of-type(odd) {
            background: #e9e9e9
        }

        .header {
            font-weight: 900;
            color: #ffffff;
            background: #ea6153;
        }

        .green {
            background: #27ae60;
        }

        .blue {
            background: #2980b9;
        }



        .cell {
            padding: 6px 12px;
            display: table-cell;
        }
    </style>
</head>

<body>
    <div class="wrapper">


            <caption >Link trang WEBSITE của nhóm<a href="http://bandocacloai.000webhostapp.com/">http://bandocacloai.000webhostapp.com/</a></caption>
                   <br> <caption >Bảng phân công công việc cho đồ án giữa kỳ môn Lập trình web</caption><br>
        <div class="table">
        
            <div class="row header green">
                <div class="cell">
                    Mã số sinh viên
                </div>
                <div class="cell">
                    Tên sinh viên
                </div>
                <div class="cell">
                    Công việc
                </div>
                <div class="cell">
                    Phần trăm đóng góp
                </div>

                <div class="cell">
                    Chức vụ
                </div>
            </div>


            <div class="row">
                <div class="cell" data-title="Product">
                    DH51800085
                </div>
                <div class="cell" data-title="Unit Price">
                    Nguyễn Tăng Thảo
                </div>
                <div class="cell" data-title="Quantity">
                    Làm user
                </div>
                <div class="cell" data-title="Date Sold">
                    30%
                </div>
                <div class="cell" data-title="Status">
                    Thành viên
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="Product">
                    DH51801584
                </div>
                <div class="cell" data-title="Unit Price">
                    Võ Phương Nam
                </div>
                <div class="cell" data-title="Quantity">
                    Làm admin
                </div>
                <div class="cell" data-title="Date Sold">
                    40%
                </div>
                <div class="cell" data-title="Status">
                    Thành viên
                </div>
            </div>
            <div class="row">
                <div class="cell" data-title="Product">
                    DH51804380
                </div>
                <div class="cell" data-title="Unit Price">
                    Ngô Anh Cương
                </div>
                <div class="cell" data-title="Quantity">
                    Làm user và file báo cáo
                </div>
                <div class="cell" data-title="Date Sold">
                    30%
                </div>
                <div class="cell" data-title="Status">
                    Trưởng nhóm
                </div>
            </div>


</body>

</html>