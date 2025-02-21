<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/personalforn.css')}}">

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
            <input type="date" id="date" name="date" placeholder="Enter the date...">
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
        @include('block.error')
    </form>
    @if(isset($users) && count($users) > 0)
        <div class="overlap" id="overlap">
            <div class="result">
                <button type="button" id="close-overlay" class="close-btn"
                    style="float: right; background: transparent; border: none; font-size: 20px;">
                    X
                </button>
                @foreach($users as $index => $user)
                    <h3>Person {{ $index}}: <b>{{ $user['name'] }}</b></h3>
                    <div class="form-container">
                        <p><strong>Name:</strong> {{ $user['name'] }}</p>
                        <p><strong>Age:</strong> {{ $user['age'] }}</p>
                        <p><strong>Date:</strong> {{ $user['date'] }}</p>
                        <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
                        <p><strong>Web:</strong> {{ $user['web'] }}</p>
                        <p><strong>Address:</strong> {{ $user['address'] }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    @endif

    <script src="js/personalform.js">
    </script>
</body>

</html>