<?php
require_once 'master.php';
header1('Jolly Jumpers');
?>



<br>

<h2>Jolly Jumpers</h2>
<br /> <br />

<div class="notification success png_bg">
				<a href="#" class="close"><img src="../resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close"></a>
				<div>
					You have successfully solved this problem
                                </div>
			</div>

<p>
    <a href="#" class="close">View your submission history</a>
</p>

<p>

</p>
<div class="clear"></div>

<div class="content-box">
    <div class="content-box-header">
        <h3> Problem Description </h3>
    </div>
    <div class="content-box-content">
        <p>
        A sequence of n > 0 integers is called a jolly jumper if the absolute values of the
differences between successive elements take on all possible values 1 through n−1. For
instance, <br>
1 4 2 3 <br>
is a jolly jumper, because the absolute differences are 3, 2, and 1, respectively. The
definition implies that any sequence of a single integer is a jolly jumper.Write a program
to determine whether each of a number of sequences is a jolly jumper.
        </p>

    </div>
</div>

<div class="clear"></div>
<div class="content-box column-left">
    <div class="content-box-header">
        <h3> Input </h3>
    </div>
    <div class="content-box-content">
        <p>
       Each line of input contains an integer n < 3000 followed by n integers representing the
sequence.
        </p>

    </div>
</div>

<div class="content-box column-right">
    <div class="content-box-header">
        <h3> Output </h3>
    </div>
    <div class="content-box-content">
        <p>
       For each line of input generate a line of output saying “Jolly” or “Not jolly”.
        </p>
    </div>
</div>


<div class="clear"></div>

<div class="content-box">
    <div class="content-box-header">
        <h3> Sample I/O </h3>
    </div>
    <div class="content-box-content">
        <h4>Test Case #1</h4>
        <br />
        <h5>Input:</h5>
        <br />
        <pre>
        <code>
4 1 4 2 3
5 1 4 2 -1 6
        </code>
        </pre>
<br />
        <h5>Output:</h5>
        <br />
        <pre>
        <code>
Jolly
Not jolly
        </code>
        </pre>

    </div>
</div>

<div class="clear"></div>

<h3>Submit your solution:</h3>

<form action ="#" method="post">
    <fieldset>
    <!--    <p>
            <input type="text" class="text-input small-input" name="up-file" />
        </p> -->
        <input type="file">
        <br>
        <input type="submit" class="button">
    </fieldset>
</form>

<br />

<div class="notification success png_bg">
				<a href="#" class="close"><img src="../resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close"></a>
				<div>
					Submission successful. Check your results <a href="view_submissions.php">here</a>. Results may take a few minutes.
                                </div>
</div>
<?php
footer();
?>