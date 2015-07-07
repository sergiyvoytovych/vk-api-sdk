<?php
/**
 * Created by PhpStorm.
 * User: sergiy
 * email: sirogabox@gmail.com
 * Date: 06.06.15
 * Time: 0:10
 */
require_once('src/Vkontakte.php');

$group_id = 'id Вашей групы VK';
$accessToken = 'Токен который получаем по линку описаному в README.md';
$vkAPI = new Vkontakte(['access_token' => $accessToken]);



if ($vkAPI->postToPublic($group_id, "Hello world!", dirname(__FILE__).DIRECTORY_SEPARATOR.'test_image.jpg', ['vk api', 'автопостинг', 'test post'],array('http://vk.com/klueinfo'))) {

    echo "Всё работает, пост успешно добавлен\n";

} else {

    echo "Опа, пост не добавлен ищите ошибку\n";
}