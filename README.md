# Torch
Torch is a lightweight testing platform for teachers. It has a simple one-click deployment script that works on any web server running PHP.
# About this ReadMe
This ReadMe is up to date as of the release of the version of Torch you are currently using. For an up-to-date version, visit <http://netponents.github.io/Torch>. For a more in-depth walkthrough and reference guide, visit the Torch wiki at <http://github.com/NETponents/Torch/wiki>.
# Deployment
Download the latest release from [https://github.com/NETponents/Torch/releases](https://github.com/NETponents/Torch/releases). Unzip the file you download and copy the resulting files to the wwwroot of your web server. If you need help with this, contact your server administrator as this process varies depending on your server configuration. After that, you are all set to go.
# Creating a test
Make a copy of the folder *~/secure/test/stest*. For this example, we will use *~/secure/test/prog1*. Open up the folder you just copied and open the *test.xml* file. Inside you should see something like this:

    <qs>
      <q>
        <quest>Find value of X: 1+X=9</quest>
        <c>8</c>
      </q>
      <q>
        <quest>9+9=?</quest>
        <c>18</c>
      </q>
    </qs>

The *<quest>* tag contains the question. If you would like to offer a multiple choice question, use #s. Example:

    <q>
     <quest>2+2? #1. 4 #2. 6 #3. 9</quest>
     <c>1</c>
    </q>
    
The **c** tag contains the correct answer. This may be a number, a letter, a word, or anything you like. Just know that it IS case-sensitive. This means that **a** and **A** are not the same thing.

To make a new question, simply copy a set of **q** tags and it's contents.

Once you get that done, go back to *~/secure/test/* and open *tests.xml*. Make a new entry that looks like this. You will need to do this for each test you create.

    <test>
      <title>Exam Title</title>
      <path>folderName</path>
      <questions>10</questions>
      <pass>password</pass>
    </test>
    
The title should be the title of your exam. The path should be the name of the folder that you saved *test.xml* to in the previous step. Questions should be the number of questions minus one. If you are tech-savy, questions is a ZERO-defined index. Password will be a password that you will be required to enter before the student can begin the exam.

To mark a test as a draft (not visible to students), add `<draft>true</draft>` to the test in *test.xml*.

If you would like a complete example of a full-length test, take a look at the **Electronic Hardware Exam I** located in the *elec1* directory.

# Taking a test
Simply visit your web servers home page. On the right you should see a list of available exams. Click on the exam you wish to take.

On the next page, some instructions will be given. Read through them carefully. Beneath that, a brief test will commence to make sure that your computer is capable of taking an exam using Torch. The final step is at the bottom of the page. You will be asked for your name/id. Ask your instructor for what to put here. Next Torch will ask for the exam password. Your instructor will give this code out once he/she is ready to begin the exam.

The next page will verify your identity and start the exam. Each question will be answered by typing an answer and clicking "Next >>". Note that once you have clicked next, you may not return to that question.

At the end, a page will display the results. Show this page to your professor. Be sure to print out a copy for your records. At this point you may close the browser safely.

# Contributing
We will happily accept donations in return for offering this free service. We are just a few programmers who spend our time developing free, open-source software for the benifit of both end-users and other programmers. Visit <http://netponents.github.io/NETponentsWebsite/>.

If you would like to help with code contributions, see the file *CONTRIBUTING* in your Torch installation directory.
