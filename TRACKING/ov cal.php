<html>
    <head>
        <title>

        </title>
        <style>
            p{
                color: black;
                margin : 20px;
                text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
            }
            div.form{
                border: 2px solid blue;
            }
            div{
                border: 1px solid gray;
  padding: 8px;
            }
            body{
                background-color: whitesmoke;
                
            }
            b{
                color: red;
                font-size: 1.5rem;
                font-style: 
            }
            </style>
    </head>
    <body>
    <?php
        if(isset ($_POST['submit']))
        {
        $days = $_POST['days'];
        $z = $days - 14 ;
        $E = $z +5 ;
        echo "<b> your next fertility day will start on </b>".$z. " <b> of the following month </b>";
        echo "<br/>";
        echo "<b>your fertility will end on</b> " .$E. "<b> of the next month</b>";
        }
        ?>
    <img src="girl jaws.jpg"width="100%" height="100%">
        <div>
    <p> Females are most fertile in a day or two of ovulation , which is when the ovaries release an egg.</br>
but it is possible to get pregnant leading up to ovulation  as sperm can servive for several days , </br>
inside the female body. </p>

<p> the days of menstrual cycle , where a woman is least likely to get pregnant is </br>
some times called <i> safe period </i></br> . this means that in these days you are</br>
least fertile and you are safe </p></br>
        </div>
<h3> the following table summarizes a tyical menstrual cycle and how a fertile person is </br>
likely to be at each stage </h3></br>

<table border="3" ; cellpadding="5"; cellspacing="4">
<tr><th> days of circle </th> <th> stage</th> <th> fertility</th></tr>
<tr><td> 1-7</td><td> menstruation </td><td> least fertile</td></tr>
<tr><td> 8-9 </td><td> post_ menstruation </td><td> possible to conceive</td></tr>
<tr><td> 10-14 </td><td> days around ovulation </td><td> most fertile </td></tr>
<tr><td> 15-16 </td><td> post ovulation </td><td> possible to conceive </td></tr>
<tr><td> 17-28 </td><td> thichening of uterine lining </td><td> less fertile _ unilke;y to conceive </td></tr>
</table>
<div class="form">
        <form method="POST" action="ov cal.php">
           days:  <select name="days" id="days">
                <option value="20">20 days</option>
                <option value="21">21 days</option>
                <option value="22">22 days</option>
                <option value="23">23 days</option>
                <option value="24">24 days</option>
                <option value="25">25 days</option>
                <option value="26">26 days</option>
                <option value="27">27 days</option>
                <option value="28">28 days</option>
                <option value="29">29 days</option>
                <option value="30">30 days</option>
                <option value="31">31 days</option>
                <option value="32">32 days</option>
                <option value="33">33 days</option>
                <option value="34">34 days</option>
                <option value="35">35 days</option>
                <option value="36">36 days</option>
                
            </select>
            <br/> <br/>
            please enter the first day of your last period <br/>
            date: <input type="date" name="date" placeholder="fist day of last period" required /> <br/><br/>
            <button type="submit" name="submit">submitt </button><br/><br/>
            <a href="logout.html">want to logout? </a>
        </div>
        </form>
        
       
        <img src="girl jaws.jpg"width="100%" height="100%">
    </body>
</html>
