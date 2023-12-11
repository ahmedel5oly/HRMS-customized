<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة محموعة جديدة</title>
    <style>
        /* Add your CSS styles here */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        .table-container {
            margin-bottom: 20px;
        }
        .group-input {
            margin-right: 10px;
        }
        .save-button {
            padding: 8px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .save-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <div>
            <input type="text" class="group-input" placeholder="اسم المجموعة">
            <button class="save-button">Save</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>عرض</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                    <th>إضافة</th>
                    <th>الصفحة</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>الموظفين</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>الاعدادات العامة</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>الحضور و الإنصراف</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td><input type="checkbox"></td>
                    <td>تقرير الرواتب</td>
                    <td><input type="checkbox"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
