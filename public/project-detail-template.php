<!DOCTYPE html>
<?php
require("../src/app/init.php");
$title_tag = "Austin Chiatto | Interplanetary Launch Tracker";
$meta_desc = "Stay up-to-date on the latest rocket launches with our comprehensive tracking tool! Our project provides real-time updates on upcoming launches, including launch dates, times, and locations. Never miss a rocket launch again - start tracking today.";
$og_url = "https://austinchiatto.com/public/interplanetary.php";
$og_image = "../src/assets/images/interplanetary-mockup__laptop-01.png";
require("../src/partials/shared/base/head.php");
require(get_path("data/projects.php"));
?>

<body>
    <!-- Header -->
    <?php require("../src/partials/shared/base/header/header.php"); ?>
    <main>
        <div class="s-section-wrapper--theme-dark">
            <!-- hero title -->
            <section class="s-section--flex o-proj-hero js-projHero">
                <div class="u-text-center o-proj-hero__headings js-projHeadings">
                    <h1 class="a-heading--large">Project Heading</h1>
                    <h2 class="a-heading--sub">Project Caption / Description</h2>
                    <svg class="o-proj-hero__scroll-arrow" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 16.577L16 29.5001L30 16.577" stroke="#EEF0F2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.001 27.7051V1.5" stroke="#EEF0F2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="o-proj-hero__img-cont">
                    <img class="o-proj-hero__img js-projHeroImg" src="../src/assets/images/testDisplay.png" alt="">
                </div>
            </section>
            <!-- external CTA section -->
            <section class="s-section js-externalCTA">
                <div class="s-section__content o-external-cta">
                    <h2 class="u-text-center">Keep up <span class="u-font-highlight">with the <br> Modern-Day</span> Space Race</h2>
                    <ul class="o-about-hero__link-list">
                        <!-- DON'T FORGET TO ADD PROJECT NAME PHP STUFF &&&&& the about hero link list above -->
                        <li><a class="a-button--new" href="#" title="Explore the live version of PROJECT NAME">Live Website</a></li>
                        <li><a class="a-button--new" href="#" title="See the documentation & code behind PROJECT NAME">Source Code</a></li>
                    </ul>
                </div>
            </section>
            <section class="s-section">
                <div class="s-section__content">
                    <div class="o-project-grid">
                        <div class="o-project-grid__column">
                            <!-- team / solo card -->
                            <div class="o-project-grid__item--tall">
                                <div class="o-project-grid__heading-cont">
                                    <h4 class="p--xs u-font-highlight">My Contributions</h4>
                                    <p class="a-heading">Solo Project</p>
                                </div>
                            </div>
                            <!-- last commit card -->
                            <div class="o-project-grid__item o-project-grid__repo">
                                <div class="o-project-grid__heading-cont">
                                    <h4 class="p--xs u-font-highlight">Last Commit</h4>
                                    <p class="a-heading">June 3, 2023</p>
                                </div>
                                <img src="../src/assets/images/test-laptop-mockup.png" alt="">
                            </div>
                        </div>
                        <div class="o-project-grid__column">
                            <!-- live site card -->
                            <div class="o-project-grid__item o-project-grid__repo">
                                <div class="o-project-grid__heading-cont">
                                    <h4 class="p--xs u-font-highlight">Explore The Project</h4>
                                    <p class="a-heading">Live Website</p>
                                </div>
                                <img src="../src/assets/images/test-live-site-mockup.png" alt="">
                            </div>
                            <!-- development details card -->
                            <div class="o-project-grid__item--tall">
                                <div class="o-project-grid__heading-cont">
                                    <h4 class="p--xs u-font-highlight">Development Track</h4>
                                    <p class="a-heading">Project Details</p>
                                </div>
                            </div>
                        </div>
                        <div class="o-project-grid__item--wide">
                            <h3 class="o-project-grid__tech-heading p--small u-text-center">Made with love <span class="u-font-highlight">and {brackets}</span></h3>
                            <ul class="o-project-grid__tech">
                                <li class="o-project-grid__tech-icon">
                                    <!-- <img src="../src/assets/images/tech-logo__js.svg" alt=""> -->
                                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0V48H48V0H0ZM25.7143 37.2857C25.7143 41.9582 22.9543 44.2361 18.9589 44.2361C15.3504 44.2361 13.2557 42.3675 12.1929 40.1121L15.8657 37.8889C16.5739 39.1457 17.1118 40.2086 18.6579 40.2086C19.9436 40.2086 21 39.6289 21 37.3736V22.2857H25.7143V37.2857ZM36.3589 44.1289C32.1707 44.1289 29.4643 42.2389 28.1432 39.6289L31.8214 37.5C32.7857 39.0793 34.0446 40.1314 36.2679 40.1314C38.1364 40.1314 39.2218 39.3043 39.2218 38.0154C39.2218 36.4693 38.1043 35.9218 36.0418 35.0154L34.9146 34.5311C31.6596 33.1468 29.5018 31.4068 29.5018 27.7329C29.5018 24.3504 32.0786 21.8796 36.1061 21.8796C38.9743 21.8796 41.0346 22.7711 42.5186 25.3811L39 27.6429C38.2264 26.2575 37.3929 25.7143 36.1007 25.7143C34.7796 25.7143 33.9418 26.5521 33.9418 27.6429C33.9418 28.9961 34.7796 29.5436 36.7125 30.3814L37.8396 30.8646C41.6743 32.5082 43.8332 34.1861 43.8332 37.9532C43.8343 42.0139 40.6446 44.1289 36.3589 44.1289Z" fill="#6E6E73"/>
                                    </svg>
                                </li>
                                <li class="o-project-grid__tech-icon">
                                    <svg viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0L3.77957 43.2011L20.7444 48L37.7524 43.1946L41.5385 0H0ZM33.3173 14.1429H13.4135L13.8462 19.6071H32.8846L31.4232 35.8275L20.7692 38.8371L10.0947 35.8371L9.3613 27.5357H14.5817L14.9517 31.7454L20.7692 33.3289L26.5478 31.7304L27.1514 24.8571H9.08654L7.72464 8.82964H33.7716L33.3173 14.1429Z" fill="#6E6E73"/>
                                    </svg>
                                </li>
                                <li class="o-project-grid__tech-icon">
                                    <svg viewBox="0 0 48 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47.9802 23.6786C47.8424 22.5407 47.2761 21.5537 46.2927 20.7413C46.2805 20.7262 46.267 20.7121 46.2524 20.6993L46.2027 20.663L46.1868 20.6516L45.6646 20.2697L45.6468 20.2564L45.5802 20.2086C45.5558 20.1941 45.5296 20.1829 45.5024 20.1752C43.8505 19.1739 41.1158 18.4722 36.9318 19.9757C35.9333 18.2651 35.8199 16.8943 36.4883 14.7942C36.6074 14.4286 36.4968 14.1871 36.1405 14.0305C35.4243 13.7203 34.4436 13.8787 33.748 14.0658C33.4236 14.1518 33.2286 14.3389 33.1668 14.6224C32.7261 16.7225 31.4455 18.6412 30.2071 20.4931L30.134 20.6019C29.3708 18.9543 29.5293 17.678 30.0608 16.0791C30.1668 15.7602 30.0833 15.5483 29.7899 15.3899C28.9705 14.9593 27.7415 15.2553 27.2521 15.4023C26.6315 15.5865 25.9658 17.2943 25.2224 19.339C25.0349 19.8535 24.8736 20.2936 24.7771 20.4988C24.5474 20.9761 24.328 21.5203 24.0955 22.0978C23.5705 23.4046 22.979 24.8756 22.1333 25.7997C21.8258 25.1076 22.3096 24.0165 22.7793 22.9579C23.3352 21.7064 23.8602 20.5237 23.2555 19.7686C23.1599 19.6492 23.0413 19.551 22.907 19.4801C22.7727 19.4092 22.6255 19.367 22.4746 19.3562C22.2777 19.3409 22.08 19.3737 21.898 19.4517C21.9608 18.9123 21.9636 18.4866 21.809 17.972C21.5877 17.238 21.013 16.8265 20.2218 16.8485C18.4199 16.9019 16.8955 18.2689 15.9327 19.4068C15.2915 20.1705 13.8702 20.7528 12.6224 21.2635C12.1293 21.4763 11.6605 21.6673 11.2696 21.8582C10.6462 21.3217 9.85397 20.7804 9.01959 20.2086C6.67584 18.6068 4.01991 16.7903 3.92803 14.3274C3.79678 10.6895 7.86553 8.10919 11.4168 6.26779C14.1083 4.87408 16.4483 3.95004 18.5708 3.44506C21.5521 2.7358 24.0702 2.87899 26.054 3.8689C27.1396 4.41015 27.6477 5.58716 27.3252 6.79759C26.4815 9.94297 22.9855 12.0984 19.9958 13.0683C18.1949 13.6525 16.6621 13.8969 15.3083 13.8167C13.6115 13.7165 12.2258 12.8497 11.6333 12.4803C11.5384 12.4143 11.438 12.3568 11.3333 12.3084L11.3062 12.3018C11.2525 12.2882 11.1962 12.2899 11.1435 12.3067C11.0907 12.3236 11.0435 12.3549 11.0071 12.3972C10.8852 12.5452 10.9283 12.7791 10.9724 12.8974C11.549 14.4315 12.7396 15.4004 14.5105 15.7774C15.0901 15.8956 15.6801 15.9529 16.2712 15.9483C20.4158 15.9483 25.7043 13.515 27.6468 11.5114C28.9715 10.1463 29.9361 8.74304 30.3355 6.32315C30.7527 3.78871 29.0652 2.02749 27.3458 1.21609C23.1674 -0.747507 18.4218 0.028576 15.1762 1.02517C11.3793 2.19073 7.45116 4.30992 4.40053 6.8415C0.639283 9.96015 -0.720091 12.8554 0.358033 15.4567C1.46522 18.1229 4.16522 19.7905 6.77616 21.4038C7.6199 21.924 8.4224 22.4195 9.14522 22.9311C8.92772 23.039 8.70553 23.1488 8.47959 23.2586C6.28772 24.3401 3.80147 25.5572 2.42241 27.5685C1.42116 29.0338 1.23366 30.4925 1.86553 31.9043C2.20303 32.6556 2.80303 33.1653 3.63647 33.4192C4.07002 33.5443 4.51901 33.6051 4.96959 33.5997C6.59241 33.5997 8.37834 32.9314 9.35053 32.3138C11.068 31.216 12.1808 29.7422 12.659 27.9332C13.0846 26.3238 12.9824 24.7248 12.3637 23.2977L14.4683 22.2171C13.453 25.6536 14.2312 27.706 15.0862 28.8382C15.4012 29.2553 15.9693 29.5064 16.604 29.5178C17.2387 29.5293 17.8227 29.2859 18.1527 28.8716C18.7771 28.084 19.2383 27.1628 19.663 26.2417C19.6405 26.8431 19.6686 27.4521 19.8702 27.9685C20.0511 28.4334 20.3493 28.7417 20.7336 28.8601C21.1424 28.9871 21.6215 28.8802 22.0827 28.5594C24.1611 27.1113 25.5824 23.6356 26.7243 20.8415C26.8865 20.4444 27.0421 20.0626 27.193 19.7056C27.4755 20.735 27.8685 21.7297 28.3649 22.6715C28.4755 22.8758 28.4661 22.9655 28.3161 23.1335C28.0902 23.3855 27.7752 23.69 27.4415 24.0127C26.4308 24.9892 25.1727 26.2083 25.004 27.2803C24.9383 27.7098 25.229 28.1012 25.6799 28.19C27.0365 28.4649 28.6705 28.063 30.0524 27.1161C31.3086 26.2569 31.7811 25.0589 31.4586 23.5659C31.1465 22.1283 31.859 20.3432 33.5765 18.2565C33.8577 19.4526 34.2327 20.4196 34.7502 21.2663L34.7361 21.2778C33.4855 22.3899 31.7718 23.9125 32.038 25.7596C32.0604 25.9353 32.1184 26.1043 32.2085 26.2558C32.2986 26.4073 32.4187 26.5381 32.5611 26.6397C32.7134 26.7444 32.8853 26.8159 33.066 26.8498C33.2467 26.8836 33.4323 26.879 33.6111 26.8364C35.249 26.486 36.4818 25.7806 37.378 24.6819C38.2743 23.5831 37.9471 22.3651 37.6452 21.42C39.989 20.7728 42.0758 20.789 44.0296 21.4678C45.1265 21.8496 45.913 22.4768 46.3668 23.3426C46.9377 24.4318 46.6293 25.4369 45.4958 26.1729C45.148 26.3992 44.9802 26.5376 44.9699 26.7123C44.9676 26.7528 44.9749 26.7933 44.9912 26.8304C45.0075 26.8674 45.0324 26.8999 45.0636 26.9251C45.1949 27.0349 45.5999 27.2258 46.5158 26.6388C47.3596 26.0994 47.8546 25.3653 47.9811 24.4432C48.0066 24.189 48.0063 23.9328 47.9802 23.6786ZM10.5055 26.0708L10.4962 26.193C10.3499 27.5905 9.6524 28.8086 8.41959 29.8204C7.64522 30.4562 6.80428 30.8466 6.05241 30.9211C5.52741 30.9726 5.14584 30.9001 4.91897 30.7044C4.74928 30.5583 4.65834 30.3397 4.63772 30.0362C4.48397 27.6039 8.23022 25.1868 10.3387 24.3917C10.4891 24.9374 10.5456 25.5055 10.5055 26.0708ZM20.1008 19.2111C19.754 21.2243 18.7424 25.0246 17.1524 26.4994C17.0765 26.57 17.0127 26.5949 16.9836 26.5882C16.9546 26.5815 16.9321 26.5462 16.9087 26.4927C16.378 25.2403 16.574 23.1249 17.3774 21.463C17.9952 20.1819 18.8774 19.3333 19.8636 19.0765C19.9046 19.065 19.9468 19.0589 19.9893 19.0584C20.0225 19.056 20.0555 19.0651 20.083 19.0841C20.0946 19.1028 20.1022 19.1238 20.1053 19.1457C20.1084 19.1676 20.1068 19.1899 20.1008 19.2111ZM27.928 26.55C27.629 26.8679 27.2193 26.8249 27.3158 26.7085L28.8383 25.0627C28.7155 25.6288 28.3527 26.0975 27.928 26.55ZM34.244 25.1267C34.0992 25.1994 33.9425 25.2443 33.7818 25.2594C33.7386 24.3936 34.5627 23.4189 35.3755 22.7689C35.594 23.6719 35.1468 24.6265 34.244 25.1267Z" fill="#6E6E73"/>
                                    </svg>
                                </li>
                                <li class="o-project-grid__tech-icon">
                                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 0C10.7464 0 0 11.025 0 24.6107C0 35.4857 6.87857 44.7 16.4143 47.9571C16.548 47.9862 16.6846 48.0005 16.8214 48C17.7107 48 18.0536 47.3464 18.0536 46.7786C18.0536 46.1893 18.0321 44.6464 18.0214 42.5893C17.2275 42.7754 16.4154 42.8724 15.6 42.8786C10.9821 42.8786 9.93214 39.2893 9.93214 39.2893C8.83929 36.45 7.26429 35.6893 7.26429 35.6893C5.175 34.2214 7.25357 34.1786 7.41429 34.1786H7.425C9.83571 34.3928 11.1 36.7286 11.1 36.7286C12.3 38.8286 13.9071 39.4178 15.3429 39.4178C16.2922 39.3989 17.2268 39.1798 18.0857 38.775C18.3 37.1893 18.9214 36.1071 19.6071 35.4857C14.2821 34.8643 8.67857 32.7536 8.67857 23.325C8.67857 20.6357 9.61071 18.4393 11.1429 16.725C10.8964 16.1036 10.0714 13.5964 11.3786 10.2107C11.5539 10.1688 11.7341 10.1507 11.9143 10.1571C12.7821 10.1571 14.7429 10.4893 17.9786 12.7393C21.9102 11.6393 26.0684 11.6393 30 12.7393C33.2357 10.4893 35.1964 10.1571 36.0643 10.1571C36.2445 10.1507 36.4247 10.1688 36.6 10.2107C37.9071 13.5964 37.0821 16.1036 36.8357 16.725C38.3679 18.45 39.3 20.6464 39.3 23.325C39.3 32.775 33.6857 34.8536 28.3393 35.4643C29.1964 36.225 29.9679 37.725 29.9679 40.0178C29.9679 43.3071 29.9357 45.9643 29.9357 46.7678C29.9357 47.3464 30.2679 48 31.1571 48C31.3011 48.0006 31.4447 47.9863 31.5857 47.9571C41.1321 44.7 48 35.475 48 24.6107C48 11.025 37.2536 0 24 0Z" fill="#6E6E73"/>
                                    </svg>
                                </li>
                                <li class="o-project-grid__tech-icon">
                                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.0537 0.197625C13.9097 -1.48837 1.88366 7.79962 0.19766 20.9456C-1.48834 34.0896 7.79766 46.1136 20.9437 47.8016C34.0897 49.4876 46.1197 40.1996 47.8017 27.0536C49.4897 13.9096 40.2037 1.88563 27.0537 0.197625ZM31.9957 15.1676C31.5317 15.1736 31.1137 15.3636 30.8097 15.6676L21.9037 24.5736L20.0037 22.6736C28.7817 13.9216 30.3657 13.8376 31.9957 15.1676ZM22.2697 24.8896L31.1497 16.0096C31.3757 15.7736 31.6937 15.6256 32.0477 15.6256C32.7317 15.6256 33.2877 16.1816 33.2877 16.8656C33.2877 17.2456 33.1157 17.5876 32.8457 17.8136L32.8437 17.8156L23.4457 26.0656L22.2697 24.8896ZM22.9297 26.2776L20.7297 26.7536C20.7217 26.7556 20.7117 26.7556 20.7037 26.7556C20.6577 26.7556 20.6157 26.7296 20.5957 26.6896C20.5857 26.6716 20.5797 26.6516 20.5797 26.6296C20.5797 26.5956 20.5937 26.5656 20.6157 26.5436L21.9057 25.2536L22.9297 26.2776ZM17.3237 25.3596L19.6677 23.0156L21.4257 24.7716L17.4677 25.6236C17.4557 25.6256 17.4437 25.6276 17.4297 25.6276C17.3717 25.6276 17.3217 25.5936 17.2977 25.5456C17.2837 25.5236 17.2757 25.4976 17.2757 25.4676C17.2757 25.4256 17.2937 25.3856 17.3237 25.3596ZM10.0317 37.4736C9.95366 37.4676 9.89366 37.4036 9.89366 37.3236C9.89366 37.3176 9.89366 37.3136 9.89366 37.3076C9.89766 37.2716 9.91366 37.2396 9.93766 37.2156H9.94166L11.8337 35.3236L14.2777 37.7676L10.0317 37.4736ZM14.8837 34.9636C14.7337 35.0416 14.6357 35.1936 14.6357 35.3696C14.6357 35.4076 14.6397 35.4436 14.6497 35.4796V35.4756L15.0557 37.2056C15.0597 37.2236 15.0637 37.2436 15.0637 37.2656C15.0637 37.4036 14.9517 37.5156 14.8137 37.5156C14.7437 37.5156 14.6797 37.4876 14.6337 37.4396H14.6277L12.1717 34.9816L19.6957 27.4656L23.3357 26.6796L25.0837 28.4276C22.5737 30.6316 19.1417 32.8296 14.8837 34.9636ZM25.4397 28.1076H25.4357L23.7577 26.4296L33.1557 18.1796C33.2417 18.1016 33.3197 18.0196 33.3897 17.9296L33.3937 17.9256C33.0997 20.6156 29.3357 24.4156 25.4397 28.1076ZM35.3237 16.2516C34.3197 16.2516 33.4117 15.8456 32.7537 15.1876L32.7497 15.1836C32.0937 14.5256 31.6877 13.6156 31.6877 12.6136C31.6877 10.6016 33.3197 8.96963 35.3317 8.96963C36.2237 8.96963 37.0397 9.28962 37.6717 9.82162L37.6657 9.81763L34.4457 13.0436C34.4017 13.0876 34.3757 13.1456 34.3757 13.2116C34.3757 13.2776 34.4017 13.3376 34.4457 13.3796L36.9397 15.8736C36.4677 16.1116 35.9117 16.2516 35.3237 16.2516ZM37.9117 15.1876C37.7497 15.3476 37.5737 15.4896 37.3817 15.6156L37.3697 15.6236L34.9537 13.2096L38.0197 10.1436C39.3417 11.5836 39.2937 13.8076 37.9117 15.1876Z" fill="#6E6E73"/>
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="o-challenge">
                <section class="s-section--full-height js-chalHeaderCont">
                    <div class="o-challenge__header js-chalHeader">
                        <h2 class="u-text-center">Challenges Overcome <span class="u-font-highlight">in the <br></span> Development <span class="u-font-highlight">of [project name]</span></h2>
                    </div>
                </section>
                <section class="s-section js-chalImgCont">
                    <div class="s-section__content--wide o-challenge__img-cont js-chalImg">
                        <img class="o-challenge__img" src="../src/assets/images/test-challenge-mockup.png" alt="">
                    </div>
                </section>
                <section class="s-section js-chalCopyCont">
                    <div class="s-section__content--wide o-challenge__grid">
                        <div class="o-challenge__copy">
                            <h3>Challenge</h3>
                            <p class="u-font-highlight">description Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                        <div class="o-challenge__copy">
                            <h3>Solution</h3>
                            <p class="u-font-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                        <div class="o-challenge__copy">
                            <h3>Challenge</h3>
                            <p class="u-font-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                        <div class="o-challenge__copy js-chalCopyTrig">
                            <h3>Solution</h3>
                            <p class="u-font-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora alias ad quod fuga error! Rem?</p>
                        </div>
                    </div>
                </section>
            </div>
            <section class="s-section">
                <div class="s-section__content--wide">
                    <a class="o-doc-callout" href="#">
                        <h2 class="a-heading--sub o-doc-callout__label">GitHub Readme</h2>
                        <p class="p--small u-font-highlight o-doc-callout__copy">Explore the project documentation for more.</p>
                    </a>
                </div>
            </section>
            <section class="s-section--pad-large">
                <div class="s-section__content">
                    <h2 class="u-text-center">Liked [Project Name]? <span class="u-font-highlight">Take a <br> Look at</span> Another Project</h2>
                </div>
                <ul class="s-section__content o-proj-selection">
                    <?php
                    foreach ($projects as $project) : ?>
                        <li class="o-proj-selection__row">
                            <a class="o-proj-selection__wrapper" href="<?php echo h($project->link) ?>">
                                <h3 class="p"><?php echo h($project->name)?></h3>
                                <p class="u-font-highlight"><?php echo h($project->type)?></p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>
    </main>
    <!-- Footer -->
    <?php require("../src/partials/shared/base/footer/footer.php"); ?>
    <!-- Scripts -->
    <script src="../src/app/js/projectPageAnimation.js"></script>
</body>
</html>