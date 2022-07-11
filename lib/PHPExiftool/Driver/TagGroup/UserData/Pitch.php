<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Pitch extends AbstractTagGroup
{

  protected string $id = 'UserData:Pitch';

  protected string $name = 'Pitch';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Pitch',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325936
       * type : rational64s
       * writable : true
       * count : 
       * flags : Avoid
       */
      'id' => 'QuickTime::UserData.UserData:Pitch',
      'desc' => [
        'en' => 'Pitch',
      ],
    ],
    1 => [
      /**
       * table_name : QuickTime::UserData
       * line : 326200
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:Pitch',
      'desc' => [
        'en' => 'Pitch',
      ],
    ],
  ];

}
