<html>
    <link rel="stylesheet" href="./welcome4.css">
    <link href="heart.ico" type="image/icon" rel="shortcut icon"/>
    <title>
        282 Soul Train Registration   
    </title>

    <header>
        <center><b><h1>282 Soul Train</h1></center>
    </header>
    <body>

        <script src="background.js" type="text/javascript"></script>

        <form action="signup-submit.php" method="post" enctype="multipart/form-data">
        <div><b><h2>Dating Profile:</h2></b>
        <b>First Name:</b> <input type="text" size="30" maxlength="20" name="fname"/>
        <b>Last Name:</b> <input type="text" size="20" maxlength="14" name="lname"/><br/>
            <b>Upload Your Avatar:</b>
            <input type="file" name="avatar"/><br/>

        <b>Gender:</b>
        <input type="radio" name="cc" value="Male"/> <label>Male</label>
        <input type="radio" name="cc" value="Female"/> <label>Female</label>
        <br/>
        <b>What is your Date of Birth?</b>
        <select name="monthofbirth">
        <option selected="selected">January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
        </select>	

        <select name="dayofbirth">
        <option selected="selected">1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
        </select>	

        <select name="yearofbirth">
        <option selected="selected">1995</option>
        <option>1994</option>
        <option>1993</option>
        <option>1992</option>
        <option>1991</option>
        <option>1990</option>
        <option>Older++</option>
        </select>		
        <br/>
        <b>Hometown:</b> <input type="text" size="14" maxlength="10" name="city"/><br/>
        <b>Country:</b> <input type="text" size="16" maxlength="16" name="country"/><br/>
        <b>One word that describes you:</b> <input type="text" size="14" maxlength="10" name="word"/><br/>
        <br/>
        <b>Bio:</b><br/>
        <textarea name="bio" rows="10" cols="50">
        </textarea><br/>
        <br/>

        <b><h2>What I am Looking For:</h2></b>
        <b>I am looking for a:</b>
        <select name="want">
        <option>Male</option>
        <option>Female</option>
        </select><br/>

        <b>I am looking for someone who is between the ages of:</b>
        <select name="firstage">
        <option selected="selected">18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        </select>
        and 
        <select name="secondage">
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option selected="selected">25</option>
        </select><br/></div>

        <button type="submit" value="Submit">Submit</button>
        <button type="reset" value="Reset">Reset</button>
        </form>

        <script type="text/javascript"> 
        change();
        </script> 

    </body>
    <br/>
    <footer>
        <center>Copyright &copy 2014 <br> CISC 282 All Rights Reserved</center>
    </footer>
</html>