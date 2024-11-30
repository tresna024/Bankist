<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Everything you need in a modern bank and more" />
    <meta name="keywords" content="Online bank, Bankist bank, Fictional bank" />
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Bankist" />
    <meta property="og:description" content="Everything you need in a modern bank and more" />
    <meta property="og:image" content="https://bankist-bank.vercel.app/img/logo.png" />
    <meta property="og:url" content="https://bankist-bank.vercel.app/" />
    <meta property="og:type" content="website" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('bankist-main/public') }}/img/icon.webp" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bankist-main/public') }}/css/login.css" />
    <link rel="stylesheet" href="{{ asset('bankist-main/public') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('bankist-main/public') }}/css/responsive.css" />
    <title>Login - Bankist</title>
</head>

<body>
    <!-- TOP NAVIGATION -->
    <header class="login-nav">
        <img src="{{ asset('bankist-main/public') }}/img/logo.png" alt="Bankist logo" class="logo" />
        <article class="login-heading">
            <h1 class="welcome">Log in to get started</h1>
            <div class="tooltip">
                <img class="hint-icon" alt="Get a hint" src="{{ asset('bankist-main/public') }}/img//questions.webp" />
                <article class="tooltiptext">
                    <p>Username: <span>ww</span></p>
                    <p>Password: <span>1111</span></p>
                </article>
            </div>
        </article>
        <form class="login">
            <input type="text" placeholder="user" class="login__input login__input--user" />
            <input type="password" autocomplete="" placeholder="password" maxlength="4"
                class="login__input login__input--password" />
            <button class="login__btn">&rarr;</button>
            <p class="warning-text"></p>
        </form>

        <a class="back-to-main" href="{{ route('home') }}">Back to main </a>
    </header>

    <main class="app">
        <!-- BALANCE -->
        <div class="balance">
            <div>
                <p class="balance__label">Current balance</p>
                <p class="balance__date">
                    As of <span class="date">05/03/2037</span>
                </p>
            </div>
            <p class="balance__value">0000€</p>
        </div>

        <!-- MOVEMENTS -->
        <div class="movements">
            <div class="movements__row">
                <div class="movements__type movements__type--deposit">2 deposit</div>
                <div class="movements__date">3 days ago</div>
                <div class="movements__value">4 000€</div>
            </div>
            <div class="movements__row">
                <div class="movements__type movements__type--withdrawal">
                    1 withdrawal
                </div>
                <div class="movements__date">24/01/2037</div>
                <div class="movements__value">-378€</div>
            </div>
        </div>

        <!-- SUMMARY -->
        <div class="summary">
            <p class="summary__label">In</p>
            <p class="summary__value summary__value--in">0000€</p>
            <p class="summary__label">Out</p>
            <p class="summary__value summary__value--out">0000€</p>
            <p class="summary__label">Interest</p>
            <p class="summary__value summary__value--interest">0000€</p>
            <button class="btn--sort">&downarrow; SORT</button>
        </div>

        <!-- OPERATION: TRANSFERS -->
        <div class="operation operation--transfer">
            <h2>Transfer money</h2>
            <form class="form form--transfer">
                <input type="text" class="form__input form__input--to" />
                <input type="number" class="form__input form__input--amount" />
                <button class="form__btn form__btn--transfer">&rarr;</button>
                <label class="form__label">Transfer to</label>
                <label class="form__label">Amount</label>
            </form>
        </div>

        <!-- OPERATION: LOAN -->
        <div class="operation operation--loan">
            <h2>Request loan</h2>
            <form class="form form--loan">
                <input type="number" class="form__input form__input--loan-amount" />
                <button class="form__btn form__btn--loan">&rarr;</button>
                <label class="form__label form__label--loan">Amount</label>
            </form>
        </div>

        <!-- OPERATION: CLOSE -->
        <div class="operation operation--close">
            <h2>Close account</h2>
            <form class="form form--close">
                <input type="text" class="form__input form__input--user" />
                <input type="password" maxlength="6" class="form__input form__input--pin" autocomplete="" />
                <button class="form__btn form__btn--close">&rarr;</button>
                <label class="form__label">Confirm user</label>
                <label class="form__label">Confirm PIN</label>
            </form>
        </div>
        <a class="back-to-main" href="https://bankist-bank.vercel.app/">Back to main
        </a>
        <button class="btn logout">Log out</button>

        <!-- LOGOUT TIMER -->
        <p class="logout-timer">
            You will be logged out in <span class="timer">05:00</span>
        </p>
    </main>
    <script src="{{ asset('bankist-main/public') }}/login.js"></script>
</body>

</html>
