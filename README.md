# Newsifier
Polished MVP Of A News CMS

This a polished MVP of a news CMS where clients can create articles with GIF images.
This web applecation crated by laravel 9.23.0.

The clients can be to log in, log out and sign up.
Once they are logged in, they are able to create a new article, the article has only a title and GIF image.

can add text and GIF iamge using EditorJs by custom plugin that enables to add GIFs.
This web application is built used nwidart/laravel-modules is a Laravel package which was created to manage your large Laravel app using modules. A module is like a Laravel package, it has some views, controllers or models.


# Commands that must be run to set up this project:
- composer install 
- copy .env.example .env or cp .env.example .env
- php artisan key:generate

# Artisan Commands to seed data to database: 
Attention: The order of commands must be observed
<br>
- php artisan module:migrate User
- php artisan module:seed User
- php artisan module:migrate Article
<br>
by default the article table is empty



# Nots
- this project uploded in master branch
- for search gifs image into editor.js must be run vpn or proxy on your system or browser (it varies depending on your country)
- This plugin uses the GIPHY API for search GIFs
- The API_KEY used in the plugin is:(h0gpeYOH4l6X2FrAXrl9D8pu3X2ReXp3), but if it does not work for you, so you'll need to obtain an new API Key and copyed it in file: (public/landing-assets/js/button.js) in line 204 like this:
- data: {q:query,api_key:'YOUR_API_KEY', limit: giphyLimit, offset: offsetVal}

# Login Information:
- Phone: 0910000000
- Password: password




