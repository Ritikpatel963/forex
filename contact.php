<?php
include 'header.php';
?>
<style>
    h1,
    p {
        text-align: center;
    }

    label {
        display: block;
        margin: 1em 0 .2em;
    }

    /* single-line text, checkbox, and button */
    input,
    select,
    textarea {
        display: block;
        width: 100%;
        padding: .3em;
        font-size: 20px;
        background-color: #fbfbfb;
        border: solid 1px #CCC;
        resize: vertical;
    }

    textarea {
        min-height: 180px;
    }

    select {
        color: #0A2B54;
    }

    option {
        color: blue;
        background: lavenderBlush;
    }

    input[type=checkbox] {
        display: inline;
        width: auto;
        color: red;
    }

    input[type=submit] {
        background: #0A2B54;
        margin: 1em 0 0;
        color: white;
        border: none;
        border-radius: 8px;
        transition: all .3s ease-out;
    }

    input:focus,
    input:hover,
    select:focus,
    select:hover,
    textarea:focus,
    textarea:hover {
        background: #cddbf7;
    }

    /* hover and focus states */
    input[type=submit]:hover,
    input[type=submit]:focus {
        background: #107BFD;
        outline: none;
    }

    .contactform form {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 100px;
        padding-right: 100px;
    }

    @media screen and (min-width:600px) {

        /*  make the form 2 columns */
        form:after {
            content: '';
            display: block;
            clear: both;
        }

        .column {
            width: 50%;
            padding: 1em;
            float: left;
        }


    }

    @media (max-width: 767px) {
        .contactform form {
            padding-left: 20px;
            padding-right: 20px;
        }
    }
</style>
<div class="container contactform">

    <form action="#" method="post">
        <h1>Contact Us</h1>
        <p>Please take a moment to get in touch, we will get back to you shortly.</p>
        <div class="column">
            <label for="the-name">Your Name</label>
            <input type="text" name="name" id="the-name">

            <label for="the-email">Email Address</label>
            <input type="email" name="email" id="the-email">

            <label for="the-phone">Phone Number</label>
            <input type="tel" name="phone" id="the-phone">
        </div>
        <div class="column">
            <label for="the-message">Message</label>
            <textarea name="message" id="the-message"></textarea>
            <label>
                <input type="checkbox" name="newsletter" value="yes"> Join our mailing list?
            </label>
        </div>
        <input type="submit" value="Send Message" class="sendbutton">
    </form>
</div>
<?php
include 'footer.php';
?>