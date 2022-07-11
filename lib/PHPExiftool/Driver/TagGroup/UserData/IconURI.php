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
class IconURI extends AbstractTagGroup
{

  protected string $id = 'UserData:IconURI';

  protected string $name = 'IconURI';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Icon URI',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325836
       * type : string
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::UserData.UserData:IconURI',
      'desc' => [
        'en' => 'Icon URI',
      ],
    ],
  ];

}
