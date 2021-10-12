<?php

class Page
{

    public function getPhones()
    {
        $sql = 'SELECT * FROM phone ORDER BY mentions_counter DESC LIMIT 3';
        $db = Db::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static function getLastReviewByPhoneId($phoneId)
    {
        $sql = 'SELECT text FROM review WHERE phone_id = ' . $phoneId . ' ORDER BY id DESC';
        $db = Db::connect();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

}

?>