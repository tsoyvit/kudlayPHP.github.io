<?php



//require 'funcs.php';




$title  = 'My Blog::About';

$post = '                    <p>Lorem psum dolor sit amet, consectetur adipisicing elit. Cum, cupiditate doloribus id ipsa
                        minima quas rem vero. Alias assumenda aut eveniet minus neque odit quam quibusdam repellendus,
                        veritatis voluptas. Aspernatur.</p>
                    <p>At culpa deleniti excepturi sed, ullam voluptatum! Amet assumenda at cupiditate deserunt
                        distinctio doloremque eligendi fuga nam nostrum obcaecati, officiis perferendis perspiciatis
                        similique soluta temporibus ullam veniam voluptatum. Animi, iure.</p>
                    <p>Asperiores assumenda aut blanditiis ea, iste maxime nisi odio temporibus. A ab aperiam assumenda
                        dolorum eius facilis fuga hic id iure labore mollitia, omnis quae quisquam? Ad blanditiis labore
                        tempora?</p>';


$recent_posts = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 3')->findAll();


require_once VIEWS . '/about.tpl.php';


