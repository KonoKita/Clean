
<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Clean</title>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/quasar@1.15.10/dist/quasar.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>
<div id="app" class="box">
    <div id="header" class="row">
        <div class="header-row">
            <div class="header-row-block-circle"></div>
            <div class="header-row-block">
                <div class="header-row-block-topic">Home</div>
                <div class="header-row-block-topic">Blog</div>
                <div class="header-row-block-topic">Features</div>
                <div class="header-row-block-topic">Pricing</div>
                <div class="header-row-block-topic">Documentation</div>
            </div>

        </div>
        <div class="header-row">
            <div class="header-row-block">
                <div class="header-row-block-image">
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.65597 17V9.24548H8.22501L8.60969 6.2234H5.65597V4.294C5.65597 3.41904 5.89578 2.82278 7.13417 2.82278L8.71368 2.82208V0.119112C8.44051 0.0822826 7.5029 -1.65981e-08 6.41206 -1.65981e-08C4.13475 -1.65981e-08 2.57564 1.40836 2.57564 3.9947V6.2234H-2.3404e-08V9.24548H2.57564V17H5.65597Z"
                              fill="#B6BAC7"/>
                    </svg>
                </div>
                <div class="header-row-block-image">
                    <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.04945 8.72806L11.4957 12.5768C12.1172 12.9048 12.5657 12.735 12.7205 12.0249L14.9374 2.03246C15.1644 1.16206 14.5906 0.76729 13.996 1.02547L0.978404 5.82666C0.0898302 6.16756 0.0950105 6.64173 0.816436 6.85301L4.15705 7.85032L11.8909 3.18335C12.256 2.97158 12.5911 3.08543 12.3161 3.31891"
                              fill="#B6BAC7"/>
                    </svg>
                </div>
                <div class="header-row-block-image">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M17.0328 1.84041C16.4253 2.11761 15.7726 2.30417 15.0877 2.38898C15.7868 1.95807 16.3239 1.27594 16.5767 0.46342C15.9222 0.862259 15.1973 1.15191 14.4257 1.308C13.8081 0.631966 12.9276 0.210602 11.9535 0.210602C10.0832 0.210602 8.56631 1.76886 8.56631 3.69017C8.56631 3.96313 8.59598 4.22867 8.65402 4.48334C5.83853 4.33759 3.3424 2.95159 1.67204 0.847419C1.38053 1.36154 1.2135 1.95887 1.2135 2.59648C1.2135 3.80359 1.81147 4.86853 2.72005 5.49303C2.16541 5.47448 1.64276 5.31812 1.18615 5.05709V5.10081C1.18615 6.7876 2.35476 8.19347 3.90258 8.51347C3.61882 8.59297 3.31957 8.63537 3.01181 8.63537C2.79357 8.63537 2.581 8.61417 2.37462 8.5731C2.80543 9.95591 4.05659 10.9619 5.53864 10.99C4.37931 11.9228 2.91868 12.4793 1.33113 12.4793C1.05768 12.4793 0.788618 12.4634 0.523682 12.4308C2.02249 13.4183 3.80327 13.9944 5.71599 13.9944C11.946 13.9944 15.3531 8.69155 15.3531 4.09365C15.3531 3.94259 15.3498 3.79286 15.3433 3.64313C16.0053 3.15286 16.5798 2.53937 17.0338 1.84107"
                              fill="#6188FF"/>
                    </svg>
                </div>
                <div class="header-row-block-image">
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.0001 2.10651H16.3472C16.1047 2.10651 15.7619 2.45072 15.7619 2.67109V10.6583C15.7619 10.8789 16.1047 11.1796 16.3472 11.1796H17.0001V13.0755H11.084V11.1796H12.3223V2.78361H12.2616L9.36999 13.0755H7.13129L4.277 2.78361H4.20477V11.1796H5.44303V13.0755H0.48999V11.1796H1.12422C1.38542 11.1796 1.72825 10.8789 1.72825 10.6583V2.67109C1.72825 2.45072 1.38542 2.10651 1.12422 2.10651H0.48999V0.210635H6.68355L8.717 7.65872H8.77295L10.8252 0.210635H17.0001V2.10651Z"
                              fill="#757E9A"/>
                    </svg>
                </div>
            </div>
            <div id="getStarted">
                <div class="header-row-block-getStartedButton">
                    <q-btn flat >Get started
                </div>
            </div>
        </div>
    </div>
    <div id="intro" class="row">
        <div class="intro-row">
            <div class="intro-row-plan">PLAN YOUR LIFE</div>
            <div class="intro-row-productivity"><b style="font-weight: 700;">App</b> for your <b>productivity</b></div>
