WP Config
===========================

Integration wp-config file in Wordpress for switch environment: `local`, `staging` and `production` development.

---

### How to use

1) Copy repository on Wordpress root.

```html
git clone https://github.com/ffranz/wp-config.git
```

2) Replace `DEFINE` variable in `wp-config.php` with this:

```html
require('wp-config/wp-environments.php');
```

3) Change variable on `.local`, `.staging` and `.production` file.

```php
define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
```

4) Enjoy!