<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Apple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MediaGroupUUID extends AbstractTagGroup
{

  protected string $id = 'Apple:MediaGroupUUID';

  protected string $name = 'MediaGroupUUID';

  protected ?string $phpType = 'string';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Media Group UUID',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Apple::Main
       * line : 2911
       * type : string
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Apple::Main.Apple:MediaGroupUUID',
      'desc' => [
        'en' => 'Media Group UUID',
      ],
    ],
  ];

}
