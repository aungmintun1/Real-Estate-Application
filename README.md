
# find-house Real Estate Application

Allows users to upload property listings onto website and users are able to search for listings based on criteria that they input. Admin is able to manage all users and listings in dashboard page. Applciation also includes user authentication roles which include admin, agents, and users. 

### link to project: https://find-house-1bab9f152185.herokuapp.com/







![App Screenshot](https://aungmintun.netlify.app/assets/images/find-house.png)


## How It's Made:

### Tech used: HTML,CSS, Javascript, BootStrap, PHP, Laravel, MySql,

For this project I used PHP and Laravel for the backend and used MySql for the database. I also used the Blade templating engine in order to create the views for each page. For user authentication I installed Laravel Breeze.

## Optimizations:

I would prefer to have the user be able to upload floor plans, 3D tours, and videos for their listings as well however I don't have any dummy data that I can seed for each listing. 

Having a review system for each listing would be beneficial as well.

I also would like to have a messaging system where a user can message an agent or at least book an open house with an agent.

## Lessons Learned:

User Roles: I learned how to use different roles for user authentication such as admin, agent and users. And so I used a many to many relationship between roles and user models and then used a pivot table called user_roles in order to connect the model.

Search Query: I learned how to query for listings by first creating a query variable and then continously using the where() function in order to find the columns that align with the inputs of the user in the search query.

DOM manipulation: For the search query a user can search properties that are for sale or for rent. In this case I realized that the prices would have to be different for the dropdown menu I made. Obviously a property for sale would be more than for rent. And so I had to show a different list of prices for sale and for rent. So I made 2 dropdown menus and whenever an offer was toggled it would make the other dropdown menu hidden. For example when toggled for rent, the dropdown menu for sale would have a hidden class added thus hiding it and vice versa for the 'for rent' menu.  


