<div class="svg-file">
    <xml version="1.0" encoding="UTF-8">
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="77px" height="73px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g>
                <path style="opacity:0.742" fill="#000000" d="M 30.5,9.5 C 57.7944,9.6174 68.6277,22.9507 63,49.5C 53.5668,64.4926 40.4002,68.9926 23.5,63C 7.14011,52.7343 3.30677,38.9009 12,21.5C 17.0658,15.5641 23.2324,11.5641 30.5,9.5 Z M 31.5,13.5 C 46.5702,13.0838 56.0702,20.0838 60,34.5C 59.5262,52.9722 50.0262,61.8056 31.5,61C 18.5864,56.4126 12.4198,47.2459 13,33.5C 15.6139,23.3914 21.7806,16.7247 31.5,13.5 Z" />
            </g>
            <g>
                <path style="opacity:0.751" fill="#000000" d="M 46.5,19.5 C 47.7647,20.5145 48.4313,22.0145 48.5,24C 48.4079,27.2942 47.7412,30.4608 46.5,33.5C 43.3306,24.1659 37.8306,22.4993 30,28.5C 25.9095,35.9421 27.0762,42.4421 33.5,48C 38.5751,50.0925 43.5751,49.9258 48.5,47.5C 49.5119,50.6954 48.1786,52.5287 44.5,53C 24.6904,55.5372 17.5238,47.3705 23,28.5C 28.8045,21.7984 35.9712,19.7984 44.5,22.5C 45.9185,21.9953 46.5852,20.9953 46.5,19.5 Z" />
            </g>
        </svg>
</div>
<h1 class="heading">Account Recovery</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-container" id="account-recovery-form" autocomplete="off" spellcheck="false">
    <p class="message">To recover your account by resetting your password, please enter your email where we could send a password reset link below:</p>
    <div class="input-area">
        <input type="email" name="email" class="email" id="account-recovery-email" placeholder="Email">
    </div>
    <div id="account-recovery-submit-area">
        <input type="submit" class="submit" id="account-recovery-submit" value="Continue">
    </div>
</form>