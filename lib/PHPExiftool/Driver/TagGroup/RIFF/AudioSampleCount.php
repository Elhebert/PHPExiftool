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
class AudioSampleCount extends AbstractTagGroup
{

  protected string $id = 'RIFF:AudioSampleCount';

  protected string $name = 'AudioSampleCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::StreamHeader
       * line : 328815
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::StreamHeader.RIFF:AudioSampleCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
