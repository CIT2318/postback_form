#'Postback' Forms

Upload the two files to a web server. To use the application, open *postback.php*. This is a simple form processing example that is similar to the examples we looked at last week.

* Can you create a 'postback' form i.e. a form that when submitted sends data back to the same page. Change the action attribute in postback.php to be like the following:-

```html
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
```

* View the source of the page in a web browser to what this PHP code outputs. 

* Add some more PHP to *postback.php* that will test the user's answer and validate the form.

* It's nice if we can re-populate the form with the user's data when the form is submitted. Have a look at the using the *value* attribute in HTML to achieve this. 
