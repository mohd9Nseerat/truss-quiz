<?php
// index.php
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero Force Members Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
    <style>
        @keyframes confetti {
            0% {
                transform: translateY(0) rotate(0);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(720deg);
                opacity: 0;
            }
        }
        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #ffd700;
            border-radius: 50%;
            animation: confetti 2s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen py-6 flex flex-col justify-center">
        <div class="max-w-2xl mx-auto p-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-4">
                    <h2 class="text-xl font-bold text-center mb-4">
                        اختر Zero Force Members
                    </h2>
                    
                    <?php include 'truss.php'; ?>
                    
                    <div id="message" class="mt-4 p-4 rounded-lg bg-gray-100 hidden"></div>
                    
                    <div class="text-center mt-4">
                        <p>اضغط على الأعضاء التي تعتقد أنها zero force members</p>
                        <p class="text-sm text-gray-600 mt-2">
                            عدد الأعضاء المحددة: <span id="selected-count">0</span> / 1
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>