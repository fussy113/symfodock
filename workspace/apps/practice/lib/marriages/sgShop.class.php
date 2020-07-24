<?php

/**
 * お店に関するもの
 */

class sgShop
{
  static $List = array(
    array(
      'hall' => 'B1F',
      'title' => '石臼挽きそば石月',
      'phonetic' => 'イシウスビキソバイシヅキ',
    ),
    array(
      'hall' => 'B1F',
      'title' => '名古屋コーチン親子丼 酉しみず',
      'phonetic' => 'ナゴヤコーチンオヤコドントリシミズ',
    ),
  );

  static $ListDinner = array(
    array(
      'hall' => 'B2F',
      'title' => '石臼挽きそば石月',
      'phonetic' => 'イシウスビキソバイシヅキ',
      'tel' => '052-414-6415',
      'name' => '玉子とじそば',
      'price' => '1,000',
      'description' => '国内産のそばの実を石臼で挽き、挽きたての香りそのままに打たれた"二八そば"',
      'number' => 1
    ),
    array(
      'hall' => 'B2F',
      'title' => '名古屋コーチン親子丼 酉しみず',
      'phonetic' => 'ナゴヤコーチンオヤコドントリシミズ',
      'tel' => '052-446-7085',
      'name' => 'チキン南蛮定食',
      'price' => '907',
      'description' => '自家製の甘酢とタルタルソースでいただく「酉しみず」ならではのチキン南蛮',
      'number' => 3,
      'pickup' => true,
      'options' => array(1,3)
    ),
    array(
      'hall' => 'B2F',
      'title' => '名古屋コーチン親子丼 酉しみず',
      'phonetic' => 'ナゴヤコーチンオヤコドントリシミズ',
      'tel' => '052-446-7085',
      'name' => 'チキン南蛮定食',
      'price' => '907',
      'description' => '自家製の甘酢とタルタルソースでいただく「酉しみず」ならではのチキン南蛮',
      'number' => 2,
      'options' => array(1,3)
    ),
  );

  static $Options = array(
    1 => '個室or半個室',
    2 => '一部喫煙可',
    3 => '全席禁煙'
  );

  static $shopDetail = array(
    array(
      'hall' => 'B2F',
      'title' => '石臼挽きそば石月',
      'phonetic' => 'イシウスビキソバイシヅキ',
      'tel' => '052-414-6415',
      'name' => '玉子とじそば',
      'price' => '1,000',
      'description' => '国内産のそばの実を石臼で挽き、挽きたての香りそのままに打たれた"二八そば"',
      'number' => 1,
      'pickup' => true,
      'options' => array(1,3)
    ),
    array(
      'hall' => 'B2F',
      'title' => '名古屋コーチン親子丼 酉しみず',
      'phonetic' => 'ナゴヤコーチンオヤコドントリシミズ',
      'tel' => '052-446-7085',
      'name' => 'チキン南蛮定食',
      'price' => '907',
      'description' => '自家製の甘酢とタルタルソースでいただく「酉しみず」ならではのチキン南蛮',
      'number' => 2,
    ),
  );
}
