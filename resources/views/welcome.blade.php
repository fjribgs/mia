<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bagaskara</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    @if (Auth::check())
        <h2>Welcome {{ Auth::user()->name }}!!!</h2>

        <a href="{{ route('auth.logout') }}">logout</a>
    @else
        <h2>Please login first!</h2>

        <a href="{{ route('auth.login') }}">login</a>
    @endif
    <div class="collapse collapse-plus bg-base-100 border border-base-300">
        <input type="radio" name="my-accordion-3" checked="checked" />
        <div class="collapse-title font-semibold">How do I create an account?</div>
        <div class="collapse-content text-sm">Click the "Sign Up" button in the top right corner and follow the
            registration process.</div>
    </div>
    <div class="collapse collapse-plus bg-base-100 border border-base-300">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title font-semibold">I forgot my password. What should I do?</div>
        <div class="collapse-content text-sm">Click on "Forgot Password" on the login page and follow the instructions
            sent to your email.</div>
    </div>
    <div class="collapse collapse-plus bg-base-100 border border-base-300">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title font-semibold">How do I update my profile information?</div>
        <div class="collapse-content text-sm">Go to "My Account" settings and select "Edit Profile" to make changes.
        </div>
    </div>

</body>

</html>
