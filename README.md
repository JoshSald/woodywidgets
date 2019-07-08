# Woody Widgets

This project is a deep dive into PHP. Most of the focus went into the back-end as opposed to the HTML and CSS, hence the basic visual appearance. The website comes with a custom CMS to make it easy for any user to edit the content of the website. All the content is stored and pulled directly from the database rather than being hardcoded into the HTML.

### Tools

- HTML
- CSS
- PHP
- SQL

## HOW TO USE

- Database info can be found in `config/config.php`
- Go to `woodywidgets/admin` to access the Admin Panel
- Use the username "admin" and the password "php" to enter

### Roles

- Only the Admin accounts can create and edit users
- As a security measure to insure that there is always 1 admin user, the user "admin" can only be changed directly from the Database. Other admin users **cannot** delete this account from within the website.
- Admin users can delete other admin users, but they cannot delete themselves
- All users can edit the website's content

### New Users

- By default, all users are given the password "php" (`admin/adduser.php` - Line 22)
- All users can change their passwords manually
- Once created, only the user themselves can change the password. The only other way is directly from the Database.
