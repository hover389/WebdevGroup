<!DOCTYPE html>
<html>
        <head>
                <link href="memberDirectory.css" type="text/css" rel="stylesheet"/>
                <title>Membership Directory</title>
                <meta charset="UTF-8">
                <meta name= "robots" content="noindex, nofollow"/>
        </head>
        <body>
                <div id="navBar">
                        <table id="tableNav">
                        <tr>
                        <td class="cell"> <a id="home" href="home.html">Home </a> </td>
                        <td class="cell"> <a id="benefits" href="benefits.html">Member Benefits </a> </td>
                        <td class="cell"> <a id="signUp" href="signUp.html">Member Sign Up </a> </td>
                        <td class="cell"> <a id="events" href="events.html">Events </a> </td>
                        <td class="cell"> <a id="videos" href="videos.html">Videos</a> </td>
                        <td class="cell"> <a id="photos" href="photos.html">Photos </a> </td>
                        <td class="cell"> <a id="directory" href="directory.html">Member Directory </a> </td>
                        <td class="cell" id="login"> MemberLogin drop down </td>
                        </tr>
                        </table>
                </div>
                <div id = "container">
                        <div id = "title">
                                <p><span id="spanTitle">Membership Directory</span></p>
                        </div>
                        <div>
                        <div id = "members">
                                <table id = "membersTable">
                                <?php
                                        $db = new PDO("mysql:dbname=jindrj77;host=localhost","jindrj77","Soccer35");
                                        $sql = "select userName,firstname,lastName,email from memberInfo";

                                        $result = $db->query($sql);
                                        ?><tr><?php
                                        while($row = $result->fetch()){
                                                ?><td class = "cellMembers"><?php echo 'Username: '.$row[0].
                                                '<br />First Name: '.$row[1].
                                                '<br />Last Name: '.$row[2].
                                                '<br />Email: <a href="mailto:>'.$row[3].'">'.$row[3].'</a>';
                                        }?>
                                        </tr><?

                                ?>
                                </table>
                        </div>

                </div>
                </div>

                <div id="footer">
                        <table id="val">
                                <tr>
                                        <td><a href = "http://validator.w3.org/check/referer"> Validate Html</a></td>
                                        <td><a href = "http://jigsaw.w3.org/css-validator/check/referer"> Validate CSS</a></td>
                                </tr>
                        </table>
                        <p id="disc"> Disclaimer: This site is under developement by UW-Oshkosh students as a prototype for the organization Hoverclub of America. Nothing on this site should
                        be construed in any way as being officially connected with or representative of Hoverclub of America</p>
                </div>
        </body>
</html>
