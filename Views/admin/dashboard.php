<div id="dashboard">
    <div class="bg-svg">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="250" preserveAspectRatio="none" viewBox="0 0 1440 560">
            <g mask="url(&quot;#SvgjsMask1018&quot;)" fill="none">
                <rect width="1440" height="560" x="0" y="0" fill="rgba(140, 164, 179, 1)"></rect>
                <path d="M 0,258 C 57.6,222.6 172.8,101.2 288,81 C 403.2,60.8 460.8,162.8 576,157 C 691.2,151.2 748.8,43.4 864,52 C 979.2,60.6 1036.8,184.2 1152,200 C 1267.2,215.8 1382.4,144.8 1440,131L1440 560L0 560z" fill="rgba(165, 189, 203, 1)"></path>
                <path d="M 0,432 C 57.6,415.4 172.8,326.8 288,349 C 403.2,371.2 460.8,545.2 576,543 C 691.2,540.8 748.8,349 864,338 C 979.2,327 1036.8,493.2 1152,488 C 1267.2,482.8 1382.4,347.2 1440,312L1440 560L0 560z" fill="rgba(179, 205, 221, 1)"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1018">
                    <rect width="1440" height="560" fill="#ffffff"></rect>
                </mask>
            </defs>
        </svg>
    </div>

    <div class="dashboard-content">
        <div class="left">

            <span class="profil"><?= $_SESSION['user']['login'][0]; ?></span>
            
        </div>
        <div class="right">
            <h2>Bonjour <?= $_SESSION['user']['login']; ?> !</h2>
        </div>
    </div>
</div>
