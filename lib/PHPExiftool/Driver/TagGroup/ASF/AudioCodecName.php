<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioCodecName extends AbstractTagGroup
{

  protected string $id = 'ASF:AudioCodecName';

  protected string $name = 'AudioCodecName';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ASF::CodecList
       * line : 872
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ASF::CodecList.ASF:AudioCodecName',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
