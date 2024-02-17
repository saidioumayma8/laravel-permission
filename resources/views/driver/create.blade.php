<!-- resources/views/auth/driver.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('driver.register') }}">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <!-- Add fields for other properties (status, number_seats, etc.) -->

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection
<!-- resources/views/auth/driver.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('driver.register') }}">
            @csrf

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>

            <!-- Add fields for other properties (status, number_seats, etc.) -->

            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection
