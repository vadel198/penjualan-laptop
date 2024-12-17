<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .login-header {
            background: #5a67d8;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .login-header h3 {
            margin: 0;
            font-size: 24px;
        }
        .login-header p {
            margin: 5px 0 0;
            font-size: 14px;
        }
        .card-body {
            padding: 30px;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            border-radius: 10px;
            background: #5a67d8;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: #4c51bf;
        }
        .forgot-password {
            font-size: 14px;
            color: #5a67d8;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 15px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card login-card">
                    <!-- Header Section -->
                    <div class="login-header">
                        <h3>Welcome Back</h3>
                        <p>Login to your account</p>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Error Message -->
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Login Form -->
                        <form action="{{ route('loginproccess') }}" method="POST">
                            @csrf

                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fas fa-sign-in-alt me-2"></i> Login
                                </button>
                            </div>

                            <!-- Forgot Password Link -->
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
