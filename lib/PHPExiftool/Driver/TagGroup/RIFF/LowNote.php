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
class LowNote extends AbstractTagGroup
{

  protected string $id = 'RIFF:LowNote';

  protected string $name = 'LowNote';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : RIFF::Instrument
       * line : 328613
       * type : int8s
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'RIFF::Instrument.RIFF:LowNote',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
