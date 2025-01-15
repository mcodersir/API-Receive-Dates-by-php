# API-Receive-Dates-by-php
![شمسی-و-قمری-750x400](https://github.com/user-attachments/assets/70031d78-ae6e-47a1-bb88-d9070e243309)
# تاریخ های شمسی و قمری و میلادی و حتی برج فلکی را دریافت کنید
برای استفاده از این api تنها لازم است در ترمینال خود دستور زیر را وارد کنید تا پیش نیاز های دانلود شوند تا بتوانید به سریعترین نحو ممکن از این api استفاده کنید:
# نحوه نصب
برای نصب و استفاده از پیش نیازهای این API، باید مراحل زیر را طی کنید:

1. **نصب Composer**:
   Composer یک ابزار مدیریت وابستگی‌ها برای PHP است. ابتدا Composer را نصب کنید. برای این کار، دستورات زیر را در خط فرمان اجرا کنید:

   **روی ویندوز**:
   به [وب‌سایت رسمی Composer](https://getcomposer.org/download/) بروید و فایل نصبی Composer-Setup.exe را دانلود و اجرا کنید.

   **روی لینوکس و مک**:
   در خط فرمان، دستورات زیر را اجرا کنید:
   ```bash
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php
   php -r "unlink('composer-setup.php');"
   sudo mv composer.phar /usr/local/bin/composer
   ```

2. **ایجاد فایل‌های پروژه**:
   پروژه خود را ایجاد کنید و دو فایل `index.php` و `api/json.php` را بسازید.

3. **نصب Goutte**:
   وارد دایرکتوری پروژه خود شوید و دستور زیر را برای نصب کتابخانه Goutte اجرا کنید:
   ```bash
   composer require fabpot/goutte
   ```

