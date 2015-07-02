# bourboneat
Wordpress Theme (v4.1 and later) with SASS, Bourbon.io Neat and IcoMoon.io icons

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