<?php

class bootstrap {
    
    //вывод статьй на главной
    public function showPost($db) {
        //максимальная записей на странице
        $max_list_post = 5;
        
        //запрос на вывод записей
        //$stmt = $db->query('SELECT id, title, text, date FROM posts ORDER BY id DESC LIMIT $max_list_post');
        //$stmt = $db->query('SELECT id, title, short, text, img, id_author, category, count_like, time, FROM post');
        //$stmt = $db->query('SELECT * FROM post');
        //$pages = $stmt->fetchAll();
        //return $pages;
        
        //$stmt = $db->prepare("SELECT * FROM post");
        //$stmt->execute();
	//$row = $stmt->fetch();
        
        $post = $db->query("SELECT * FROM post");
        return $post;
    }
}
