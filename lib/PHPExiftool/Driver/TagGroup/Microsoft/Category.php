<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Category extends AbstractTagGroup
{

  protected string $id = 'Microsoft:Category';

  protected string $name = 'Category';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Category',
    'fr' => 'Catégorie',
  ];

  protected int $count = 0;

  protected int $flags = 1;

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 175328
       * type : Unicode
       * writable : true
       * count : 
       * flags : Avoid,List
       */
      'id' => 'Microsoft::Xtra.Microsoft:Category',
      'desc' => [
        'en' => 'Category',
        'fr' => 'Catégorie',
      ],
    ],
    1 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 176675
       * type : ?
       * writable : false
       * count : 
       * flags : Avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:Category',
      'desc' => [
        'en' => 'Category',
        'fr' => 'Catégorie',
      ],
    ],
  ];

}
