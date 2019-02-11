<?php
namespace serv\core;
class Weather
{
  private $key;
  public $temp_now;
  public $icon;
  public $cityname;
  public $description;
  public function __construct($cityname) {
    $this->key="b40d51ec258472eb00aa55bbe94b117c";
    $this->cityname = $cityname;
  }
  public function setCityName($name) {
    $this->cityname = name;
  }
  public function getCurrentWeather() {
    $url = "https://api.openweathermap.org/data/2.5/weather?".
    "q=".$this->cityname.",ru&units=metric&appid=".$this->key."&lang=ru";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Устанавливаем параметр, чтобы curl возвращал данные, вместо того, чтобы выводить их в браузер.
    curl_setopt($ch, CURLOPT_URL, $url);
    $contents = curl_exec($ch);
    curl_close($ch);

    $weather=json_decode($contents);
    $this->temp_now=$weather->main->temp."°C";
    $this->icon=$weather->weather[0]->icon.".png";
    $this->cityname = $weather->name;
    $this->description=$weather->weather[0]->description;

  }

  public function prettyString(){
    return "В ".$this->cityname." сейчас ".$this->temp_now." и ".$this->description;
  }
  }
 ?>
