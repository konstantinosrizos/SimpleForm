# SimpleForm

### A simple form connected with a database !

A web form or HTML form on a web page allows a user to enter data that is sent to a server for processing.
Forms can resemble paper or database forms because web users fill out the forms using **checkboxes**, **radio buttons**, or **text fields**.


Forms can be made up of standard graphical user interface elements:
*text — a simple text box that allows input of a single line of text.
*password — similar to text, it is used for security purposes, in which the characters typed in are invisible or replaced by symbols such as *)
*radio — a radio button
*file — a file select control for uploading a file
*reset — a reset button that, when activated, tells the browser to restore the values to their initial values.
*submit — a button that tells the browser to take action on the form (typically to send it to a server)
*textarea — much like the text input field except a textarea allows for multiple rows of data to be shown and entered
*select — a drop-down list that displays a list of items a user can select from

When data that has been entered into HTML forms is submitted, the names and values in the form elements are encoded and sent to the server in an **HTTP** request message using **GET** or **POST**.

**PHP** is one very common language used for **server-side programming** and is one of the few languages created specifically for **web programming**.

To use PHP with an HTML form, the URL of the PHP script is specified in the `action` attribute of the form tag. 
The target PHP file then accesses the data passed by the form through PHP's `$_POST` or `$_GET` variables, depending on the value of the method attribute used in the form.