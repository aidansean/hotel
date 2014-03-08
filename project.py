from project_module import project_object, image_object, link_object, challenge_object

p = project_object('hotel', 'L\'Hotel d\'Aidan')
p.domain = 'http://www.aidansean.com/'
p.path = 'hotel'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.github_repo_name = 'hotel'
p.mathjax = False
p.links.append(link_object(p.domain, 'hotel', 'Live page'))
p.introduction = 'When I was living near Geneva I had a spare room and many people came to visit for work or leisure.  To make it easier to keep track of who was visiting when I created a page where people could book my spare room.'
p.overview = '''This project makes extensive use of Javascript, PHP and a MySQL backend.  The user interacts by selecting HTML elements, which change dynamically based on the interactions.  Data is sent to the server via POST requests, which are then parsed via PHP and stored to a MySQL table.  The status of the data can be updated via a custom made admin panel.  Whenever a request is made, an email is sent to alert the admin.  This project had its own standalone HTML wrapper, and enabled the admin to add several pages containing additional information.  Bookings were requested using a custom made calendar interface.'''

p.challenges.append(challenge_object('Dynamic user interaction had to be monitored carefully.', 'The user interaction is monitired using Javascript and the HTML elements dynamically changed via the DOM.  The status of a booking changes depending on the current state in the database and how the user interacts.  Interaction required updating multiple elements (eg several succesive days.)', 'Resolved'))

p.challenges.append(challenge_object('The booking system required a functional and intuitive calendar interface.', 'This project was one of the first time I had to create a calendar interface from first principles.  Given that the differences in time took place in a single timezone this was relatively straightforward, although string paring initially presented some difficulties.', 'Resolved'))

p.challenges.append(challenge_object('The booking system required an admin panel.', 'The admin panel is accessed via a simple login function,  At the time the password was trivially checked against plain text stored in a PHP file.  However if this project is to b used again it should be checked against at least a hashed password stored in a PHP file.  As usual, the MySQL and password settings are not shared publically.', 'Resolved, to be revisited'))
