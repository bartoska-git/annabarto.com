<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Anna Barto' : 'Anna Barto | Product Strategy & Media Innovation'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'warm-beige': '#F6F1E7',
                        'olive-grey': '#8A8F7A',
                        'soft-terracotta': '#C9866A',
                        'deep-espresso': '#3B2F2F',
                        'light-beige': '#FAF6F0',
                    },
                    fontFamily: {
                        'outfit': ['Outfit', 'sans-serif'],
                        'dm-sans': ['"DM Sans"', 'sans-serif'],
                    },
                    borderRadius: {
                        'card': '12px',
                        'button': '8px',
                    },
                    boxShadow: {
                        'soft': '0 4px 20px rgba(0, 0, 0, 0.05)',
                    }
                },
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @media (min-width: 768px) {
            .clip-diagonal {
                clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
            }
        }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slideDown { animation: slideDown 0.2s ease-out; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="font-dm-sans">