<!--            <div class="intro-row-productivity">Приложение</b></div>-->
            <div class="intro-row-text">Brute laoreet efficiendi id his, ea illum nonumes luptatum pro. Usu atqui laudem an, insolens gubergren similique est cu. Et vel modus congue vituperata.</div>
                <div class="intro-row-circle">
                    <q-btn round color="white">
                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.23077 4.17675C10.2564 4.76486 10.2564 6.23514 9.23077 6.82325L2.30769 10.793C1.28205 11.3811 0 10.646 0 9.46976V1.53024C0 0.354015 1.28205 -0.381125 2.30769 0.206988L9.23077 4.17675Z" fill="#5E81FF"/>
                        </svg>
                </div>
        </div>
        <div id="dot_1" class="dot"></div>
        <div id="dot_2" class="dot"></div>
        <div id="dot_3" class="dot"></div>
        <div id="dot_4" class="dot"></div>
        <svg id="speed" width="152" height="128" viewBox="0 0 152 128" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <mask id="path-1-inside-1" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M122 23C122 21.3431 120.657 20 119 20H33C31.3431 20 30 21.3431 30 23V80.26C30 81.9168 31.3431 83.26 33 83.26H69.6692C70.6652 83.26 71.5963 83.7543 72.1542 84.5793L73.5149 86.5912C74.7046 88.3504 77.2953 88.3504 78.485 86.5911L79.8455 84.5794C80.4035 83.7543 81.3346 83.26 82.3306 83.26H119C120.657 83.26 122 81.9168 122 80.26V23Z"/>
                </mask>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M122 23C122 21.3431 120.657 20 119 20H33C31.3431 20 30 21.3431 30 23V80.26C30 81.9168 31.3431 83.26 33 83.26H69.6692C70.6652 83.26 71.5963 83.7543 72.1542 84.5793L73.5149 86.5912C74.7046 88.3504 77.2953 88.3504 78.485 86.5911L79.8455 84.5794C80.4035 83.7543 81.3346 83.26 82.3306 83.26H119C120.657 83.26 122 81.9168 122 80.26V23Z" fill="white"/>
                <path d="M79.8455 84.5794L79.0172 84.0192L79.8455 84.5794ZM73.5149 86.5912L74.3432 86.031L73.5149 86.5912ZM72.1542 84.5793L71.3259 85.1395L72.1542 84.5793ZM33 21H119V19H33V21ZM31 80.26V23H29V80.26H31ZM69.6692 82.26H33V84.26H69.6692V82.26ZM74.3432 86.031L72.9826 84.0191L71.3259 85.1395L72.6865 87.1514L74.3432 86.031ZM79.0172 84.0192L77.6567 86.031L79.3134 87.1513L80.6739 85.1396L79.0172 84.0192ZM119 82.26H82.3306V84.26H119V82.26ZM121 23V80.26H123V23H121ZM119 84.26C121.209 84.26 123 82.4691 123 80.26H121C121 81.3645 120.105 82.26 119 82.26V84.26ZM80.6739 85.1396C81.0459 84.5895 81.6666 84.26 82.3306 84.26V82.26C81.0026 82.26 79.7611 82.9191 79.0172 84.0192L80.6739 85.1396ZM72.6865 87.1514C74.2729 89.497 77.7271 89.4969 79.3134 87.1513L77.6567 86.031C76.8635 87.2038 75.1364 87.2038 74.3432 86.031L72.6865 87.1514ZM69.6692 84.26C70.3332 84.26 70.9539 84.5895 71.3259 85.1395L72.9826 84.0191C72.2386 82.9191 70.9972 82.26 69.6692 82.26V84.26ZM29 80.26C29 82.4691 30.7909 84.26 33 84.26V82.26C31.8954 82.26 31 81.3645 31 80.26H29ZM119 21C120.105 21 121 21.8954 121 23H123C123 20.7909 121.209 19 119 19V21ZM33 19C30.7909 19 29 20.7909 29 23H31C31 21.8954 31.8954 21 33 21V19Z" fill="#D8E0F7" mask="url(#path-1-inside-1)"/>
                <path d="M59 53.25C59 43.7231 66.6683 36 76.1277 36C77.8711 36 79.5537 36.2624 81.1387 36.75" stroke="#5F82FF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M72.4415 56.9623C74.4774 59.0126 77.778 59.0126 79.8136 56.9623C81.8492 54.912 90.2765 40.5 89.5319 39.75C88.787 39 74.4774 47.4874 72.4415 49.5377C70.4059 51.5879 70.4059 54.912 72.4415 56.9623ZM76.1273 54.75C76.9501 54.75 77.6168 54.0785 77.6168 53.25C77.6168 52.4216 76.9501 51.75 76.1273 51.75C75.3048 51.75 74.6381 52.4216 74.6381 53.25C74.6381 54.0785 75.3048 54.75 76.1273 54.75Z" fill="#5F82FF"/>
                <ellipse cx="61.234" cy="62.25" rx="1.48936" ry="1.5" fill="#5F82FF"/>
                <ellipse cx="67.1915" cy="68.25" rx="1.48936" ry="1.5" fill="#5F82FF"/>
                <ellipse cx="76.1275" cy="70.5" rx="1.48936" ry="1.5" fill="#5F82FF"/>
                <ellipse cx="85.0638" cy="68.25" rx="1.48936" ry="1.5" fill="#5F82FF"/>
                <ellipse cx="90.2767" cy="62.25" rx="1.48936" ry="1.5" fill="#5F82FF"/>
                <ellipse cx="92.5106" cy="53.25" rx="1.48936" ry="1.5" fill="#5F82FF"/>
            </g>
            <defs>
                <filter id="filter0_d" x="0" y="0" width="152" height="127.911" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="10"/>
                    <feGaussianBlur stdDeviation="15"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.894415 0 0 0 0 0.918495 0 0 0 0 0.984716 0 0 0 1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
            </defs>
        </svg>
        
        <svg id="clouds" width="1347" height="582" viewBox="0 0 1347 582" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path d="M264.72 401.48C258.247 401.48 253 406.83 253 413.429H276.441C276.441 406.83 271.194 401.48 264.72 401.48Z" fill="white"/>
            </g>
            <g filter="url(#filter1_d)">
                <path d="M310.683 407.455C301.672 407.455 294.366 414.862 294.366 424H327C327 414.862 319.695 407.455 310.683 407.455Z" fill="white"/>
            </g>
            <g filter="url(#filter2_d)">
                <path d="M286.093 399.182C272.386 399.182 261.273 410.293 261.273 424H310.913C310.913 410.293 299.801 399.182 286.093 399.182Z" fill="white"/>
            </g>
            <g filter="url(#filter3_d)">
                <path d="M1205.01 497.459C1186.23 497.459 1171 512.924 1171 532H1239.02C1239.02 512.924 1223.79 497.459 1205.01 497.459Z" fill="white"/>
            </g>
            <g filter="url(#filter4_d)">
                <path d="M1181.68 468C1168.6 468 1158 478.781 1158 492.081H1205.37C1205.37 478.781 1194.76 468 1181.68 468Z" fill="white"/>
            </g>
            <g filter="url(#filter5_d)">
                <path d="M1136.73 480.189C1108.16 480.189 1085 503.386 1085 532H1188.47C1188.47 503.386 1165.31 480.189 1136.73 480.189Z" fill="white"/>
            </g>
            <g filter="url(#filter6_d)">
                <path d="M1262.91 56C1241.42 56 1224 73.4609 1224 95H1301.81C1301.81 73.4609 1284.39 56 1262.91 56Z" fill="white"/>
            </g>
            <g filter="url(#filter7_d)">
                <path d="M1279.5 89C1267.07 89 1257 99.2975 1257 112H1302C1302 99.2975 1291.93 89 1279.5 89Z" fill="white"/>
            </g>
            <g filter="url(#filter8_d)">
                <path d="M275.5 95C263.074 95 253 105.297 253 118H298C298 105.297 287.926 95 275.5 95Z" fill="white"/>
            </g>
            <g filter="url(#filter9_d)">
                <path d="M75 255C75 213.026 41.6452 179 0.5 179V255H75Z" fill="white"/>
            </g>
            <g filter="url(#filter10_d)">
                <path d="M317.112 389C311.651 389 307.224 393.559 307.224 399.182H327C327 393.559 322.573 389 317.112 389Z" fill="white"/>
            </g>
            <g filter="url(#filter11_d)">
                <path d="M1223.5 40C1214.94 40 1208 47.1634 1208 56H1239C1239 47.1634 1232.06 40 1223.5 40Z" fill="white"/>
            </g>
            <defs>
                <filter id="filter0_d" x="208" y="361.48" width="113.441" height="101.949" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter1_d" x="249.366" y="367.455" width="122.634" height="106.545" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter2_d" x="216.273" y="359.182" width="139.64" height="114.818" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter3_d" x="1126" y="457.459" width="158.021" height="124.541" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter4_d" x="1113" y="428" width="137.367" height="114.081" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter5_d" x="1040" y="440.189" width="193.469" height="141.811" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter6_d" x="1179" y="16" width="167.814" height="129" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter7_d" x="1212" y="49" width="135" height="113" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter8_d" x="208" y="55" width="135" height="113" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter9_d" x="-44.5" y="139" width="164.5" height="166" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter10_d" x="262.224" y="349" width="109.776" height="100.182" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter11_d" x="1163" y="0" width="121" height="106" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset dy="5"/>
                    <feGaussianBlur stdDeviation="22.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.593724 0 0 0 0 0.684469 0 0 0 0 0.888646 0 0 0 0.1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
            </defs>
        </svg>
        <svg id="line" width="1440" height="465" viewBox="0 0 1440 465" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 422.51C202.703 422.51 347.472 387.633 480.333 389.758C789.74 394.705 643.639 247.682 960.667 247.682C1305.86 247.682 1223.24 118 1441 118" stroke="#5F82FF" stroke-width="3"/>
            <path d="M480.333 389.758C347.472 387.633 202.703 422.51 0 422.51V465H1441V118C1223.24 118 1305.86 247.682 960.667 247.682C643.639 247.682 789.74 394.705 480.333 389.758Z" fill="url(#paint0_linear)" fill-opacity="0.4"/>
            <line x1="924.5" y1="200" x2="924.5" y2="389" stroke="#D8E0F7"/>
            <g filter="url(#filter0_d)">
                <circle cx="924.5" cy="248.5" r="7.5" fill="white"/>
                <circle cx="924.5" cy="248.5" r="6.5" stroke="#5E80FE" stroke-width="2"/>
            </g>
            <line x1="1332.5" x2="1332.5" y2="317" stroke="#D8E0F7"/>
            <g filter="url(#filter1_d)">
                <circle cx="1332.5" cy="134.5" r="7.5" fill="white"/>
                <circle cx="1332.5" cy="134.5" r="6.5" stroke="#5E80FE" stroke-width="2"/>
            </g>
            <line x1="515.5" y1="378" x2="515.5" y2="437" stroke="#D8E0F7"/>
            <line x1="107.5" y1="262" x2="107.5" y2="452" stroke="#D8E0F7"/>
            <g filter="url(#filter2_d)">
                <circle cx="107.5" cy="419.5" r="7.5" fill="white"/>
                <circle cx="107.5" cy="419.5" r="6.5" stroke="#5E80FE" stroke-width="2"/>
            </g>
            <defs>
                <filter id="filter0_d" x="902" y="226" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset/>
                    <feGaussianBlur stdDeviation="7.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.323144 0 0 0 0 0.512664 0 0 0 0 1 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter1_d" x="1310" y="112" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset/>
                    <feGaussianBlur stdDeviation="7.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.323144 0 0 0 0 0.512664 0 0 0 0 1 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <filter id="filter2_d" x="85" y="397" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                    <feOffset/>
                    <feGaussianBlur stdDeviation="7.5"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.323144 0 0 0 0 0.512664 0 0 0 0 1 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                <linearGradient id="paint0_linear" x1="278.466" y1="465.443" x2="278.466" y2="10.0051" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4B71FF" stop-opacity="0"/>
                    <stop offset="1" stop-color="#6B89F8"/>
                </linearGradient>
            </defs>
        </svg>
      
    </div>

    <div class="sponsor-row">
        <div class="sponsor-row-block">
            <svg width="117" height="29" viewBox="0 0 117 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9321 23.2004C14.7617 23.2004 14.677 23.2835 14.677 23.2835C14.677 23.2835 12.5431 24.9461 8.7024 24.9461C4.86351 24.9452 2.73231 23.2826 2.73231 23.2826C2.73231 23.2826 2.56199 23.2004 2.47729 23.2004C2.30607 23.2004 2.13484 23.2835 2.13484 23.532V23.6142C2.47638 25.3547 2.73231 26.5972 2.73231 26.7626C2.98732 28.006 5.5484 29 8.61952 29C11.6915 29 14.2517 28.006 14.5076 26.7626C14.5076 26.5972 14.7627 25.3547 15.0996 23.6142V23.532C15.1816 23.3657 15.0996 23.2004 14.9266 23.2004H14.9321ZM32.2531 19.1411C33.3624 18.561 33.7895 17.7323 33.7895 16.488V14.7485C33.7895 12.2634 32.2531 11.0218 29.0107 11.0218H22.5261C22.271 11.0218 22.0998 11.1881 22.0998 11.4375V27.6743C22.0998 27.9237 22.2701 28.09 22.5261 28.09H29.5226C32.5946 28.09 34.3861 26.5981 34.3861 24.0308V22.2886C34.3861 20.7984 33.6183 19.639 32.2531 19.1402V19.1411ZM38.909 15.4949H36.2677C36.0127 15.4949 35.8397 15.6612 35.8397 15.9106V27.6743C35.8397 27.922 36.0127 28.09 36.2677 28.09H38.9181C39.1731 28.09 39.3461 27.922 39.3461 27.6743V15.9097C39.3461 15.6621 39.1731 15.494 38.9181 15.494L38.909 15.4949ZM102.481 15.2473C98.9013 15.2473 97.1071 16.9868 97.1071 20.2174V23.4489C97.1071 26.7634 98.9013 28.3376 102.654 28.3376C104.193 28.3376 105.814 28.09 107.18 27.5912C107.351 27.509 107.521 27.3436 107.435 27.0942L107.009 25.2724C107.009 25.1884 106.924 25.023 106.839 25.023C106.753 24.9399 106.584 24.9399 106.497 24.9399C105.304 25.2715 104.109 25.4378 103 25.4378C101.037 25.4378 100.696 24.8576 100.696 23.532V23.1163H107.266C107.521 23.1163 107.694 22.9518 107.694 22.7033V20.3837C107.608 16.9037 105.987 15.2455 102.489 15.2455L102.481 15.2473ZM55.6398 25.3555C54.9567 25.3555 54.4467 25.3555 53.9367 25.2715V18.8864C54.7053 18.5504 55.729 18.2232 56.4959 18.2232C57.5205 18.2232 57.9477 18.6388 57.9477 19.5497V23.2729C57.9477 24.6817 57.6061 25.3449 55.6434 25.3449L55.6398 25.3555ZM116.306 25.6032C116.306 25.52 116.224 25.3555 116.139 25.2715C116.054 25.1831 115.884 25.1831 115.798 25.1831C115.286 25.2627 114.86 25.3511 114.518 25.3511C113.835 25.3511 113.58 25.1035 113.58 24.4402V18.2232H116.139C116.394 18.2232 116.564 18.0551 116.564 17.8075V15.9061C116.564 15.6585 116.394 15.4905 116.139 15.4905H113.579V12.5102C113.579 12.3422 113.492 12.2581 113.406 12.1759C113.321 12.0928 113.151 12.0928 113.065 12.0928L110.421 12.4288C110.166 12.4288 109.993 12.6764 109.993 12.8418V15.4931H108.545C108.29 15.4931 108.116 15.6594 108.116 15.9088V17.8128C108.116 18.0604 108.29 18.2285 108.545 18.2285H109.993V24.8541C109.993 27.0915 111.189 28.2501 113.663 28.2501C114.346 28.2501 115.539 28.0865 116.308 27.8344C116.479 27.7548 116.65 27.5868 116.563 27.3392L116.308 25.6005L116.306 25.6032ZM48.8163 25.6032C48.8163 25.52 48.7316 25.3555 48.646 25.2715C48.5613 25.1831 48.391 25.1831 48.3054 25.1831C47.8773 25.2627 47.3673 25.3511 47.0257 25.3511C46.3427 25.3511 46.0876 25.1035 46.0876 24.4402V18.2232H48.6469C48.9019 18.2232 49.075 18.0551 49.075 17.8075V15.9061C49.075 15.6585 48.9019 15.4905 48.6469 15.4905H46.0849V12.5102C46.0849 12.3422 45.9993 12.2581 45.9137 12.1759C45.8281 12.0928 45.6587 12.0928 45.5721 12.0928L42.9291 12.4288C42.6741 12.4288 42.5038 12.6764 42.5038 12.8418V15.4931H41.0484C40.7933 15.4931 40.6203 15.6594 40.6203 15.9088V17.8128C40.6203 18.0604 40.7915 18.2285 41.0484 18.2285H42.4983V24.8541C42.4983 27.0915 43.6914 28.2501 46.166 28.2501C46.849 28.2501 48.0422 28.0865 48.8072 27.8344C48.9802 27.7548 49.1487 27.5868 49.0622 27.3392L48.8072 25.6005L48.8163 25.6032ZM84.227 25.4378C84.227 25.3547 84.1414 25.1884 84.0567 25.1062C83.972 25.023 83.8017 25.023 83.7161 25.023C82.9483 25.1884 82.1805 25.2706 81.4118 25.2706C79.7059 25.2706 79.2788 24.8576 79.2788 23.4489V20.0529C79.2788 18.6432 79.7906 18.2294 81.4118 18.2294C81.8399 18.2294 82.778 18.3125 83.7161 18.477C83.8008 18.477 83.9711 18.477 84.0567 18.3947C84.1405 18.3125 84.2261 18.2294 84.2261 18.0631L84.5695 16.075C84.5695 15.8274 84.4829 15.6612 84.227 15.578C83.2042 15.2464 82.0093 15.1624 81.3271 15.1624C77.3161 15.1624 75.694 16.5721 75.694 20.0529V23.3657C75.694 26.8457 77.3152 28.2545 81.3244 28.2545C82.2625 28.2545 83.3718 28.0891 84.2252 27.8388C84.4802 27.7575 84.5667 27.5912 84.5667 27.3436L84.2243 25.4378H84.227ZM25.6919 25.1062H28.8504C30.2166 25.1062 30.7266 24.7745 30.7266 23.6974V22.4504C30.7266 21.3715 30.3022 20.9558 29.1054 20.9558H27.9943C27.7393 20.9558 27.5662 20.7878 27.5662 20.5402V18.4805C27.5662 18.2311 27.7393 18.0649 27.9943 18.0649H28.5918C29.7011 18.0649 30.1273 17.651 30.1273 16.657V15.1642C30.1273 14.584 29.9616 14.0039 28.5972 14.0039H25.6837V25.1062H25.6919ZM73.6439 15.4949H71.0026C70.7476 15.4949 70.5746 15.6612 70.5746 15.9106V24.029C69.6365 24.526 68.2703 25.023 67.5053 25.023C66.9069 25.023 66.6492 24.7754 66.6492 24.1944V15.9159C66.6492 15.6682 66.4761 15.5002 66.2211 15.5002H63.5717C63.3167 15.5002 63.1454 15.6682 63.1454 15.9159V24.5322C63.1454 27.0173 64.1673 28.3438 66.2147 28.3438C67.5809 28.3438 69.5427 27.8459 71.1638 27.1004L71.3342 27.7637C71.4225 27.9299 71.5937 28.0962 71.7622 28.0962H73.7267C73.9818 28.0962 74.153 27.9282 74.153 27.6805V15.9097C74.0674 15.7416 73.898 15.494 73.6411 15.494L73.6439 15.4949ZM8.70604 9.53077C3.92541 9.53077 0 10.7715 0 12.3457C0 12.7613 1.0237 18.6424 1.45086 20.9629C1.62117 22.0392 4.43818 23.5311 8.70331 23.5311C12.9694 23.5311 15.6998 22.0454 15.9558 20.9665C16.3747 18.6494 17.4039 12.7684 17.4039 12.3528C17.3128 10.7786 13.4785 9.53696 8.69693 9.53696L8.70604 9.53077ZM8.70604 21.6262C7.1714 21.6262 5.97647 20.4659 5.97647 18.9749C5.97647 17.4803 7.16957 16.3218 8.70513 16.3218C10.2407 16.3218 11.4356 17.4803 11.4356 18.9749C11.4356 20.381 10.2407 21.6191 8.70513 21.6191L8.70604 21.6262ZM96.5934 27.3427L93.0943 21.7093L96.5096 16.1644C96.5943 15.9963 96.5943 15.8354 96.5096 15.7487C96.4231 15.5869 96.2528 15.5011 96.0816 15.5011H93.1808C93.0096 15.5011 92.8383 15.5869 92.7527 15.7487L89.5104 21.222V11.1049C89.5104 10.8555 89.3373 10.6893 89.0823 10.6893H86.4365C86.1815 10.6893 86.0085 10.8555 86.0085 11.1049V27.5894C86.0085 27.8371 86.1815 28.0051 86.4365 28.0051H89.0814C89.3364 28.0051 89.5095 27.8371 89.5095 27.5894V22.2037L92.9194 27.8371C93.005 28.0051 93.1744 28.0873 93.2609 28.0873H96.1608C96.4158 28.0873 96.5889 27.9211 96.5889 27.6717C96.6727 27.5072 96.6727 27.4241 96.5889 27.3409L96.5934 27.3427ZM100.604 20.3032V19.8875C100.604 18.6494 101.2 18.1542 102.48 18.1542C103.931 18.1542 104.187 18.8175 104.187 19.8964V20.312H100.604V20.3032ZM8.70695 17.5696C9.45925 17.5696 10.0731 18.1692 10.0731 18.8962C10.0731 19.6302 9.45925 20.2227 8.70695 20.2227C7.95466 20.2227 7.3408 19.6302 7.3408 18.8962C7.3408 18.1692 7.95284 17.5696 8.70695 17.5696ZM57.4276 15.2526C56.148 15.2526 54.7828 15.5869 53.9303 15.9159V11.1934C53.9303 10.9457 53.7591 10.7777 53.5022 10.7777H50.8573C50.6023 10.7777 50.4293 10.9457 50.4293 11.1934V27.5983C50.4293 27.8459 50.6023 28.0139 50.7708 28.0139C52.392 28.2616 54.3547 28.4296 55.464 28.4296C60.4131 28.4296 61.4368 26.3584 61.4368 23.2914V19.7275C61.4368 16.7472 60.0707 15.2526 57.4267 15.2526H57.4276ZM36.2668 13.758C36.0118 13.758 35.8388 13.5918 35.8388 13.3424V11.1049C35.8388 10.8555 36.0118 10.6893 36.2668 10.6893H38.9126C39.1694 10.6893 39.3407 10.9387 39.3407 11.1049V13.3406C39.3407 13.5882 39.1694 13.7563 38.9126 13.7563H36.2668V13.758ZM8.70513 13.1743C5.63219 13.1743 3.15855 12.6791 3.15855 12.0158C3.15855 11.3526 5.63219 10.8555 8.70513 10.8555C11.7762 10.8555 14.2517 11.3526 14.2517 12.0141C14.2517 12.6773 11.7762 13.1752 8.70513 13.1752V13.1743ZM42.92 6.63006C42.4938 6.63006 41.8107 6.4638 41.4691 6.21441C41.3872 6.21441 41.3872 6.13305 41.3872 6.04992L41.5575 5.38665L41.6395 5.3044H41.8098C42.2378 5.39284 42.6622 5.47243 43.0885 5.47243C43.6076 5.47243 43.6076 5.31325 43.6076 5.05678C43.6076 4.8976 43.6076 4.72957 42.838 4.56154C41.6449 4.31392 41.4719 3.9867 41.4719 3.07581C41.4719 2.24805 41.7287 1.66968 43.2661 1.66968C43.6914 1.66968 44.2889 1.74927 44.6322 1.83417C44.6322 1.83417 44.7142 1.9173 44.7142 1.99954L44.6295 2.74241L44.5448 2.82554H44.3736C44.2224 2.82554 44.0402 2.8105 43.8544 2.79282L43.6932 2.7769C43.5074 2.75921 43.3253 2.74152 43.1759 2.74152C42.6641 2.74152 42.6641 2.82377 42.6641 3.07227C42.6641 3.40833 42.6641 3.40833 43.2615 3.57282C44.5402 3.90534 44.7097 4.15385 44.7097 5.14699C44.7097 6.05257 44.3727 6.63095 42.9519 6.63979H42.9191L42.92 6.63006ZM39.1631 6.63006C38.653 6.63006 38.0547 6.4638 37.4572 6.21441C37.3716 6.21441 37.3716 6.13305 37.3716 6.04992L37.5428 5.38665L37.6339 5.3044H37.8069C38.2323 5.39284 38.6594 5.47243 39.0857 5.47243C39.5957 5.47243 39.5957 5.31325 39.5957 5.05678C39.5957 4.8976 39.5957 4.72957 38.8288 4.56154C37.6357 4.31392 37.4627 3.9867 37.4627 3.07581C37.4627 2.24805 37.7204 1.66968 39.2569 1.66968C39.6831 1.66968 40.2806 1.74927 40.623 1.83417C40.7068 1.83417 40.7924 1.9173 40.7924 1.99954L40.7086 2.74594L40.6249 2.82819H40.5338C40.3853 2.82819 40.2032 2.8105 40.0174 2.79282L39.8571 2.77778C39.6713 2.76009 39.4891 2.74594 39.3379 2.74594C38.8188 2.74594 38.8188 2.82554 38.8188 3.07316C38.8188 3.40656 38.8188 3.40656 39.4181 3.57194C40.6977 3.90534 40.8689 4.15385 40.9536 5.1461C40.9536 6.05257 40.6167 6.63183 39.1959 6.64068H39.1631V6.63006ZM54.6097 1.74131C54.0969 1.74131 53.4139 1.90757 52.7317 2.15696L52.6461 1.90757C52.6461 1.82444 52.5614 1.82444 52.4758 1.82444H51.708C51.6224 1.82444 51.5368 1.90757 51.5368 1.98981V6.38244C51.5368 6.4638 51.6224 6.54693 51.708 6.54693H52.7317C52.8173 6.54693 52.902 6.4638 52.902 6.38156V3.3137C53.2436 3.14833 53.7554 2.98295 54.0969 2.98295C54.352 2.98295 54.4385 3.0652 54.4385 3.3137V6.38244C54.4385 6.4638 54.5232 6.54693 54.6088 6.54693H55.6289C55.7108 6.54693 55.8019 6.4638 55.8019 6.38156V3.14568C55.7108 2.15165 55.3738 1.73689 54.6088 1.73689L54.6097 1.74131ZM46.4173 1.82444H45.3927C45.308 1.82444 45.2233 1.90757 45.2233 1.98981V6.38244C45.2233 6.4638 45.308 6.54693 45.3936 6.54693H46.4228C46.5121 6.54693 46.5959 6.4638 46.5959 6.38156V1.98716C46.5959 1.90492 46.5121 1.82179 46.4228 1.82179L46.4173 1.82444ZM32.4234 0.00265309H31.3997C31.315 0.00265309 31.2294 0.0848987 31.2294 0.167144V6.38244C31.2294 6.4638 31.3113 6.54693 31.3933 6.54693H32.4225C32.5044 6.54693 32.59 6.4638 32.59 6.38156V0.165376C32.59 0.08313 32.5044 -1.30726e-08 32.4197 -1.30726e-08L32.4234 0.00265309ZM25.9387 0.250274C25.9387 0.167144 25.854 0.167144 25.7684 0.167144H24.2328C24.1472 0.167144 24.0616 0.250274 24.0616 0.250274L22.0943 6.29931V6.4638C22.0943 6.54693 22.1763 6.54693 22.261 6.54693H23.3722C23.4559 6.54693 23.5406 6.4638 23.5406 6.4638L24.9068 1.98893C24.9068 1.98893 24.9068 1.90757 25.0771 1.90757C25.1609 1.90757 25.2465 1.98981 25.2465 1.98981L25.8449 4.06187H24.9906C24.9032 4.06187 24.8175 4.14412 24.8175 4.14412L24.5625 4.96658V5.1293C24.5625 5.1293 24.6472 5.21243 24.7328 5.21243H26.181L26.5234 6.37271C26.5234 6.45407 26.609 6.45407 26.6946 6.45407H27.8058C27.8914 6.45407 27.8914 6.45407 27.9788 6.37006V6.20203L25.9387 0.24939V0.250274ZM34.7276 5.55291C35.1557 5.55291 35.4107 5.46978 35.581 5.38753V4.72426H34.7276C34.3861 4.72426 34.3014 4.88964 34.3014 5.13814C34.3014 5.46713 34.3852 5.55114 34.7203 5.55379H34.7276V5.55291ZM30.6319 5.55291C30.6319 5.46978 30.6319 5.46978 30.5472 5.46978H30.376C30.2057 5.55291 30.0344 5.55291 29.8641 5.55291C29.6091 5.55291 29.5226 5.46978 29.5226 5.22127V2.81846H30.4607C30.5472 2.81846 30.6319 2.73622 30.6319 2.65309V1.98981C30.6319 1.90757 30.5472 1.82444 30.4616 1.82444H29.5235V0.664156C29.5235 0.58191 29.5235 0.58191 29.4379 0.58191C29.4379 0.58191 29.3523 0.502318 29.2667 0.58191L28.2429 0.749939C28.1573 0.749939 28.0726 0.838375 28.0726 0.917968V1.90845H27.5608C27.4788 1.90845 27.3968 1.99512 27.3968 2.07648V2.82377C27.3968 2.90778 27.4843 2.9918 27.5699 2.9918H28.0827V5.47685C28.0827 6.30462 28.5089 6.71938 29.4488 6.71938C29.7038 6.71938 30.1301 6.63537 30.3869 6.55135C30.7275 6.38598 30.7275 6.38598 30.7275 6.30373L30.6419 5.55733L30.6319 5.55291ZM48.8063 5.55291C49.2344 5.55291 49.4894 5.46978 49.6597 5.38753V4.72426H48.8063C48.4657 4.72426 48.3801 4.88964 48.3801 5.13814C48.3801 5.46713 48.4638 5.55114 48.799 5.55379H48.8063V5.55291ZM34.9826 1.74131C34.4726 1.74131 33.8742 1.82444 33.448 1.90757C33.3624 1.90757 33.2777 1.98981 33.3624 2.07294L33.4535 2.73622C33.4535 2.81846 33.4535 2.81846 33.5427 2.81846H33.6274C34.0555 2.73622 34.4808 2.73622 34.8205 2.73622C35.5036 2.73622 35.6748 2.90159 35.6748 3.31547V3.73112H34.6457C33.621 3.73112 33.1948 4.14412 33.1948 5.0559C33.1948 5.96679 33.7066 6.4638 34.4744 6.4638C34.9845 6.4638 35.4125 6.29843 35.8388 6.13305V6.29843C35.8388 6.38156 35.9244 6.38156 36.0091 6.38156H36.7778C36.8597 6.38156 36.9508 6.29312 36.9508 6.21353V3.3933C36.9508 2.15077 36.4408 1.736 34.9908 1.736L34.9826 1.74131ZM48.9775 1.74131C48.4657 1.74131 47.8682 1.82444 47.441 1.90757C47.35 1.90757 47.268 1.98981 47.35 2.07294L47.4319 2.73622C47.4319 2.81846 47.4319 2.81846 47.5166 2.81846H47.6023C48.0303 2.73622 48.4556 2.73622 48.7954 2.73622C49.4784 2.73622 49.6515 2.90159 49.6515 3.31547V3.73112H48.6351C47.6123 3.73112 47.1851 4.14412 47.1851 5.0559C47.1851 5.96679 47.697 6.4638 48.4657 6.4638C48.9775 6.4638 49.4038 6.29843 49.8318 6.13305L49.9156 6.29843C49.9156 6.38156 50.0012 6.38156 50.0868 6.38156H50.8546C50.9402 6.38156 51.0249 6.29312 51.0249 6.21353V3.3933C50.9402 2.15077 50.4275 1.736 48.9775 1.736V1.74131ZM46.4183 0.00176874H45.3927C45.308 0.00176874 45.2233 0.0848987 45.2233 0.167144V0.995792C45.2233 1.07538 45.308 1.15498 45.3936 1.15498H46.4228C46.5121 1.15498 46.5959 1.07008 46.5959 0.986948V0.165376C46.5959 0.08313 46.5121 -1.30726e-08 46.4228 -1.30726e-08L46.4183 0.00176874Z" fill="#D6DAE5"/>
            </svg>
        </div>
        <div class="sponsor-row-block">
            <svg width="117" height="25" viewBox="0 0 117 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2126 6.51992C13.1534 6.37223 11.4065 7.63687 10.4329 7.63687C9.44383 7.63687 7.9192 6.55176 6.30258 6.58006C4.18049 6.61189 2.22325 7.77925 1.12942 9.6258C-1.07555 13.3428 0.566561 18.8488 2.71415 21.8627C3.76427 23.3378 5.01658 24.9969 6.66234 24.9368C8.24708 24.8757 8.84545 23.9401 10.7599 23.9401C12.6734 23.9401 13.2135 24.9368 14.8884 24.9049C16.5925 24.8757 17.6735 23.4033 18.7155 21.9202C19.9222 20.2107 20.4186 18.5561 20.4477 18.4659C20.4095 18.4535 17.1243 17.2269 17.0916 13.5524C17.0624 10.481 19.6745 9.00321 19.7938 8.93157C18.3102 6.81176 16.0196 6.57829 15.2126 6.51992ZM97.5088 18.5172V18.8426C97.5088 22.0502 95.0926 24.92 90.2436 24.92C85.4083 24.92 82.534 21.9724 82.534 16.821V14.6693C82.534 9.57097 85.422 6.53142 90.2564 6.53142C94.7956 6.53142 97.5088 9.31008 97.5088 12.7786V12.9607H93.8685C93.8685 11.2008 92.7136 9.63553 90.2828 9.63553C87.6907 9.63553 86.3874 11.3176 86.3874 14.6693V16.821C86.3874 20.2116 87.678 21.7902 90.3092 21.7902C92.9286 21.7902 93.8685 20.3549 93.8685 18.5172H97.5088ZM31.3087 19.5342H31.3624L34.6266 6.81883H38.481L41.7579 19.5342H41.8116L44.8481 6.81883H48.9038L43.8135 24.621H39.9582L36.5875 12.4522H36.5201L33.1484 24.621H29.3214L24.2174 6.81883H28.274L31.3087 19.5342ZM105.352 13.9654H112.846V6.81883H116.661V24.621H112.846V17.0306H105.352V24.621H101.552V6.81883H105.352V13.9654ZM80.0758 6.81883V9.89641H74.6103V24.621H70.8224V9.89641H65.3696V6.81883H80.0758ZM59.5398 6.81883L65.4361 24.6202H61.3659L60.0589 20.1338H54.26L52.9321 24.6202H49.1315L55.0415 6.81883H59.5398ZM59.2638 17.3958L57.2036 10.3271H57.1636L55.0715 17.3958H59.2638ZM13.8583 4.62473C12.9785 5.6046 11.5932 6.35012 10.2335 6.24842C10.0404 4.85467 10.7508 3.40077 11.5595 2.49165C12.4621 1.46756 13.984 0.700816 15.2427 0.653061C15.4048 2.07335 14.8155 3.50424 13.9412 4.52834L13.9002 4.57698L13.8583 4.62473Z" fill="#D6DAE5"/>
            </svg>
        </div>
        <div class="sponsor-row-block">
            <svg width="117" height="23" viewBox="0 0 117 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M115.316 20.0765C116.111 20.0765 116.744 20.7044 116.744 21.4915C116.744 22.2874 116.111 22.9065 115.309 22.9065C114.515 22.9065 113.87 22.2874 113.87 21.4915C113.87 20.7044 114.515 20.0765 115.309 20.0765H115.316ZM23.3761 22.7172H19.4415L19.2739 21.7533C17.4761 22.7172 15.8731 22.8747 14.8166 22.8747C11.9295 22.8747 10.394 21.0069 10.394 18.421C10.394 15.3717 12.1863 14.2822 15.3923 14.2822H18.6528V13.6242C18.6528 12.0678 18.4707 11.6114 15.9934 11.6114H11.9696L12.3649 7.79098H16.7784C22.1921 7.79098 23.3797 9.45358 23.3797 13.6561V22.7172H23.3761ZM81.9931 16.7266C81.9931 19.8395 80.6689 22.8587 75.1259 22.8587C69.5775 22.8587 68.2278 19.8395 68.2278 16.7266V13.7197C68.2278 10.6068 69.5757 7.58758 75.1241 7.58758C80.6798 7.58758 82.0095 10.6068 82.0095 13.7215V16.7283L81.9931 16.7266ZM97.1083 16.7266C97.1083 19.8395 95.7822 22.8587 90.2411 22.8587C84.6908 22.8587 83.3411 19.8395 83.3411 16.7266V13.7197C83.3411 10.6068 84.689 7.58758 90.2393 7.58758C95.7767 7.58758 97.1064 10.6068 97.1064 13.7215V16.7283L97.1083 16.7266ZM115.309 20.2994C114.672 20.2994 114.143 20.83 114.143 21.4897C114.143 22.1619 114.672 22.6889 115.316 22.6889C115.963 22.7066 116.482 22.176 116.482 21.5039C116.482 20.8495 115.963 20.3153 115.316 20.3153H115.309V20.2994ZM7.24451 22.6872H2.52673V11.615H0.166016V7.79452H2.52491V5.50402C2.52491 2.39107 3.85463 0.537445 7.63979 0.537445H10.791V4.35789H8.82378C7.34834 4.35789 7.24998 4.88851 7.24998 5.88607L7.23176 7.79629H10.802L10.383 11.6167H7.23358V22.6889L7.24451 22.6872ZM115.038 22.3157H114.779V20.7363C114.925 20.7186 115.052 20.7009 115.253 20.7009C115.502 20.7009 115.664 20.7487 115.763 20.8176C115.861 20.8884 115.908 20.9945 115.908 21.1448C115.908 21.3518 115.77 21.4774 115.599 21.5287V21.541C115.737 21.5658 115.835 21.6896 115.872 21.9231C115.908 22.1672 115.945 22.2627 115.97 22.3122H115.697C115.661 22.2627 115.619 22.1176 115.588 21.9125C115.551 21.7091 115.442 21.6348 115.238 21.6348H115.056V22.314L115.038 22.3157ZM115.038 21.4402H115.225C115.438 21.4402 115.619 21.3642 115.619 21.1696C115.619 21.0316 115.517 20.8937 115.225 20.8937C115.141 20.8937 115.08 20.899 115.038 20.9061V21.4402ZM15.1136 18.3626C15.1136 19.1975 15.5216 19.6308 16.4178 19.6308C17.3832 19.6308 17.9515 19.3266 18.6546 19.0118V17.3403H16.5489C15.5507 17.3403 15.1136 17.5172 15.1136 18.3609V18.3626ZM60.1821 11.4009C59.2166 11.4009 58.5244 11.7016 57.8213 12.02V19.0595C58.4953 19.1214 58.8815 19.1214 59.5226 19.1214C61.836 19.1214 62.1493 18.0956 62.1493 16.6629V13.2952C62.1493 12.2411 61.785 11.3903 60.1821 11.3903V11.4009ZM75.1096 11.4009C73.503 11.4009 72.9474 12.2499 72.9474 13.2935V17.1493C72.9474 18.2105 73.503 19.0595 75.1096 19.0595C76.7125 19.0595 77.2699 18.2105 77.2699 17.1493V13.2935C77.2699 12.2393 76.7052 11.3886 75.1023 11.3886L75.1096 11.4009ZM36.7534 11.8785C34.3053 11.4717 33.6022 11.3833 32.4255 11.3833C30.3088 11.3833 29.6695 11.8307 29.6695 13.5765V16.8663C29.6695 18.6085 30.307 19.0595 32.4255 19.0595C33.604 19.0595 34.3053 18.9711 36.7534 18.5643V22.2857C34.6095 22.7544 33.2124 22.8764 32.032 22.8764C26.9645 22.8764 24.9499 20.2941 24.9499 16.5621V13.8913C24.9499 10.1522 26.9645 7.56459 32.032 7.56459C33.2124 7.56459 34.6095 7.6884 36.7534 8.15711V11.8785ZM51.5261 16.5656H42.8702V16.8663C42.8702 18.6085 43.5077 19.0595 45.6243 19.0595C47.5278 19.0595 48.6845 18.9711 51.129 18.5643V22.2857C48.7738 22.7544 47.546 22.8764 45.2327 22.8764C40.1688 22.8764 38.1651 20.2941 38.1651 16.5621V13.5022C38.1651 10.2354 39.6588 7.55928 44.8502 7.55928C50.0507 7.55928 51.5352 10.2035 51.5352 13.5022V16.5621L51.5261 16.5656ZM90.2228 11.4009C88.6199 11.4009 88.0643 12.2499 88.0643 13.2988V17.1599C88.0643 18.2211 88.6199 19.0701 90.2228 19.0701C91.8258 19.0701 92.3905 18.2211 92.3905 17.1599V13.297C92.3905 12.2411 91.8258 11.3903 90.2228 11.3903V11.4009ZM112.622 22.6854H107.509L103.181 15.6813V22.6854H98.4635V1.67827L103.181 0.917721V14.4396L107.507 7.78921H112.608L107.881 15.041L112.604 22.6819L112.622 22.6854ZM44.8374 11.0118C43.2345 11.0118 42.8702 11.8608 42.8702 12.922V13.511H46.8047V12.9167C46.8047 11.8732 46.4404 11.0171 44.8374 11.0171V11.0118ZM66.8707 16.6364C66.8707 20.2446 65.796 22.88 59.3478 22.88C57.0235 22.88 55.6573 22.6783 53.089 22.2963V1.67473L57.8068 0.914183V8.12527C58.8268 7.75738 60.1474 7.57166 61.3497 7.57166C66.0674 7.57166 66.8507 9.62338 66.8507 12.9185V16.6505L66.8707 16.6364Z" fill="#D6DAE5"/>
            </svg>
        </div>
        <div class="sponsor-row-block">
            <svg width="117" height="25" viewBox="0 0 117 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M82.2614 16.4009C80.5674 15.9764 80.5674 15.9587 80.5674 15.0567C80.5674 14.4491 80.6293 14.159 82.0246 14.159C82.9827 14.159 84.3926 14.3182 85.2997 14.4721C85.4236 14.4898 85.5511 14.4633 85.6531 14.3837C85.7551 14.3129 85.8207 14.198 85.8353 14.0741L86.0939 12.0534C86.1121 11.8234 85.9664 11.6112 85.7296 11.5581C84.6731 11.3229 83.2159 11.169 82.0137 11.169C77.8059 11.169 76.9498 12.7078 76.9498 15.0195C76.9498 17.5603 77.4325 18.4155 80.6512 19.176C82.7714 19.6713 82.7714 20.0383 82.7714 20.6485C82.7714 21.4497 82.6986 21.7274 81.3142 21.7274C80.1958 21.7274 78.9025 21.5594 77.7658 21.264C77.6383 21.2339 77.5108 21.2534 77.4015 21.3171C77.2922 21.386 77.2139 21.4939 77.1902 21.6178L76.8423 23.5465C76.8004 23.7676 76.9334 23.9843 77.152 24.0533C78.3943 24.4424 80.1757 24.7077 81.4836 24.7077C85.5529 24.7077 86.3835 23.0451 86.3835 20.5689C86.3835 17.8274 85.8844 17.3144 82.2559 16.3823L82.2614 16.4V16.4009ZM71.7092 16.4009C70.0152 15.9764 70.0152 15.9587 70.0152 15.0567C70.0152 14.4491 70.0771 14.159 71.4724 14.159C72.4287 14.159 73.8404 14.3182 74.7476 14.4721C74.8714 14.4898 74.9989 14.4633 75.1009 14.3837C75.2029 14.3129 75.2685 14.198 75.2831 14.0741L75.5417 12.0534C75.5709 11.8234 75.4179 11.6112 75.1865 11.5581C74.1483 11.3229 72.691 11.169 71.4888 11.169C67.292 11.169 66.4249 12.7078 66.4249 15.0195C66.4249 17.5603 66.9168 18.4155 70.1336 19.176C72.2539 19.6713 72.2539 20.0383 72.2539 20.6485C72.2539 21.4497 72.181 21.7274 70.7966 21.7274C69.6764 21.7274 68.3831 21.5594 67.2446 21.264C67.1171 21.2339 66.9896 21.2534 66.8803 21.3171C66.771 21.386 66.6927 21.4939 66.669 21.6178L66.3047 23.5368C66.2683 23.7579 66.3958 23.9755 66.6199 24.0444C67.8585 24.4336 69.64 24.6989 70.9496 24.6989C75.0117 24.6989 75.8496 23.0363 75.8496 20.5601C75.8496 17.8185 75.3432 17.3056 71.7147 16.3735L71.7092 16.3912V16.4009ZM34.3586 7.10979C34.2985 6.9223 34.1218 6.79496 33.9178 6.79496H29.6035C29.4031 6.79496 29.2209 6.92142 29.1608 7.10714L23.7172 23.8561C23.6753 23.9887 23.699 24.1391 23.7864 24.254C23.8738 24.369 24.0123 24.4371 24.1598 24.4371H27.1289C27.3347 24.4371 27.5151 24.3044 27.5734 24.1187L31.323 11.7907C31.323 11.7907 31.4232 11.4812 31.7602 11.4812C32.1063 11.4812 32.1973 11.7996 32.1973 11.7996L33.9369 17.6452H31.6053C31.405 17.6452 31.2228 17.7805 31.1682 17.9724L30.4942 20.2894C30.4578 20.4221 30.4942 20.5724 30.5671 20.6786C30.6581 20.7909 30.8039 20.8554 30.9496 20.8554H34.9296L35.977 24.1214C36.0353 24.3071 36.2138 24.4344 36.4142 24.4344H39.3833C39.529 24.4344 39.6711 24.3637 39.7585 24.2487C39.8496 24.132 39.8751 23.9834 39.8314 23.8472L34.3823 7.07972L34.3641 7.10802L34.3586 7.10979ZM91.0995 11.4379H88.3672C88.1122 11.4379 87.9063 11.6386 87.9063 11.8862V24.0197C87.9063 24.2673 88.114 24.4725 88.369 24.4725H91.1013C91.3563 24.4725 91.5631 24.2717 91.5631 24.0214V11.8907C91.5631 11.643 91.3627 11.4458 91.1077 11.4458L91.0986 11.4387L91.0995 11.4379ZM52.3554 6.46774H49.6231C49.3681 6.46774 49.1622 6.66849 49.1622 6.91611V24.0197C49.1622 24.2673 49.3699 24.4725 49.6249 24.4725H52.3572C52.6122 24.4725 52.8181 24.2717 52.8181 24.0214V6.92054C52.8181 6.67291 52.6177 6.4757 52.3627 6.4757L52.3554 6.46863V6.46774ZM113.778 11.177C112.334 11.177 110.362 11.6616 108.696 12.4222L108.495 11.7677C108.441 11.5732 108.258 11.4449 108.053 11.4449H106.032C105.777 11.4449 105.567 11.6457 105.567 11.8933V24.0268C105.567 24.2744 105.767 24.4778 106.022 24.4778H108.755C109.01 24.4778 109.219 24.2779 109.219 24.0268V15.6253C110.203 15.1389 111.587 14.6348 112.41 14.6348C113.025 14.6348 113.253 14.8595 113.253 15.4573V24.0179C113.253 24.2691 113.463 24.4689 113.718 24.4689H116.45C116.705 24.4689 116.911 24.2691 116.911 24.0179V15.1097C116.911 12.5053 115.854 11.1832 113.776 11.1832H113.774L113.778 11.177ZM10.5056 18.3907C10.4327 18.32 10.3289 18.2448 10.1504 18.2448C9.92266 18.2448 9.78969 18.3969 9.73868 18.4712C8.46361 20.3637 7.80785 22.1501 7.71678 23.9454C7.71404 24.078 7.76505 24.2107 7.85795 24.308C7.94902 24.4141 8.08564 24.4672 8.22225 24.4672H11.2496C11.5138 24.4672 11.7324 24.2726 11.7506 24.025C11.8234 23.1583 12.0967 22.2916 12.6067 21.3896C12.7797 21.0712 12.6431 20.7794 12.5429 20.6529C12.042 20.0162 11.4291 19.3441 10.5183 18.419L10.5147 18.4013L10.5056 18.3907ZM61.2144 19.6819V21.2445C60.7682 21.4922 59.9485 21.8282 58.9557 21.8282C58.1087 21.8282 57.8446 21.5806 57.8446 20.7493C57.8446 19.9534 58.0085 19.7022 59.0104 19.7022H61.2144V19.6828V19.6819ZM100.031 19.6819V21.2445C99.576 21.4922 98.7563 21.8282 97.7727 21.8282C96.9257 21.8282 96.6616 21.5806 96.6616 20.7493C96.6616 19.9534 96.8255 19.7022 97.8274 19.7022H100.031V19.6828V19.6819ZM47.307 21.8795C47.2888 21.7522 47.2159 21.6407 47.1066 21.57C46.9973 21.4992 46.868 21.478 46.7405 21.5081C46.2487 21.6248 45.7933 21.6885 45.429 21.6885C44.755 21.6885 44.4454 21.4055 44.4454 20.7688V14.3394H47.0957C47.3507 14.3394 47.5584 14.136 47.5584 13.8884V11.8809C47.5584 11.6333 47.3489 11.4299 47.0939 11.4299H44.4526V8.34436C44.4526 8.2117 44.3907 8.09055 44.2887 8.00388C44.1885 7.9181 44.0519 7.88007 43.9244 7.89776L41.1921 8.26919C40.9626 8.29837 40.7914 8.48763 40.7914 8.71137V11.4352H39.3004C39.0454 11.4352 38.8378 11.636 38.8378 11.8836V13.8999C38.8378 14.1475 39.0563 14.3527 39.3114 14.3527H40.7977V21.1888C40.7977 23.5386 42.0673 24.7263 44.5738 24.7263C45.2842 24.7263 46.4973 24.5671 47.2879 24.3018C47.4973 24.231 47.6267 24.025 47.5921 23.8065L47.2961 21.8875L47.3052 21.8742L47.307 21.8795ZM59.3829 11.1832C57.9985 11.1832 56.3154 11.3954 55.0932 11.7226C54.8564 11.7845 54.7106 12.0012 54.7471 12.2267L55.0622 14.1546C55.0804 14.2722 55.1533 14.3784 55.2535 14.4491C55.3555 14.5199 55.483 14.5375 55.6068 14.5199C56.7416 14.3076 57.9147 14.1838 58.9075 14.1838C60.8747 14.1838 61.1917 14.5906 61.1917 15.8818V17.0138H58.2772C55.483 17.0138 54.288 18.1281 54.288 20.7635C54.288 23.275 55.5995 24.7077 57.8765 24.7077C59.2007 24.7077 60.5232 24.354 61.6343 23.6995L61.7527 24.1117C61.8073 24.3062 61.9895 24.4389 62.199 24.4389H64.4176C64.6726 24.4389 64.8785 24.2355 64.8785 23.9878V15.9225C64.8785 12.4558 63.3939 11.1646 59.3956 11.1646L59.3792 11.1734L59.3829 11.1832ZM98.1935 11.1832C96.8091 11.1832 95.1333 11.3954 93.9129 11.7226C93.6852 11.7845 93.5395 12.0012 93.5804 12.2267L93.8992 14.1546C93.9174 14.2722 93.9903 14.3784 94.0905 14.4491C94.1943 14.5199 94.3218 14.5375 94.4457 14.5199C95.575 14.3076 96.7408 14.1838 97.7426 14.1838C99.7099 14.1838 100.02 14.5906 100.02 15.8818V17.0138H97.1051C94.2999 17.0138 93.105 18.1281 93.105 20.7635C93.105 23.275 94.4138 24.7077 96.6934 24.7077C98.0168 24.7077 99.3347 24.354 100.446 23.6995L100.564 24.1117C100.619 24.3062 100.801 24.4389 101.01 24.4389H103.215C103.47 24.4389 103.679 24.2355 103.679 23.9878V15.9225C103.679 12.4558 102.194 11.1646 98.1962 11.1646L98.2008 11.1734L98.1935 11.1832ZM22.7882 6.5491C22.6971 6.48278 22.5924 6.44917 22.4849 6.44917C22.412 6.44917 22.3574 6.45978 22.3027 6.48101C21.2098 6.88251 20.1169 7.1885 19.1151 7.41313C18.9147 7.46619 18.7362 7.60769 18.6779 7.78456C17.9493 9.73015 16.0731 11.5873 14.124 13.5152C14.0512 13.586 13.9419 13.6921 13.7597 13.6921C13.5776 13.6921 13.4683 13.6037 13.3954 13.5276C11.4282 11.5909 9.57019 9.75138 8.84158 7.80578C8.76871 7.62891 8.60478 7.48741 8.40441 7.43435C7.40256 7.20442 6.29142 6.89489 5.21671 6.49693C5.16207 6.47924 5.09285 6.4704 5.03456 6.4704C4.92527 6.4704 4.81962 6.50577 4.73036 6.57033C4.59193 6.66761 4.52089 6.83564 4.53728 6.99482C4.70122 8.60967 5.36608 10.1874 6.55008 11.8411C7.67033 13.3976 9.11845 14.8391 10.5301 16.2311C13.1167 18.7958 15.5667 21.2189 15.7835 24.0312C15.8017 24.2823 16.0203 24.4787 16.2789 24.4787H19.3209C19.4575 24.4787 19.5905 24.4256 19.6852 24.3283C19.7799 24.231 19.8309 24.1019 19.8218 23.9693C19.7253 22.0918 18.9967 20.2107 17.5941 18.2183C17.3026 17.8026 16.993 17.3958 16.6623 16.9978C16.5294 16.8387 16.5858 16.6353 16.6879 16.5362L16.9975 16.232C18.4065 14.8435 19.8573 13.402 20.9776 11.8455C22.1616 10.1962 22.8173 8.62647 22.9858 7.01251C23.004 6.8489 22.9275 6.67645 22.7927 6.57652L22.8018 6.56325L22.7882 6.5491ZM13.7716 7.99946C14.7251 7.99946 15.2789 7.94021 15.472 7.94021C15.6906 7.94021 15.9274 8.11708 15.9274 8.38239C15.9274 8.45314 15.9091 8.5062 15.8909 8.55926C15.7634 8.8847 15.1805 10.0662 14.1058 11.0797C13.9783 11.1929 13.8508 11.2141 13.7597 11.2141C13.6687 11.2141 13.5229 11.1929 13.4009 11.0797C12.3262 10.0662 11.7506 8.88647 11.6249 8.55572C11.6067 8.50266 11.5885 8.4496 11.5885 8.37001C11.5885 8.11354 11.8125 7.91898 12.0475 7.91898C12.2424 7.91898 12.7943 7.97204 13.7488 7.97204H13.7524L13.7707 7.98973L13.7716 7.99946ZM91.0977 6.47216H88.3727C88.1176 6.47216 87.91 6.66672 87.91 6.91434V9.24906C87.91 9.49668 88.1176 9.69832 88.3727 9.69832H91.105C91.36 9.69832 91.5667 9.50376 91.5667 9.25614V6.90285C91.5667 6.65523 91.36 6.45625 91.105 6.45625L91.0977 6.47747V6.47216ZM27.0779 0.902451C26.9568 0.743266 26.7682 0.65483 26.5679 0.65483C26.465 0.65483 26.3629 0.676054 26.2764 0.725579C22.5423 2.70655 18.2189 3.7554 13.767 3.75717C9.317 3.75717 4.99267 2.70655 1.26216 0.72381C1.17108 0.670748 1.07089 0.653061 0.97071 0.653061C0.770341 0.653061 0.579079 0.741497 0.460679 0.900682C0.28399 1.11293 0.278525 1.50205 0.579079 1.73198C2.44616 3.07621 4.50632 4.13745 6.69945 4.86263C8.97637 5.60549 11.3517 5.99461 13.767 5.99461C16.1842 5.99461 18.5613 5.60549 20.8346 4.86263C23.0295 4.13745 25.0897 3.07621 26.9604 1.73198C27.261 1.50205 27.2519 1.11293 27.0788 0.882995V0.902451H27.0779Z" fill="#5982E7"/>
            </svg>
        </div>
        <div class="sponsor-row-block">
            <svg width="117" height="29" viewBox="0 0 117 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M105.843 17.6368C105.843 15.3331 104.873 12.6667 101.856 8.94974L94.5785 0H84.4471L90.215 6.27897C91.1868 7.32605 92.4245 8.26702 92.4245 8.26702C91.0219 7.48259 89.246 7.16864 87.8434 7.16864C84.5027 7.16864 81.1073 7.8496 78.089 9.47152C74.8558 11.1978 72.6973 14.0764 72.6973 17.8977C72.6973 20.8276 74.047 23.0783 75.7711 24.8046C79.651 28.5746 86.7122 28.9399 89.2997 28.9399C93.1267 28.9399 99.1105 28.1015 102.504 25.1194C104.5 23.3401 105.847 20.8807 105.847 17.6377L105.843 17.6368ZM117 7.74524H108.215V28.2598H117V7.74524ZM44.7786 28.2598L25.3746 0H14.4882L17.4965 3.45343L0.421387 28.2598H10.2304L13.1567 23.6027H31.658L34.6454 28.258H44.7786V28.2598ZM70.4868 19.6771V7.74524H61.973V16.9037C61.973 19.5214 61.8637 20.2519 61.7025 20.932C61.1105 22.8157 59.0612 23.6523 56.9574 23.6523C54.0475 23.6523 52.6995 22.553 52.1622 20.8258C51.9982 20.251 51.9463 19.6249 51.8926 18.9952C51.8379 18.316 51.8926 17.5829 51.8926 16.7976V7.74524H43.2694V19.7283C43.2694 22.3991 44.1847 24.3863 45.6939 25.7482C48.2805 28.2067 52.6467 28.9407 56.6896 28.9407C61.595 28.9407 65.3692 28.2598 68.0633 25.6951C69.4659 24.3863 70.4896 22.66 70.4896 19.6771H70.4868ZM97.4365 17.8977C97.4365 20.0423 95.9811 21.6651 94.1486 22.5548C92.6404 23.3401 90.8607 23.5488 89.297 23.5488C87.7341 23.5488 85.9016 23.2366 84.3925 22.5026C82.56 21.6138 81.1592 19.8866 81.1592 18.0012C81.1592 15.7523 82.9371 13.9729 85.0391 13.0824C86.3324 12.5058 87.8962 12.2971 89.1348 12.2971C90.3207 12.2971 92.0466 12.4536 93.3927 12.978C95.819 13.9729 97.4365 15.8557 97.4365 17.8977ZM28.2381 18.0879H16.5119L22.3554 8.726L28.239 18.0879H28.2381Z" fill="#D6DAE5"/>
            </svg>
        </div>
    </div>
    <div class="planAndManage-row">
        <div class="planAndManage-row-block">
            <div class="planAndManage-row-block-preTitle">Desktop and mobile app</div>
            <div class="planAndManage-row-block-title"><b>Plan</b> and <b>manage</b></div>
            <div class="planAndManage-row-block-text">Brute laoreet efficiendi id his, ea illum nonumes luptatum pro. Usu atqui laudem an, insolens gubergren similique est cu. Et vel modus congue vituperata. Solum patrioque no sea. Mea ex malis mollis oporteat. Eum an expetenda consequat.</div>
            <div class="planAndManage-row-block-topic">
                <div class="planAndManage-row-block-button-left">
                    <q-btn flat >View video
                        <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 2.73354C6.66667 3.11844 6.66667 4.08069 6 4.46559L1.5 7.06367C0.833333 7.44857 0 6.96744 0 6.19764V1.00149C0 0.231691 0.833333 -0.249434 1.5 0.135467L6 2.73354Z" fill="white"/>
                        </svg>
                </div>
                <div class="planAndManage-row-block-button-right">
                    <q-btn flat >See features
                </div>
            </div>
        </div>
        <div class="planAndManage-row-block-gadgets">
            <div class="planAndManage-row-block-notebook">
                <img src="IMG/Notebook.png" alt="Notebook.png">
                <div class="planAndManage-row-block-notebook-block"></div>
            </div>
            <div class="planAndManage-row-block-phone_1">
                <img src="IMG/RightPhone.png" alt="RightPhone.png">
            </div>
            <div class="planAndManage-row-block-phone_2">
                <img src="IMG/LeftPhone.png" alt="LeftPhone.png">
            </div>
        </div>
    </div>

    <div class="ourApp">
        <div class="ourApp-row-preTitle">About us</div>
        <div class="ourApp-row-title">Read about our app</div>
        <div class="ourApp-row">
            <div class="ourApp-row-block">
                <div class="ourApp-row-block-image">
                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 7.87273V19H6.42105L9 17L11.5789 19H16V7.87273L9 2L2 7.87273Z" stroke="#4074F8" stroke-width="2.5"/>
                    </svg>
                </div>
                <div class="ourApp-row-block-title">
                    Overview
                </div>
                <div class="ourApp-row-block-text">
                    Brute laoreet efficiendi id his, ea illum nonumes luptatum pro.
                </div>
            </div>
            <div class="ourApp-row-block">
                <div class="ourApp-row-block-image">
                    <svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.7544 16H12.0877H9.19945H2V5.94956V2H12.0877L13.7018 5.16129H19.7544V6.96774M19.7544 16L25 6.96774H19.7544M19.7544 16V6.96774" stroke="#4074F8" stroke-width="2.5"/>
                    </svg>
                </div>
                <div class="ourApp-row-block-title">
                    Files
                </div>
                <div class="ourApp-row-block-text">
                    No vim nulla vitae intellegat. Ei enim error ius, solet atomorum conceptam ex has.
                </div>
            </div>
            <div class="ourApp-row-block">
                <div class="ourApp-row-block-image">
                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2V6.94956V13.5H4.28115L5.5 17L9 13.5H13.7018H19.7544V7.96774V2H17H12.5H2Z" stroke="#4074F8" stroke-width="2.5"/>
                    </svg>
                </div>
                <div class="ourApp-row-block-title">
                    Meeting chats
                </div>
                <div class="ourApp-row-block-text">
                    Vim ne tacimates neglegentur. Erat diceret omittam at est.
                </div>
            </div>
            <div class="ourApp-row-block">
                <div class="ourApp-row-block-image">
                    <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 11.9677V17.5H4.28115H9H13.7018H19.2544V11.9677M6.75439 5L10.7544 2M14.7544 5L10.7544 2M10.7544 2V12.5" stroke="#4074F8" stroke-width="2.5"/>
                    </svg>
                </div>
                <div class="ourApp-row-block-title">
                    Save events
                </div>
                <div class="ourApp-row-block-text">
                    Nisl idque mel ea, nominati voluptatum.
                </div>
            </div>
        </div>
        <div id="ourApp-buttons" class="ourApp-row">
            <div id="readMore" class="header-row-block">
                    <q-btn flat >Read more
            </div>
            <hr class="little-line">
            <div class="or">or</div>
            <hr class="little-line">
            <div id="getStarted" class="header-row-block">
                    <q-btn flat >Get started
            </div>
        </div>
    </div>
    <div class="statistic">
        <div class="statistic-left">
            <div class="statistic-right-image">
                <svg width="67" height="68" viewBox="0 0 67 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 33.625C2 16.159 16.2412 2 33.8085 2C37.0463 2 40.1712 2.48098 43.1147 3.375" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.9628 40.4307C30.7436 44.1895 36.873 44.1895 40.6537 40.4307C44.4343 36.6719 60.0847 10.2499 58.7018 8.87494C57.3188 7.49994 30.7436 23.0602 26.9628 26.819C23.1823 30.5778 23.1823 36.6719 26.9628 40.4307ZM33.808 36.3751C35.3356 36.3751 36.5742 35.1439 36.5742 33.6251C36.5742 32.1063 35.3356 30.8751 33.808 30.8751C32.2805 30.8751 31.0422 32.1063 31.0422 33.6251C31.0422 35.1439 32.2805 36.3751 33.808 36.3751Z" fill="white"/>
                    <ellipse cx="6.14901" cy="50.125" rx="2.76596" ry="2.75" fill="white"/>
                    <ellipse cx="17.2127" cy="61.125" rx="2.76596" ry="2.75" fill="white"/>
                    <ellipse cx="33.8084" cy="65.25" rx="2.76596" ry="2.75" fill="white"/>
                    <ellipse cx="50.4041" cy="61.125" rx="2.76596" ry="2.75" fill="white"/>
                    <ellipse cx="60.085" cy="50.125" rx="2.76596" ry="2.75" fill="white"/>
                    <ellipse cx="64.234" cy="33.625" rx="2.76596" ry="2.75" fill="white"/>
                </svg>
            </div>
            <div class="statistic-right-number">
                89%
            </div>
            <div class="statistic-right-text">
                Customers who have increased their productivity
            </div>
        </div>
        <div class="statistic-right">
            <div class="statistic-right-image">
                <svg width="75" height="66" viewBox="0 0 75 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="28.6252" cy="17.5" rx="15.6369" ry="15.5" stroke="#5E80FF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M55.2501 64.0001C55.2501 49.6556 43.3296 38.0271 28.625 38.0271C13.9204 38.0271 2 49.6556 2 64.0001" stroke="#5E80FF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <ellipse cx="62.0117" cy="20.2229" rx="6.45334" ry="6.49324" stroke="#5E80FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M72.9999 39.7027C72.9999 33.6935 68.0804 28.8221 62.0118 28.8221C55.9432 28.8221 51.0237 33.6935 51.0237 39.7027" stroke="#5E80FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="statistic-right-number">3123</div>
            <div class="statistic-right-text">Users who have used our application</div>
        </div>
    </div>
    <div class="blog">
        <div class="blog-preTitle">OUR RESOURCES</div>
        <div class="blog-title">Start reading our blog</div>
        <div class="blog-body">
            <div class="blog-body-leftArrow">
                <svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 9.5L2 9.5M2 9.5L9.81132 17M2 9.5L9.81132 2" stroke="#A8B4E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="blog-body-card">
                <div class="card-block-bigImage">
                    <img src="IMG/pen.png" alt="pen.png">

                </div>
                <div class="card-block-images">
                    <img class="card-block-image" src="IMG/table.png" alt="table.png">
                    <img src="IMG/blueMan.png" alt="blueMan.png">
                </div>
                <div class="card-block-information">
                    <div class="information-title">How to start planning</div>
                    <div class="information-text">Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti. Natum petentium principes mei ea. Tota everti periculis vis ei, quas tibique pro at, eos ut decore ...
                    </div>
                    <div class="information-buttons">
                        <div class="readNow">
                            <q-btn flat >Read now

                        </div>
                        <div class="addBookmarks">
                            <q-btn flat >Add to your bookmarks
                        </div>
                    </div>
                </div>


            </div>
            <div class="blog-body-rightArrow">
                <svg width="27" height="19" viewBox="0 0 27 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 9.5H25M25 9.5L17.1887 2M25 9.5L17.1887 17" stroke="#A8B4E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
        <div class="blog-navigation">
            <svg width="48" height="8" viewBox="0 0 48 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="4" cy="4" r="4" fill="#5283FF"/>
                <circle cx="24" cy="4" r="4" fill="#D1D6E3"/>
                <circle cx="44" cy="4" r="4" fill="#D1D6E3"/>
            </svg>
        </div>
    </div>
    <div class="customers">
        <div class="customers-row">
            <div class="customers-information">
                <div class="customers-preTitle">TESTIMONIALS</div>
                <div class="customers-title">Customers's quotes</div>
                <div class="customers-text">Brute laoreet efficiendi id his, ea illum nonumes luptatum pro. Usu atqui laudem an.</div>
            </div>
            <div class="customers-block">
                <div class="customer-card">
                    Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.
                    <img src="IMG/customer.png" alt="customer.png">
                </div>
                <div class="customer-cardTransparent">
                    Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.

                </div>
            </div>

        </div>
        <div class="customers-navigation">
            <svg width="168" height="9" viewBox="0 0 168 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="44" cy="4.76569" rx="4" ry="4.00837" fill="#5283FF"/>
                <ellipse cx="64" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="84" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="104" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="124" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="144" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="164" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="4" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
                <ellipse cx="24" cy="4.76569" rx="4" ry="4.00837" fill="#D1D6E3"/>
            </svg>
        </div>
    </div>
    <div class="questions">
        <div class="questions-preTitle">Customer help</div>
        <div class="questions-title">Frequently asked questions</div>
        <div class="questions-list">


            <q-expansion-item switch-toggle-side>
                <template v-slot:header>

                    <q-item-section>
                        Reque insolens in vel?
                    </q-item-section>
                </template>

                <q-card>
                    <q-card-section switch-toggle-side>
                        <div class="documentation-text">
                            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.
                        </div>

                        <div class="documentation-button">
                            <q-btn flat >Go to documentation
                        </div>
                    </q-card-section>
                </q-card>
            </q-expansion-item>

            <hr>

            <q-expansion-item switch-toggle-side>
                <template v-slot:header>

                    <q-item-section>
                        Vis rebum error graecis ea, id sit postea accusamus?

                    </q-item-section>
                </template>

                <q-card>
                    <q-card-section>
                        <div class="documentation-text">
                            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.
                        </div>
                        <div class="documentation-button">
                            <q-btn flat >Go to documentation
                        </div>
                    </q-card-section>
                </q-card>
            </q-expansion-item>

            <hr>

            <q-expansion-item switch-toggle-side>
                <template v-slot:header>

                    <q-item-section>
                        Lorem repudiandae ne nec?
                    </q-item-section>
                </template>

                <q-card>
                    <q-card-section>

                        <div class="documentation-text">
                            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.
                        </div>

                        <div class="documentation-button">
                            <q-btn flat >Go to documentation
                        </div>
                    </q-card-section>
                </q-card>
            </q-expansion-item>

            <hr>

            <q-expansion-item switch-toggle-side>
                <template v-slot:header>

                    <q-item-section>
                        Ad dicit numquam vel. Et eos iudico feugait percipitur?
                    </q-item-section>
                </template>

                <q-card>
                    <q-card-section>
                        <div class="documentation-text">
                            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.
                        </div>
                        <div class="documentation-button">
                            <q-btn flat >Go to documentation
                        </div>
                    </q-card-section>
                </q-card>
            </q-expansion-item>

            <hr>

            <q-expansion-item switch-toggle-side>
                <template v-slot:header>

                    <q-item-section>
                        Sea no dico percipitur. Fierent constituam definitiones id eum?
                    </q-item-section>
                </template>

                <q-card>
                    <q-card-section>
                        <div class="documentation-text">
                            Quidam vocibus eum ne, erat consectetuer voluptatibus ut nam. Eu usu vidit tractatos, vero tractatos ius an, in mel diceret persecuti.
                        </div>
                        <div class="documentation-button">
                            <q-btn flat >Go to documentation
                        </div>
                    </q-card-section>
                </q-card>
            </q-expansion-item>

            <hr>
        </div>
    </div>
    <div class="pricing">
        <div class="pricing-preTitle">PLAN YOUR LIFE</div>
        <div class="pricing-title">Get <b>started</b> now</div>
        <div class="pricing-text">Brute laoreet efficiendi id his, ea illum nonumes luptatum pro. Usu atqui laudem an, insolens gubergren similique est cu. Et vel modus congue vituperata.</div>
        <div class="pricing-buttons">
            <div class="pricing-view">
                <q-btn flat >View pricing
            </div>

            <div class="pricing-read">
                <q-btn flat >Read documentation
            </div>


        </div>


    </div>
    <div class="row"></div>
    <div class="row">

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@1.15.10/dist/quasar.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quasar@1.15.10/dist/lang/ru.umd.min.js"></script>
<script>
    Quasar.lang.set(Quasar.lang.ru)
    var app = new Vue({
        el: '#app',
        data: {
            message: 'holy shit!'
        }
    })
</script>



</body>
</html>
