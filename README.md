# Registration form using PHP

## Installation

1. To set up PHPMailer, follow this tutorial on YouTube: https://www.youtube.com/watch?v=9tD8lA9foxw. 

2. Install **Composer**

4. Run each in order:
    1. ```composer init```
    2. ```composer install```
    3. ```composer require vlucas/phpdotenv```

5. Rename ".env_sample" file to ".env" then put the empty values of:
    - "HOST_NAME" 
    - "USER_NAME" 
    - "PASSWORD" 
    - "DB_NAME"
    
    with your own **database** credentials, and
    
    - "MAIL_HOST"
    - "MAIL_USER_NAME"
    - "MAIL_PASSWORD"
    
    your **email** credentials.