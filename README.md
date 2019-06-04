# Myster Travel
<a href="https://mystertravel.com/" target="_blank">mystertravel.com</a>
<br>Mobile/desktop responsive app designed for travelers to keep an organized record of his/her travel memories

### App Features
- Record trip details while traveling
    - View world map and add pins to places user has visited
    - Keep track of budget expenses
    - Log notes and upload photos
    - View trip summary and timeline
- View previous trips
- Share trip details with family and friends through Facebook, Twitter, and Email
- Persistent user login

### Accomplishments
- Created a full scale application with front-end and back-end integration
- Technologies used:
    - React.js
    - Redux
    - PHP
    - MySQL
    - Sass
    - Bootstrap4
    -  Google Maps API with map marker, geolocation, and Google Places autocomplete search features
    - AWS S3 file upload and file retrieval

### Future Features
- Refine sorting of budget items, collapse items under sorting categories
- Enhance interaction between summary timeline and map
- Re-route current trip pages for better user experience

### Project Planning and Progression Management
- Click on the links below to view the project planning and progression tracking tools
   - <a href="https://www.meistertask.com/projects/d5wdruhifd/join/" target="_blank">Task management</a>
   - <a href="https://www.figma.com/file/Xmh37OwoBnlSgdptWpvYidkO/Myster-Travel?node-id=0%3A1" target="_blank">Wireframe planning</a>
   - <a href="https://dbdesigner.page.link/aRYkTggDqqMi98sE8" target="_blank">Database schema</a>

### System Requirements
- PHP
- MySQL
- Composer
- Node
- Windows: XXAMP, Mac: MAMP

### Setup Instructions
This repo is built with React.js with Redux and PHP. Follow the below setup instructions to get started.
1. Fork this repo
2. Clone your forked copy of this repo
    - `git clone https://github.com/[your_username]/mystertravel.git`
3. Change directory into the newly cloned repo
    - navigate to the application folder `cd c219_travelagenda`
4. Install dependencies
    - `npm install`
    - navigate to the api folder `cd public/api`
    - follow composer installation instructions <a href="https://getcomposer.org/download/" target="_blank">here</a> to install composer locally into the folder
    - `php composer.phar install`
5. Create credential files
   a. Database credentials
        - navigate to the api folder `cd public/api`
        - make a copy of the mysqlconnect.php.config file and rename new file to mysqlconnect.php
        - add your database credentials
   b. AWS S3 credentials
        - navigate to the upload folder `cd upload`
        - make a copy of the key.php.config file and rename new file to key.php
        - add your AWS S3 credentials
   c. API credentials
       - navigate back to the application folder
       - make a copy of the api_keys.js.config file and rename new file to api_keys.js
       - add your Google credentials
9. Start dev server
    - `npm start`
10. Use MAMP, XAMPP, or a similar program to start your local Apache and MySQL servers
    - Point root directory to the public folder of this project
    - Set Apache port to the defined port in the proxy > target property found in the package.json file
    - import the sql database into phpMyAdmin, or similar found in the public/api/data folder
11. Open a browser and navigate to `localhost:3000`

### Authors
- **Kylie Chao** (https://github.com/kylieclin)
- **Jennifer Lai** (https://github.com/jen-icl)
- **Quan Le** (https://github.com/quandhle)
- **Westley Poon** (https://github.com/WestleyPoon)
