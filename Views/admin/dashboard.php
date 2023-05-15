<?php use Utils\Tools; ?>

<div id="dashboard">
    <div class="bg-svg">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="300" preserveAspectRatio="none" viewBox="0 0 1440 560">
        <g mask="url(&quot;#SvgjsMask1007&quot;)" fill="none">
            <rect width="100%" height="560" x="0" y="0" fill="rgba(24, 62, 83, 1)"></rect>
            <path d="M 0,258 C 57.6,222.6 172.8,101.2 288,81 C 403.2,60.8 460.8,162.8 576,157 C 691.2,151.2 748.8,43.4 864,52 C 979.2,60.6 1036.8,184.2 1152,200 C 1267.2,215.8 1382.4,144.8 1440,131L1440 560L0 560z" fill="rgba(31, 79, 107, 1)"></path>
            <path d="M 0,432 C 57.6,415.4 172.8,326.8 288,349 C 403.2,371.2 460.8,545.2 576,543 C 691.2,540.8 748.8,349 864,338 C 979.2,327 1036.8,493.2 1152,488 C 1267.2,482.8 1382.4,347.2 1440,312L1440 560L0 560z" fill="rgba(41, 97, 129, 1)"></path>
        </g>
        <defs>
            <mask id="SvgjsMask1007">
                <rect width="100%" height="560" fill="#ffffff"></rect>
            </mask>
        </defs>
    </svg>
    </div>

    <div class="dashboard-content">
        <div class="top">
            <div class="left">
                <span class="profil"><?= $_SESSION['user']['login'][0]; ?></span>
                <h3 class="name"><?= $_SESSION['user']['login']; ?></h3>
                <p class="role">Administrateur</p>

            </div>
            <div class="right">

                <h2>Bonjour  <?= $_SESSION['user']['login']; ?> !</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A corporis esse similique eum porro praesentium voluptates rerum architecto, quisquam quae fuga? Velit saepe veritatis quia vitae doloribus impedit cupiditate corrupti.</p>
                <p>Lorem ipsum dolor sit amet consectetur elit. Spraesentium voluptates rerum architecto, quisquam quae fuga? Velit saepe veritatis quia vitae doloribus impedit cupiditate corrupti.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro praesentium voluptates rerum architecto, quisquam quae fuga? Velit saepe veritatis quia vitae doloribus impedit cupiditate corrupti.</p>
            </div>
        </div>
        
        <div class="resume">
            <div class="resume__shop">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.29968 24.8C7.59474 24.8 6.21529 26.195 6.21529 27.9C6.21529 29.605 7.59474 31 9.29968 31C11.0046 31 12.3996 29.605 12.3996 27.9C12.3996 26.195 11.0046 24.8 9.29968 24.8ZM0 0V3.1H3.09989L8.6797 14.8645L6.58727 18.662C6.33928 19.096 6.19979 19.6075 6.19979 20.15C6.19979 21.855 7.59474 23.25 9.29968 23.25H27.899V20.15H9.95066C9.73367 20.15 9.56317 19.9795 9.56317 19.7625L9.60967 19.5765L11.0046 17.05H22.5517C23.7142 17.05 24.7371 16.4145 25.2641 15.4535L30.8129 5.394C30.9408 5.15745 31.0052 4.89177 30.9997 4.62292C30.9942 4.35407 30.9191 4.09124 30.7816 3.8601C30.6442 3.62897 30.4492 3.43743 30.2156 3.30421C29.982 3.17098 29.7179 3.10062 29.449 3.1H6.52528L5.06833 0H0ZM24.7991 24.8C23.0942 24.8 21.7148 26.195 21.7148 27.9C21.7148 29.605 23.0942 31 24.7991 31C26.5041 31 27.899 29.605 27.899 27.9C27.899 26.195 26.5041 24.8 24.7991 24.8Z" fill="#F8F8F8"/>
                </svg>
                <p class=""><span><?= Tools::getItemNumber('products'); ?> </span>produits en ventes</p>
            </div>
            <div class="resume__blog">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.61111 24.1111H17.2222C17.7102 24.1111 18.1195 23.9458 18.4502 23.6151C18.7808 23.2844 18.9456 22.8757 18.9444 22.3889C18.9444 21.9009 18.7791 21.4916 18.4484 21.1609C18.1178 20.8303 17.709 20.6655 17.2222 20.6667H8.61111C8.12315 20.6667 7.71384 20.832 7.38317 21.1627C7.0525 21.4933 6.88774 21.9021 6.88889 22.3889C6.88889 22.8769 7.05422 23.2862 7.38489 23.6168C7.71556 23.9475 8.1243 24.1123 8.61111 24.1111ZM8.61111 17.2222H22.3889C22.8769 17.2222 23.2862 17.0569 23.6168 16.7262C23.9475 16.3956 24.1123 15.9868 24.1111 15.5C24.1111 15.012 23.9458 14.6027 23.6151 14.2721C23.2844 13.9414 22.8757 13.7766 22.3889 13.7778H8.61111C8.12315 13.7778 7.71384 13.9431 7.38317 14.2738C7.0525 14.6044 6.88774 15.0132 6.88889 15.5C6.88889 15.988 7.05422 16.3973 7.38489 16.7279C7.71556 17.0586 8.1243 17.2234 8.61111 17.2222ZM8.61111 10.3333H22.3889C22.8769 10.3333 23.2862 10.168 23.6168 9.83733C23.9475 9.50667 24.1123 9.09793 24.1111 8.61111C24.1111 8.12315 23.9458 7.71384 23.6151 7.38317C23.2844 7.0525 22.8757 6.88774 22.3889 6.88889H8.61111C8.12315 6.88889 7.71384 7.05422 7.38317 7.38489C7.0525 7.71556 6.88774 8.1243 6.88889 8.61111C6.88889 9.09908 7.05422 9.50839 7.38489 9.83906C7.71556 10.1697 8.1243 10.3345 8.61111 10.3333ZM3.44445 31C2.49722 31 1.68606 30.6624 1.01095 29.9873C0.335836 29.3122 -0.00114522 28.5016 2.92398e-06 27.5556V3.44445C2.92398e-06 2.49722 0.337558 1.68606 1.01267 1.01095C1.68778 0.335836 2.49837 -0.00114522 3.44445 2.92398e-06H27.5556C28.5028 2.92398e-06 29.3139 0.337558 29.9891 1.01267C30.6642 1.68778 31.0011 2.49837 31 3.44445V27.5556C31 28.5028 30.6624 29.3139 29.9873 29.9891C29.3122 30.6642 28.5016 31.0011 27.5556 31H3.44445Z" fill="#F8F8F8"/>
                </svg>
                <p><span><?= Tools::getItemNumber('posts'); ?> </span>articles publiés</p>
            </div>
            <div class="resume__shop">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5 0C17.5554 0 19.5267 0.816515 20.9801 2.26992C22.4335 3.72333 23.25 5.69457 23.25 7.75C23.25 9.80543 22.4335 11.7767 20.9801 13.2301C19.5267 14.6835 17.5554 15.5 15.5 15.5C13.4446 15.5 11.4733 14.6835 10.0199 13.2301C8.56652 11.7767 7.75 9.80543 7.75 7.75C7.75 5.69457 8.56652 3.72333 10.0199 2.26992C11.4733 0.816515 13.4446 0 15.5 0ZM15.5 19.375C24.0638 19.375 31 22.8431 31 27.125V31H0V27.125C0 22.8431 6.93625 19.375 15.5 19.375Z" fill="#F8F8F8"/>
                </svg>
                <p><span><?= Tools::getItemNumber('users'); ?> </span>administrateurs</p>
            </div>
        </div>
    </div>
</div>
