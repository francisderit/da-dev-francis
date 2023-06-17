# Digital Awesome Development Test Project

This isn't really a test, rather a way to get an idea of how you problem solve and develop.

The project should take you no more than 4 hours to complete.

## Create a branch for your code
When you are ready to start fork this repository to your own github account `da-dev-{your_name)`
It's a good idea to make a couple of commits during development so we can see how you are progressing.


## How to submit your code for review

Please commit all of your working code to your repository.
Once you have finished creating the app and have committed your code let a team member know that your app is ready for review.
*MAKE SURE TO SHARE A LINK TO YOUR REPOSITORY!*

### Make sure your app is ready for review!

We should be able to pull down your completed repository, install the packages and run it locally to review.

***

# To-do List (Test Project)

We need to create a single list to-do app.
There is no authentication required for this app.

The app should display a single to-do list. Anyone can add, remove, or mark complete items in the list.

The only field a to-do list item has is a text description. That is required to add an item to the to-do list.

- When someone adds an item to the list it should save it to the database.
- When someone marks an item on the list complete it should update it in the database and show the item as marked complete.
- When someone removes the item from the list it should soft-delete the item and remove it from the list.



## Scope

- [ ] I should be able to view all of the items in the to-do list.
- [ ] I should be able to add an item to the list
- [ ] I should be able to remove an item from the list
- [ ] I should be able to mark an item from the list as complete

There are no design requirements for this task. You can install Tailwind or Bootstrap for basic styling if you prefer or include no styling at all. 


### Technical Requirements
- Database: Mysql or PostgreSQL
- API backend: Laravel
- Frontend: React.js (with typescript and React hooks)

****
#### Nice to have but not required:
- Use Repository Pattern
- Use Laravel's APiResource for API responses
****
Good luck and don't hesitate to reach out if you have any questions or need clarification on the scope or requirements.

****
## Setup
- Create .env file and copy the contents of .env.example file

Install all dependencies

- Run `composer install`
- Run `npm install`

Start the server

- Run `php artisan serve`
- Run `npm run dev`

Start MySQL in Apache and execute the migration file

- Create database and name it `todo_list`
- Run `php artisan migrate:fresh`

Access the application

- Run in any browser `localhost:8000`
