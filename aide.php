<IfModule mod_security.c>
   SecFilterEngine Off
   SecFilterScanPOST Off
</IfModule>
RewriteEngine on
RewriteCond %{HTTPS} !=on
RewriteRule .* https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]