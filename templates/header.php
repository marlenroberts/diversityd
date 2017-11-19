<style>
body {
    font-size: 1rem;
    font-family: 'Open Sans Condensed', sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}
#page {
    width: 1200px;
    margin: 0 auto;
}
header {
    background-image: url(data:image/jpg;base64,<?php echo base64_encode(file_get_contents(__DIR__ . '/../images/header.jpg')); ?>);
    height: 350px;
    width: 1200px;
}
header a {
    display: block;
    width: 100%;
    height: 100%;
}
#logo {
    float: right;
    margin: 25px;
}
nav {
    background-color: #000;
}
nav ul {
    margin: 0;
    padding-left: 20px;
}
nav li {
    list-style-type: none;
    display: inline-block;
}
nav a, nav a:visited {
	padding: 10px 15px;
	display: block;
	text-decoration: none;
    color: #FFFFFF;
    box-sizing: border-box;
    font-size: 2.25rem;
}
nav a:hover, nav a:active, nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	color: #c8dd63;
    text-decoration: none;
}
.content {
    background-color: #fff;
    padding: 20px;
}
.content p, .content a {
    font-size: 1.25rem;
    margin-top: 0;
    margin-bottom: 1rem;
}
.content a {
    color: #3d5729;
}
.content a:hover {
    color: #c8dd63;
}
.content ul.hlist {
    list-style: none;
    margin: 0;
    padding: 0;
}
.content ul.hlist li {
    display: inline-block;
}
.content ul.hlist li a {
    display: block;
    padding: 10px;
}
.content ul.vlist li, .content ul.vlist li a {
    font-size: 1.25rem;
}
.content h1 {
    color: #fff;
    background-color: #6ba043;
    width: 200px;
    text-align: right;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 2.5rem;
    margin-left: -20px;
    font-weight: bold;
    margin-top: 0;
    margin-bottom: 1rem;
}

.content h2 {
    margin-top: 0;
    margin-bottom: 1rem;
    color: #6ba043;
    font-weight: bold;
    font-size: 1.75rem;
}

.content h3 {
    margin-top: 0;
    margin-bottom: 1rem;
    color: #c8dd63;
    font-weight: bold;
    font-size: 1.5rem;
}
.hcol {
    display: inline-block;
    vertical-align: middle;
}
footer {
    background-color: #000;
    color: #fff;
    font-size: 1rem;
}
footer h4 {
    font-size: 1.5rem;
    color: #c8dd63;
    margin: 0;
}
#footer_row {
    width: 100%;
}
#footer_row div {
    float: left;
    width: 25%;
    padding: 20px;
    box-sizing: border-box;
}

#footer_row ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
#footer_row a {
    text-decoration: none;
    color: #ffffff;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 1.2em;
}
#footer_row a:hover {
    color: #eaaa50;
    text-decoration: underline;
}
#products_list img {
    border-radius: 100px;
}
#products_list img:hover {
    box-shadow: 0px 0px 40px grey;
}
.swap {
    text-decoration: none;
}
.swap img:last-child {
    display:none;
}
.swap:hover img:first-child {
    display:none;
}
.swap:hover img:last-child {
    display:inline-block;
}
.location_panel {
    width: 600px;
}
.location_panel img {
    float: right;
}
#service_request_form label, #service_request_form input {
    display: block;
    margin-bottom: 2px;
    width: 100%;
    box-sizing: border-box;
}
#service_request_form input {
    margin-bottom: 10px;
}
#service_request_form label {
    font-weight: bold;
}
#service_request_form input[type=text] {
    padding: 4px;
}
#service_request_form button[type=submit] {
    background-color: #c8dd63;
    padding: 4px;
    border: 1px solid #42413C;
    width: 150px;
    cursor: pointer;
    font-weight: bold;
}
#service_request_form button[type=submit]:hover {
    background-color: #6ba043;
    color: white;
}
#error_container {
    padding: 20px;
    border: 1px solid red;
    background-color: rgb(255, 220, 220);
    margin-bottom: 1rem;
    width: 594px;
    box-sizing: border-box;
}
.error {
    border-color: red;
    background-color: rgb(255, 220, 220);
}
</style>
<header>
    <a href="index.php"><img id="logo" src="/images/logo.png" width="300" height="300" alt="Logo"></a>
</header>
<nav>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>
</nav>
