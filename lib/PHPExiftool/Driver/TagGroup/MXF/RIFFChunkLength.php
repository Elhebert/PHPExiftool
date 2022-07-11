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
class RIFFChunkLength extends AbstractTagGroup
{

  protected string $id = 'MXF:RIFFChunkLength';

  protected string $name = 'RIFFChunkLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'RIFF Chunk Length',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 172290
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:RIFFChunkLength',
      'desc' => [
        'en' => 'RIFF Chunk Length',
      ],
    ],
  ];

}
