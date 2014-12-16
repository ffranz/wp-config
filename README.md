WP Config
===========================

Integration wp-config file in Wordpress for switch environment: `local`, `staging` and `production` development.

---

### How to use

1. Copy `wp-config` folder on Wordpress root.

2. Enter this code by replacing the variable DEFINE in `wp-config.php`.

```html
require('wp-config/wp-environments.php');
```

3. Change variable on `.local`, `.staging` and `.production` file.

`define('DB_NAME', 'database_name_here');`
`define('DB_USER', 'username_here');`
`define('DB_PASSWORD', 'password_here');`
`define('DB_HOST', 'localhost');`
`define('DB_CHARSET', 'utf8');`
`define('DB_COLLATE', '');`