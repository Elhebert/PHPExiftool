<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Keys;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class StillImageTime extends AbstractTagGroup
{

  protected string $id = 'Keys:StillImageTime';

  protected string $name = 'StillImageTime';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Still Image Time',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::Keys
       * line : 323994
       * type : ?
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::Keys.Keys:StillImageTime',
      'desc' => [
        'en' => 'Still Image Time',
      ],
    ],
  ];

}
