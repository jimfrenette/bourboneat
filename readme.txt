=== bourboneat ===
bourboneat is a starter theme for building custom themes designed for WordPress version 4.1 and later. The theme uses the Bourbon Sass library and it’s Neat semantic grid components for a lightweight and modular responsive design. The header and footer designs were taken from the Bourbon Refills collection. Also included are IcoMoon font icons which can be easily updated using the IcoMoon app. Gulp’s build system is used to compile and minify Sass and Javascript modules into optimized CSS and Javascript. Clone, fork or download this responsive starter theme at GitHub and modify it as you wish into the theme you want.

License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Bourbon is licensed under The MIT License (MIT),
https://github.com/thoughtbot/bourbon/blob/master/LICENSE.md

Bourbon Refills including the header and logo image placeholders licensed under The MIT License (MIT),
https://github.com/thoughtbot/refills/blob/master/LICENSE.md

IcoMoon.io icons are licensed under the Creative Commons Attribution 4.0 International License. To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/ or send a letter to Creative Commons, PO Box 1866, Mountain View, CA 94042, USA.


## setup
<pre><code>
$ npm install
$ bower install
</code></pre>

gulp tasks
---------
<pre><code>
$ gulp styles // recompile sass
$ gulp js // recompile js
</code></pre>

## Menus

### Header

After activating the theme, in Appearance > Menus, select the Manage Locations tab. Then for the Primary Menu, select the menu to use in the Header.

### Social links

Social links are icons that correspond with the URL that is added to a menu of links.

1. Create a menu and add social links,  
2. In Appearance > Menus, select the Manage Locations tab. Then for the Social Links Menu location, select the menu of links you created.
3. View and/or update the available icons in
    
    - /icomoon/demo.html
    - /src/sass/modules/_icons.scss
    - /src/sass/modules/_nav-social.scss

    * more info:  https://en.support.wordpress.com/menus/social-links-menu/

### Footer

After activating the theme, in Appearance > Menus, select the Manage Locations tab. Then for the Footer Menu, select the menu to use in the Footer. Typically this is for links to About and Contact pages. See the documentation folder for more info.

### Terms

After activating the theme, in Appearance > Menus, select the Manage Locations tab. Then for the Terms Menu, select the menu to use in the Footers secondary links. Typically this is for links to Terms and Conditions and Privacy Policy pages. See the documentation folder for more info.
