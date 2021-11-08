<?php

class Cmodel{
    public function GetData(){
        $arrayResult[] = array(
            'TITLE'=> 'Blog hosting site',
            'DATE'=>'22.06.2020',
            'AUTHOR'=>'VolDeMort',
            'IMAGE'=>'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus molestias ipsam dicta omnis reprehenderit, iste alias voluptates atque expedita velit fugit officiis. Quia eum ipsum, repudiandae fugit adipisci ea!'
            
        );

        $arrayResult[] = array(
            'TITLE'=> 'Blog hosting site',
            'DATE'=>'21.10.2021',
            'AUTHOR'=>'Igor',
            'IMAGE'=>'https://news.artnet.com/app/news-upload/2019/01/Cat-Photog-Feat-256x256.jpg',
            'TEXT'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus molestias ipsam dicta omnis reprehenderit, iste alias voluptates atque expedita velit fugit officiis. Quia eum ipsum, repudiandae fugit adipisci ea!'
            
        );

        return $arrayResult;

    }
}