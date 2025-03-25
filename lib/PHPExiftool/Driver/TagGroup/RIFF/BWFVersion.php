<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RIFF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BWFVersion extends AbstractTagGroup
{

  protected string $id = 'RIFF:BWFVersion';

  protected string $name = 'BWFVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::BroadcastExt
       * line : 327802
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::BroadcastExt.RIFF:BWFVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
