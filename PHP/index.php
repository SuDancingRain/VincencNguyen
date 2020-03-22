<!DOCTYPE html>

<html>
    <head lang="cs">
        <title lang="cs">Test page</title>  
        <meta name="author" content="Vincenc Nguyen" />
        <meta name="publisher" content="Vincenc Nguyen" />
        <meta name="copyright" content="Vincenc Nguyen" />
        <meta name="description" content="Webová stránka" />
        <meta name="keywords" content="html, css, js" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="shortcut icon" href="img/" />
    </head>
    <body lang="cs">
        <p>Overview <br> Overkill  <span> Overdone</span></p>  

        <hr>

        <p><a href="http://google.com" target="#">Link  </a></p><br>
        <p><a href="link.html" target="#">Link</a></p><br>

        <img src="img/Eclipse.jpg" title="ERROR"  alt="obrazek"><br>

        <a href="http://google.com" target="#"><img src="img/Eclipse.jpg" alt="Google"></a><br>
        <a href="img/Eclipse.jpg" target="#"><img src="img/Eclipse.jpg" alt="Image"></a>

        <h1>Luna</h1>
        <h2>Luna</h2>
        <h3>Luna</h3>
        <h4>Luna</h4>
        <h5>Luna</h5>
        <h6>Luna</h6>

        <img src="img/Eclipse.jpg" title="img sample" alt="img sample alt">

        <p > Bruh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nigga</p>

        <div>
            <div>
                <div>Hell </div>   
            </div>
        </div>

        <div class="class">
            <div>
                <div> Greed</div>   
            </div>
        </div>
        <div class="menu">
            <ul>
                <li class="square"><a href="#">Greed</a></li>
                <li class="circle"><a href="#">Pride</a></li>
                <li class="disc"><a href="#">Wrath</a></li>
                <li class="circle"><a href="#">Sloth</a></li>
                <li class="square"><a href="#">Envy</a></li>
                <li class="disc"><a href="#">Lust</a></li>
            </ul>
        </div>

        <br>

        <form action="index.php" method="GET">
            <dl>
                <dt>Username</dt>
                <dd>
                    <input type="text" name="Username" value="">
                </dd>
            </dl>
            <dl>
                <dt>Password</dt>
                <dd>
                    <input type="password" name="Password">
                </dd>
            </dl>
            <dl>
                <dt>Form</dt>
                <dd>
                    <textarea name="form"></textarea>
                </dd>
            </dl>
            <dl>
                <dt>Choose Qualification</dt>
                <dd>
                    <input type="checkbox" name="Qualification" value="Edits">Edits
                    <input type="checkbox" name="Qualification" value="Programing">Programing
                    <input type="checkbox" name="Qualification" value="Creating">Creating
                </dd>
            </dl>
            <dl>
                <dt>Degree</dt>
                <dd>
                    <input type="radio" name="Degree" value="Grade"> Grade
                    <input type="radio" name="Degree" value="Highschool">Highschool 
                    <input type="radio" name="Degree" value="College">College
                    <input type="radio" name="Degree" value="Uni">Uni
                </dd>
            </dl>
            <dl>
                <dt>Choose Job</dt>
                <dd>
                    <select name="Job">
                        <option value="" selected>---+---</option>
                        <option value="Content">The content creation</option>
                        <option value="Edits">File editing</option>
                        <option value="Details">Finishing touches</option>
                        <option value="Service">Upload and services</option>
                    </select>
                </dd>
            </dl>


            <dl>
                <dt></dt>
                <dd>
                    <button name="Submit">Submit</button>
                </dd>
            </dl>
            <dl>
                <dt></dt>
                <dd>
                    <input type="submit" name="Login" value="Login">
                </dd>   
            </dl>
        </form>        

        <?php
        require 'class/OwnFunctions.php';
        $blank = new OwnFunctions();

        echo $blank->blank();

        require 'indexPHP.php';
        ?>
        <!-- Work of Vincenc Nguyen -->
    </body>


</html>