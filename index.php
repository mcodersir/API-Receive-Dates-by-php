<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نمایش تاریخ‌ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font/dist/font-face.css">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            background-color: #f7f7f7;
            direction: rtl;
            text-align: right;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">نمایش تاریخ‌ها</h1>
        <div id="dates-container" class="row justify-content-center"></div>
    </div>

    <script>
        fetch('api/json.php')
            .then(response => response.json())
            .then(data => {
                const container = document.getElementById('dates-container');
                
                const shamsiCard = createCard('تاریخ شمسی', data.shamsi.numeral, data.shamsi.full_date);
                const gregorianCard = createCard('تاریخ میلادی', data.gregorian.numeral, data.gregorian.full_date);
                const hijriCard = createCard('تاریخ قمری', data.hijri.numeral, data.hijri.full_date);
                const astroCard = createCard('برج فلکی', data.astrological_sign, '');

                container.appendChild(shamsiCard);
                container.appendChild(gregorianCard);
                container.appendChild(hijriCard);
                container.appendChild(astroCard);
            })
            .catch(error => console.error('Error fetching data:', error));

        function createCard(title, numeral, fullDate) {
            const card = document.createElement('div');
            card.className = 'card col-md-5';

            const cardHeader = document.createElement('div');
            cardHeader.className = 'card-header';
            cardHeader.textContent = title;

            const cardBody = document.createElement('div');
            cardBody.className = 'card-body';

            const numeralElem = document.createElement('p');
            numeralElem.textContent = `شماره: ${numeral}`;
            cardBody.appendChild(numeralElem);

            if (fullDate) {
                const fullDateElem = document.createElement('p');
                fullDateElem.textContent = `تاریخ کامل: ${fullDate}`;
                cardBody.appendChild(fullDateElem);
            }

            card.appendChild(cardHeader);
            card.appendChild(cardBody);

            return card;
        }
    </script>
</body>
</html>
