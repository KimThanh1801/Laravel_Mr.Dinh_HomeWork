<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/personalforn.css')}}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .overlap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Màu nền đen mờ */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .result {
            max-width: 600px;
            background-color: #fff;
            box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <form action="{{ url('/personalform') }}" method="POST" id="form">
        @csrf
        <h2>Personal</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name...">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" min="1" id="age" name="age" placeholder="Enter your age...">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" id="date" name="date" placeholder="Enter the date...">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" placeholder="Enter your phone number...">
        </div>
        <div class="form-group">
            <label for="web">Web</label>
            <input type="url" id="web" name="web" placeholder="Enter your website URL...">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your address...">
        </div>
        <div class="button">
            <button type="submit">OK</button>
        </div>
        {{-- Hiển thị lỗi validate (nếu có) --}}
        @include('block.error')
    </form>

    {{-- Overlay hiển thị kết quả nếu có dữ liệu --}}
    @if(isset($personal))
        <!-- Thêm ID="overlap" -->
        <div class="overlap" id="overlap">
            <div class="result">
                <button type="button" id="close-overlay" class="close-btn"
                    style="float: right; background: transparent; border: none; font-size: 20px;">
                    X
                </button>
                <h3>Personal Information</h3>
                <table border="1" style="border-collapse: collapse; margin-top: 20px; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Phone</th>
                            <th>Web</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personal['name'] }}</td>
                            <td>{{ $personal['age'] }}</td>
                            <td>{{ $personal['date'] }}</td>
                            <td>{{ $personal['phone'] }}</td>
                            <td>{{ $personal['web'] }}</td>
                            <td>{{ $personal['address'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <script>
        const closeOverlap = document.getElementById('close-overlay');
        const form = document.getElementById('form');
        const overlap = document.getElementById('overlap');

        if (closeOverlap) {
            closeOverlap.onclick = function () {
                overlap.style.display = 'none';
                form.style.display = 'block';
            }
        }
    </script>
</body>

</html>