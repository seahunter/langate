# This is the test example for Langate 
## How to install?

To run this project you may have a Docker installed on your computer.
While docker will be on you computer, please download the project a go to the root repository and run text commands:
+ docker-compose up --build -d
+ Enter the next link in the browser: http://localhost:8081/
+ Done :)

If you want make additional changes in the codebase, you have to install node_modules
+ Go to the main theme folder /wp-content/themes/langate
+ Run "yarn" - it will install modules for the project. The command was tested on node v16.14.2
+ If you don't have specified version of Nodejs you can use node-js container from Docker

Next command available for the development:
+ yarn start - run watcher for local development
+ yarn build - build the project for the production