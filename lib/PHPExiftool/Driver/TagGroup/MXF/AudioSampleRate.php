<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioSampleRate extends AbstractTagGroup
{

  protected string $id = 'MXF:AudioSampleRate';

  protected string $name = 'AudioSampleRate';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 167987
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AudioSampleRate',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MXF::Main
       * line : 171273
       * type : rational64s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:AudioSampleRate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
