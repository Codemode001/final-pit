<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 4rem;
            color: #28242c;
            font-weight: 600;
        }

        button {
            background-color: #ffc003;
            height: 4rem;
            width: 15rem;
            border-radius: 5px;
            color: white;
            font-size: 2rem;
            font-weight: 600;
            margin-top: 2rem;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        button:hover {
            background-color: #0275d8;
        }

        .confetti-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="confetti-container">
        <!-- Confetti will be rendered here -->
    </div>
    <h1>
        Welcome! <span style="color: #044556;">User</span>
    </h1>
    <a href="/">
        <button>PROCEED</button>
    </a>

    <!-- Include the React and ReactDOM libraries -->
    <script src="https://cdn.jsdelivr.net/npm/react@17.0.2/umd/react.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom@17.0.2/umd/react-dom.production.min.js"></script>

    <!-- Include the React Confetti Explosion library -->
    <script src="https://cdn.jsdelivr.net/npm/react-confetti-explosion@2.0.1/dist/react-confetti-explosion.min.js"></script>

    <script>
        const { useState } = React;
        const { render } = ReactDOM;
        const { ConfettiExplosion } = ReactConfettiExplosion;

        const App = () => {
            const [isExploding, setIsExploding] = useState(true);

            return (
                <div>
                    {isExploding && <ConfettiExplosion />}
                    <h1>
                        Welcome! <span style="color: #044556;">User</span>
                    </h1>
                    <a href="/">
                        <button>PROCEED</button>
                    </a>
                </div>
            );
        };

        render(<App />, document.getElementById('root'));
    </script>
</body>
</html>
